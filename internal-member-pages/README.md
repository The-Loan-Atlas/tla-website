# Internal member pages — members.theloanatlas.com

Self-contained pages for the **members** WordPress install, each built to live inside a
single Gutenberg **Custom HTML block** (or one Elementor "HTML" widget). This is a
*separate* WordPress install from theloanatlas.com — these are **not** part of this repo's
`public/` → `build`/`ship` pipeline. Source lives here for version control only; deploy is
a manual copy-paste into WP.

Each file's top comment holds its own deploy notes. Open any file directly in a browser to
preview it.

## Files

| File | What it is | CSS scope |
|---|---|---|
| `mastermind-platinum.html` | Platinum activation page — members' **free 6-month** offer, then $69/mo. Mirrors the public `../public/platinum-marketing.html` in look and content, rebuilt JS-free. | `.tla-plat` |
| `platinum-upgrade.html` | Platinum upgrade page — existing members' **$49/mo member-pricing** offer (regular $99/mo), CTAs: `[tla_magic_login_form]`, `[tla_platinum_cta]`, `[tla_spt_subscription_popup]`. | `.tla-plat` |
| `sales-coach-feedback.html` | Anonymous feedback survey on the Sales & Scripting Coach GPT, for its ~10 power users. Emailed directly; not linked from any nav; set **noindex**. | `.tla-scf` |
| `health-mindset-feedback.html` | Same survey pattern for the Health Mindset & Vitality Coach GPT (LeadConnector form `CDsbRwZWQigT1OxGP6QF`). Emailed directly; set **noindex**. | `.tla-scf` |

## Deploy (copy-paste, no SFTP / no theme edits)

1. Images are already wired to the members Media Library (`.../wp-content/uploads/2026/06/`
   and `/2026/08/`). No placeholders remain.
2. WP admin → new page → add one **Custom HTML** block (or a single Elementor "HTML"
   widget) → paste everything between the `PASTE FROM THE NEXT LINE DOWN` and
   `PASTE UP TO HERE` markers (omit the top comment).
3. Set `<title>` / meta description / OG tags in the **SEO plugin fields** on the page —
   not in the HTML, where they're ignored inside a content block. Survey pages: set
   **noindex** there too (there's no `<head>` to hold a robots meta tag).
4. Publish as an **Administrator** (Super Admin if multisite) so the HTML isn't filtered.
5. **Preview the live front end** (not just the editor view). Then re-open and re-save to
   confirm the block isn't flagged "invalid" (round-trip test).

### Platinum pages only

The CTA areas use WPCode shortcodes (`[tla_magic_login_form]`, `[tla_platinum_cta]`,
`[tla_spt_add_url …]` on mastermind-platinum, `[tla_spt_subscription_popup]` on platinum-upgrade). Confirm those snippets + the `do_shortcode` filter snippet are
active (see the top comment in each file). Confirm the **FAQ billing answers** match the
real terms of the offer before publishing.

## Why they're built this way (constraints)

- **No `<script>`.** The members site strips `<script>` first under multisite /
  security-plugin sanitization, which is why every page in this family is JS-free (the
  Platinum FAQ uses native `<details>`/`<summary>`).
- **Every CSS selector is scoped** (`.tla-plat` for Platinum, `.tla-scf` for both
  surveys) so it can't collide with the theme's styles.
- **Dark sections break out** of the theme content container via
  `width:100vw; margin-left:calc(50% - 50vw)` (unnecessary if a full-width / canvas page
  template exists, but harmless).
- **Fonts via `@import` + system fallback** — reads cleanly even if the `@import` is
  stripped.

## Survey pages — specifics

### The form

`sales-coach-feedback.html`: **"Power User Survey - AI Sales & Scripting Coach"**,
LeadConnector form ID `sv52dmbfrM6zCAs3uYXI` — already wired in (iframe `src`, `id`,
`data-layout-iframe-id`, `data-form-id`, and the fallback link). Confirm the survey renders
once pasted.

### Images

| Image | Path | Used for |
|---|---|---|
| `consultation-header.png` | `/uploads/2026/08/` | page backdrop, under the blue gradient |
| `Loan-Atlas-logo-color-1.png` | `/uploads/2026/06/` | logo at the top of the white card |

If the **backdrop** is ever moved or deleted the page **won't look broken** — it falls back
to a flat navy gradient, so the failure is silent. If the photo stops showing, check the URL
first. A missing **logo**, by contrast, leaves a visible broken-image gap.

### The iframe caveat

A GHL form normally needs an `<iframe>` **and** `form_embed.js`. These pages **omit
`form_embed.js`** — its only job is postMessage auto-resize, replaced here by a fixed
`min-height` (the `--scf-form-h` token, with a taller value under 600px). So the page stays
script-free and only the `<iframe>` has to survive sanitization.

There is **no visible fallback link** under the form (removed by request), so if the iframe
is stripped the card renders with an empty gap and no way forward. Verifying the form on
the live front end is the only thing standing between a stripped iframe and a dead page —
do it before sending the email. If it is stripped, replace the iframe with a gold button
linking to the form URL.

### `--scf-form-h` — sized to the form's resting height

Because there's no auto-resize, the iframe height is hardcoded. Measured against the live
form **inside the card**: **695px** desktop and **810px** under 600px (labels wrap, so it
runs taller). Note the form's own `data-height="671"` understates it.

Both are set to the **exact** measured resting height, with no padding — any slack shows as
a faint seam where GHL's white background stops short of the iframe's bottom edge.

Sized to rest rather than to the worst case on purpose. The form grows by ~100–300px when
all three required fields show validation errors, but sizing for that leaves a large empty
band in the state everyone sees first. At rest the card hugs the form; in the rarer error
state the iframe scrolls internally and GHL scrolls the first error into view.

**Re-measure both values if questions are ever added to a survey**, or if the card's
padding changes — the form's width drives how much its labels wrap, which drives height.

### Before publishing a survey — confirm

- **Anonymity, in GHL.** Members are logged in on this site, so a GHL form can attach
  submissions to a known contact via URL params or cookies *even with no name/email
  field*. Check the form's settings, then submit a live test **while logged in** and
  confirm no contact is attached. That test is the only real proof.
- **Notifications are on** in GHL, so responses don't sit unnoticed.
- The page is set **noindex** in the SEO plugin.
- Consider a GHL workflow mirroring submissions into Google Sheets — for a handful of
  responses a spreadsheet beats CRM records for reading results. Pure GHL config, no code.
