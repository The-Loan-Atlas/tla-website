# CLAUDE.md

Guidance for Claude Code (claude.ai/code) when working in this repository.

> **Docs map:** this file is the orientation + summary. For full detail, defer to:
> **[WORKFLOW.md](../WORKFLOW.md)** (everyday edit→ship loop, caching gotcha) ·
> **[DEPLOY.md](../DEPLOY.md)** (deploy architecture & one-time setup) ·
> **[.claude/DESIGN.md](DESIGN.md)** (colors, type, components, page families, motion).

## Project Overview

Marketing website for **The Loan Atlas** — a mortgage coaching and AI business system.
Source is plain static HTML/CSS/JS (no framework, no bundler). It ships to a live
WordPress site (theloanatlas.com) via a small build step that turns each `public/` page
into a PHP theme partial. Playwright is present **only** for design-review screenshots.

## Dev & deploy workflow (read this first)

**You edit `public/` — never `wp-theme/…/tla/`, which is generated and overwritten on
every build.** There are three copies of each page; you only author one.

```bash
npm run serve     # localhost:4321 — raw-source dev server (no nav/footer chrome); /mockups/ too
npm run build     # scripts/convert-pages.sh — regenerates wp-theme/…/tla/ from public/
npm run preview   # scripts/preview-pages.sh + preview-blog.js — assembles wp-theme/_preview-*.html
npm run preview:blog # LIVE blog only: runs the real blog PHP → wp-theme/_preview-tpl-{home,single,archive}.html
npm run ship "msg"# build → preview → commit → push (push to main auto-deploys in ~30s)
npm run shoot     # Playwright screenshots (run `npm run shoot:install` once first)
```

- **Source of truth is `public/`** — `public/*.html`, `public/css/`, `public/js/`,
  `public/assets/`.
- **Files you hand-edit under `wp-theme/` (NOT generated from `public/`):** the shared
  `…/tla/partials/header.php` and `footer.php` (each page's `<header>`/`<footer>` is a
  `<!-- TLA_HEADER -->` placeholder the build swaps for these), **and the live blog**
  (see the ⚠️ note below) — `wp-theme/responsiveChild-theme/home.php` +
  `…/tla/partials/blog-head.php`/`blog-foot.php` + the `tla_blog_*` helpers in
  `functions.php`.
- **The preview IS the test.** Judge a change from `wp-theme/_preview-<slug>.html` (it
  renders the exact files that deploy). A raw `public/*.html` opened directly will be
  missing the nav/footer — don't judge from it.
- **Default: edit `public/` only.** Run a build/preview when asked; run `ship` (which
  pushes/deploys) only on a separate, explicit OK.

> Full detail lives in **[WORKFLOW.md](../WORKFLOW.md)** (everyday loop, the caching
> gotcha) and **[DEPLOY.md](../DEPLOY.md)** (architecture & one-time setup). This file
> only summarizes — defer to those.

## Architecture

**Pages:** ~20 live `.html` pages in `public/`, each standalone. They fall into four
`public/` design families (see DESIGN.md; the blog is separate — see below): house style (`index`, `join`, `membership`,
`live-events`, `contact`), dark-hero/enterprise (`faculty`, `consultation*`, `enterprise`,
`whats-inside`), fresh standalone landings (`ai-originator-masterplan`, `5-scripts-for-dominating-point-of-sale`,
`join-mastermind-2026`, `platinum-marketing`), and
legal/utility (`privacy-policy`, `terms-of-use`, `end-user-agreement`).

> ⚠️ **The blog is NOT a `public/` page — it's the #1 thing that trips people up.**
> `public/blog.html` (also `blog-archive.html`, `blog-post.html`) is a **static mockup
> only** — editing it changes nothing on the live site, and `convert-pages.sh` does
> **not** build it. The live `/blog/` is WordPress's native posts index, rendered by
> `wp-theme/responsiveChild-theme/home.php` (markup) + `…/tla/partials/blog-head.php`
> (CSS) + `…/blog-foot.php` (scripts) + `tla_blog_*` helpers in `functions.php`. Single
> posts = `single.php`, category archives = `archive.php`. To change the live blog's
> **markup** you **hand-edit those `wp-theme/` PHP files directly** (no `public/` source);
> port any mockup change INTO them. Blog **styles** are the exception: edit
> `public/css/blog.css` (the theme's `tla/css/blog.css` is overwritten by the build).
>
> **Previewing the live blog:** `npm run build && npm run preview:blog`, then open
> `wp-theme/_preview-tpl-home.html` (/blog/), `_preview-tpl-single.html` (a post, with
> every content element + all `[tla_cta]` bands) and `_preview-tpl-archive.html`. These
> run the real templates, `functions.php` and partials through PHP (`brew install php`)
> against a fake WordPress (`scripts/blog-preview/wp-stub.php`) and sample posts
> (`scripts/blog-preview/fixtures.php` — edit freely, never ships). Any PHP warning fails
> the run. It does NOT load the CSS WordPress/plugins add on the live site (block
> library, global styles, Additional CSS), so still glance at a live post after shipping.
> The older `_preview-blog-*.html` files preview the **mockups**, not the live blog.

**Mockups live in `/mockups/` at the repo root (NOT in `public/`)** — `hero-mockup*.html`,
`patterns.html`, section mockups, `emails/`. They never deploy. Put every new mockup there.
View them with `npm run serve` at `http://localhost:4321/mockups/<file>.html`. Live pages in
`public/` are grouped into subfolders (`live-events/`, `custom-sales-pages/`,
`webinar-sales-pages/`, `custom-download-pages/`, `custom-consultation-pages/`, `webinar-registration/`, `trainings/`). Subfolder pages
reference shared files with `../` (`../css/…`, `../js/…`, `../assets/…`, `url('../assets/…')`)
so they render when opened straight from disk; the build strips any `../`. Links to other
pages stay bare (`join.html`) — the build's link map only matches that form.
A new page must be added to the slug map in `scripts/convert-pages.sh` with its folder prefix.

**Filename = slug, always.** A page's source file is named exactly after its live slug:
`/join-mastermind-2026/` lives at `public/webinar-sales-pages/join-mastermind-2026.html`.
The only exception is `index.html` → homepage. Draft-slug pages are named after the draft
slug (`webinar-registration-draft.html`) and renamed when promoted. Never change a slug
without renaming the file: `git mv` it, then update its `convert` line and its
`href="<name>\.html"` rule in `rewrite()` in `convert-pages.sh`, plus every
`href="<old>.html"` link in `public/`.

**Shared live-event sidebar:** the Join The Loan Atlas / Free Business Assessment sidebar on
every `public/live-events/` page is ONE file, `public/partials/event-sidebar.html`. Pages
include it with `<!-- TLA_EVENT_SIDEBAR title="Want to Be Coached By Josh?" -->` (own line);
the build inlines it and fills `{{TITLE}}`. The column heading is the only per-page value —
edit card copy in the partial, never per page. Like the header, it's absent in `npm run
serve`; check it in the previews.

**Shared resources (linked by every page, in this order):**
- `css/styles.css` (~8,200 lines) — design tokens at the top, then the component
  catalog. It has grown to contain four design systems (house, What's-Inside V1/V2,
  mastermind/shared-landing) plus two page-scoped fresh-page suites (`.aimp-*`, `.s5-*`).
- `css/chrome.css` (~370 lines) — site-wide header/footer/nav, loaded **last**.
  Self-contained (hardcoded values, no token dependency).
- `js/nav.js` (mobile drawer + nav dropdowns), `js/animations.js` (scroll reveal,
  count-ups, hero entrance), `js/ai-systems-carousel.js` (auto-advancing showcase).
  Not every page loads all three.
- Google Fonts CDN — Manrope (display) + Inter (body).

**Reality of page CSS:** most pages also carry a **large inline `<style>` block** for
their hero and bespoke layout (whats-inside ~2,650 lines; mastermind ~1,940). Shared
tokens/chrome/components live in the stylesheets; per-page layout choreography lives
inline. Match this pattern when adding pages.

**Assets:** all images in `public/assets/`. Logos: gold variant in the header, color
variant in the footer (`Loan Atlas logo-gold.png` / `…-color.png` / `…-white.png`).
`public/assets/` deploys, so it holds **only images the live site uses**. Every
unpublished image lives in `/image-library/` at the repo root (`retired/`, `unused/`,
`source/`). Never delete a site image; `git mv` it into `image-library/retired/`.
`npm run assets:unused` lists candidates (report only; `-- --move` files them). It can't
see the WordPress database, so spot-check before moving. See `image-library/README.md`.

## Design System

**Source of truth: [.claude/DESIGN.md](DESIGN.md)** — full color/type/component reference,
the five page families, motion specs, and the "fresh page design" rules. Highlights:

- **Colors:** Primary Midnight Slate `#021c36`; Brass `#c9961c` / Brass-bright `#eac25a`;
  brass gradient `linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%)`;
  background `#f7f9fb`, surface `#ffffff`.
- **Canonical dark band:** `linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%)`
  (most dark sections). `linear-gradient(135deg, #0a1628, #131b2e, #1e293b)` is only
  `.panel-dark`/`.ai-panel`.
- **Type:** Manrope display / Inter body. `.t-display` (700), `.t-headline-lg/-md` (600),
  `.t-body-lg/-body` (400), `.t-eyebrow` (Inter **700**, 0.875rem, uppercase, brass).
- **Spacing:** 8px-ish — xs 8 / sm 16 / md 24 / lg 40 / xl 64. 1280px container, 24px gutter.
  `.section` = `padding-block: clamp(48px, 6vw, 96px)`.
- **Shape:** `--radius` 0.25rem default; cards `--radius-xl`/`-2xl`; large containers
  `--radius-3xl`.

## CSS conventions

- Use the CSS custom properties (design tokens), not hardcoded hex.
- For a **new reusable component**, add it to the relevant region of `css/styles.css`.
  For **page-specific layout**, prefer an inline `<style>` block on the page (the
  established pattern) rather than bloating styles.css.
- Mobile-first; breakpoints declared within each component's section.
- "Fresh page" landings (`make it look like <external site>`) get their own namespaced
  classes and visual language — keep only colors + fonts + logo. See DESIGN.md.
- All motion must include a `prefers-reduced-motion: reduce` fallback (the site honors it
  everywhere).

## Landing pages: creative freedom

Landing and marketing pages (e.g. Platinum Marketing) should **stand out**, not look like
interchangeable pages assembled from the base component library.

- **Sacred — never change:** the brand color palette (Midnight Slate `#021c36`, the brass
  gradient, backgrounds), Manrope/Inter typography, and the logo.
- **Free to invent:** section layouts, page-specific CSS and JS, custom interactive/visual
  sections, and real motion (parallax, sticky-scroll, animated counters, hover states, SVG
  draw-ins, etc.) — still with a `prefers-reduced-motion` fallback.
- This applies to **landing/marketing pages only**. Ordinary and utility pages keep the
  strict rule: restyle tokens/colors/type only, leave layout and section structure intact.
- Use the `frontend-design` skill when building one. Before showing it, self-review:
  `npm run shoot <page>.html` for desktop/tablet/mobile screenshots, critique for
  genericness, refine, then do the final check in the built `_preview-*.html`.
- Ask for reference sites the requester loves and real product screenshots, and use them
  instead of placeholder frames.
