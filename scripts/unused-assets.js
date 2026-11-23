#!/usr/bin/env node
// Lists images in public/assets/ that no live page uses.
//
//   npm run assets:unused            report only (changes nothing)
//   npm run assets:unused -- --move  also git-mv the fully unused ones into
//                                    image-library/retired/ (same sub-path)
//
// "Used" means the file name appears in any live source the build ships:
//   public/**  (pages, css, js)  and the hand-edited theme PHP/CSS/JS in
//   wp-theme/responsiveChild-theme/ (header/footer partials, blog templates,
//   functions.php). Generated copies under tla/ are skipped.
// Mockups and alternate-styles are checked separately: an image only they use
// is reported as "mockup-only" and is never moved (moving it breaks them).
//
// Limits — read before moving anything:
//   * It can't see the WordPress database. Blog posts or Elementor pages that
//     point straight at a theme asset URL count as "unused" here; moving the file
//     breaks them on the next ship (the build's rsync --delete removes it live).
//   * Names built at runtime in JS (e.g. `slide-${n}.png`) aren't detected.
// So treat the list as candidates, and spot-check before --move.
const fs = require('fs');
const path = require('path');
const { execFileSync } = require('child_process');

const REPO = path.resolve(__dirname, '..');
const ASSETS = path.join(REPO, 'public', 'assets');
const RETIRED = path.join(REPO, 'image-library', 'retired');
const TEXT_EXT = new Set(['.html', '.htm', '.php', '.css', '.js', '.json', '.md']);
const IMG_EXT = new Set(['.png', '.jpg', '.jpeg', '.gif', '.webp', '.svg', '.avif', '.mp4', '.webm', '.ico']);

function walk(dir, skip = () => false, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const ent of fs.readdirSync(dir, { withFileTypes: true })) {
    if (ent.name.startsWith('.') || ent.name === 'node_modules') continue;
    const p = path.join(dir, ent.name);
    if (skip(p)) continue;
    if (ent.isDirectory()) walk(p, skip, out);
    else out.push(p);
  }
  return out;
}

// Read every text file under the given roots and return one searchable string,
// including a URL- and HTML-entity-decoded copy so "what%27s inside.jpg" and
// "Loan%20Atlas logo.png" match their real file names.
function corpus(roots, skip) {
  let text = '';
  for (const root of roots) {
    for (const f of walk(root, skip)) {
      if (!TEXT_EXT.has(path.extname(f).toLowerCase())) continue;
      const t = fs.readFileSync(f, 'utf8');
      let decoded = t.replace(/%([0-9a-fA-F]{2})/g, (_, h) => String.fromCharCode(parseInt(h, 16)));
      decoded = decoded.replace(/&#39;|&#x27;|&apos;/g, "'").replace(/&amp;/g, '&');
      text += t + '\n' + decoded + '\n';
    }
  }
  return text;
}

const theme = path.join(REPO, 'wp-theme', 'responsiveChild-theme');
const generated = ['assets', 'css', 'js', 'pages'].map((d) => path.join(theme, 'tla', d));
const live = corpus(
  [path.join(REPO, 'public'), theme],
  (p) => p === ASSETS || generated.includes(p),
);
const mock = corpus([path.join(REPO, 'mockups'), path.join(REPO, 'alternate-styles')]);

const unused = [];
const mockupOnly = [];
for (const f of walk(ASSETS)) {
  if (!IMG_EXT.has(path.extname(f).toLowerCase())) continue;
  const name = path.basename(f);
  if (live.includes(name)) continue;
  (mock.includes(name) ? mockupOnly : unused).push(f);
}

const mb = (files) => (files.reduce((s, f) => s + fs.statSync(f).size, 0) / 1e6).toFixed(1);
const rel = (f) => path.relative(ASSETS, f);
const list = (files) =>
  files
    .sort((a, b) => fs.statSync(b).size - fs.statSync(a).size)
    .forEach((f) => console.log(`  ${(fs.statSync(f).size / 1e6).toFixed(2).padStart(6)} MB  ${rel(f)}`));

console.log(`\nUnused — no live page or theme file references these (${unused.length} files, ${mb(unused)} MB):`);
list(unused);
console.log(`\nMockup-only — used only by mockups/ or alternate-styles/, left in place (${mockupOnly.length} files, ${mb(mockupOnly)} MB):`);
list(mockupOnly);

if (!process.argv.includes('--move')) {
  console.log('\nReport only. Spot-check the list (see limits at the top of scripts/unused-assets.js),');
  console.log('then run `npm run assets:unused -- --move` to file the unused ones into image-library/retired/.\n');
  process.exit(0);
}

let moved = 0;
for (const f of unused) {
  const dest = path.join(RETIRED, rel(f));
  if (fs.existsSync(dest)) {
    console.log(`  skip (already in retired/): ${rel(f)}`);
    continue;
  }
  fs.mkdirSync(path.dirname(dest), { recursive: true });
  execFileSync('git', ['mv', f, dest], { cwd: REPO });
  moved++;
}
console.log(`\nMoved ${moved} file(s) into image-library/retired/. Review with \`git status\`, then build + preview before shipping.\n`);
