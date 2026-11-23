# Website Copy Docs

Plain-text copy for each live marketing page on theloanatlas.com, extracted from the
source HTML in [`public/`](../../public/). One markdown file per page. Use these for copy
review, or drop a file into a Claude chat project to draft edits.

**How to keep these current:** these are generated from the page source. After copy
changes ship, regenerate the relevant file(s) rather than hand-editing here — the page
HTML in `public/` is the source of truth, these docs are a snapshot.

## Pages

| Page | Live URL | Copy doc | Last refreshed |
|---|---|---|---|
| Homepage | `/` | [index.md](index.md) | 2026-11-22 |
| What's Inside (individual sales page) | `/whats-inside/` | [whats-inside.md](whats-inside.md) | 2026-11-22 |
| Faculty | `/faculty/` | [faculty.md](faculty.md) | 2026-11-22 |
| Perfect Loan Process | `/perfect-loan-process/` | [perfect-loan-process.md](perfect-loan-process.md) | 2026-11-22 |
| Corporate (enterprise sales page) | `/enterprise/` | [enterprise.md](enterprise.md) | 2026-11-22 |
| Consultation | `/consultation/` | [consultation.md](consultation.md) | 2026-11-22 |
| 5 Scripts | `/5-scripts-for-dominating-point-of-sale/` | [5-scripts.md](5-scripts.md) | 2026-11-22 |
| AI Originator Masterplan | `/ai-originator-masterplan/` | [ai-originator-masterplan.md](ai-originator-masterplan.md) | 2026-11-22 |
| Consultation — Corporate | `/enterprise-consultation/` | [consultation-corporate.md](consultation-corporate.md) | 2026-11-22 |
| Pricing | `/join/` | [join.md](join.md) | 2026-11-22 |

Each refreshed doc opens with the page's SEO title and meta description. JS-rendered copy
is labeled, and sample text inside product mockups is marked "(in-mockup UI text)".

## Not included

- **Blog pages** (`blog`, `blog-archive`, `blog-post`) — currently template/mockup
  content, not finalized marketing copy.
- **Legal/utility pages** (`privacy-policy`, `terms-of-use`, `end-user-agreement`).
- **Experiments** (`hero-mockup*`, `patterns`) — not live.

## Notes worth knowing for review

- **Embedded forms/calendars** (consultation, consultation-corporate,
  perfect-loan-process, ai-originator-masterplan, 5-scripts) use third-party
  LeadConnector / GoHighLevel embeds. Their field labels and submit-button text are
  **not** in our HTML, so the docs only note where they sit.
- **JS-driven copy** — the homepage hero showcase, faculty bios/stats (pop-up data),
  tabbed showcases, typed chat demos and count-up stats are rendered by JavaScript.
  This copy is captured and labeled where it appears.
- **In-mockup UI text** (sample dashboards, chat screens) is under clearly marked
  subsections — skip those if you're only reviewing persuasive copy.
