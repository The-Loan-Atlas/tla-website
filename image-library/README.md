# Image library — images that are NOT published

Everything in `public/assets/` deploys to theloanatlas.com on every build. This folder is
the home for every image that **doesn't** — so nothing is ever lost, and `public/assets/`
holds only what the live site actually uses. Nothing here is read by the build, the
preview, or the deploy.

```
image-library/
  retired/   was live in public/assets/, then removed from the site
  unused/    added for the site but never shipped
  source/    raw material, not meant for the site as-is
    original-site/         images saved from the previous theloanatlas.com
    product-screenshots/   raw screenshots of the Loan Atlas product UI
```

| Folder | Was it approved for the site? | To use it again |
|---|---|---|
| `retired/` | Yes — it ran live | Move it back, unchanged |
| `unused/` | No | Review first |
| `source/` | No — raw material | Crop / export a web version into `public/assets/` |

## Rules

1. **Never delete a site image — retire it.** When no page uses an image any more, move
   it from `public/assets/` into `retired/`, keeping its file name and any sub-folder
   (`public/assets/live-events/x.png` → `retired/live-events/x.png`), so restoring it is
   a straight move back.
2. **Always move with `git mv`** (not Finder) so the file's history follows it.
3. **Check here before adding an image** to `public/assets/` — it may already exist.
4. **Keep it lean.** Everything here is committed to git, and every clone downloads it
   forever. Compress large files before adding them, and think twice about anything over
   ~5 MB.

## Finding images to retire

```bash
npm run assets:unused             # report only — changes nothing
npm run assets:unused -- --move   # git mv the unused ones into retired/
```

The report lists images in `public/assets/` that no page, stylesheet, script or theme
template references, plus a separate **mockup-only** group (used only by `mockups/` or
`alternate-styles/`) that is never moved, because moving them would break those mockups.

**Spot-check before `--move`.** The script can't see the WordPress database, so an image
linked directly from a blog post or Elementor page looks unused here — and the next ship
deletes it from the live server. It also can't see file names assembled in JavaScript.
After moving, run `npm run build && npm run preview` and check the pages before shipping.
