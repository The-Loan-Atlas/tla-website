<?php
/**
 * Body partial for /follow-up-pro/ (TLA Full HTML template).
 * Generated from public/product-pages/follow-up-pro.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Follow-Up Pro | AI Follow-Up for Loan Officers | The Loan Atlas';
$tla_description = 'Turn your first borrower call into CRM-ready notes, a loan strategy, and follow-up for the client and the referring Realtor in minutes. Included with The Loan Atlas membership.';
$tla_active      = '';
?>
  <style>
    /* ==========================================================================
       Follow-Up Pro — page-scoped (.fup-*)
       The one loud element is the hero demo (transcript → four outputs). Every
       other section is typographic and quiet on purpose.
       ========================================================================== */
    .fup {
      --fup-ink: var(--on-surface);
      --fup-muted: var(--on-surface-variant);
      --fup-line: rgba(2, 28, 54, 0.12);
      --fup-dark: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      --fup-gold: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      background: var(--background);
      color: var(--fup-ink);
      font-family: var(--font-body);
      overflow-x: clip;
    }

    .fup h1, .fup h2, .fup h3 {
      font-family: var(--font-display);
      color: inherit;
      margin: 0;
      text-wrap: balance;
    }

    /* :where() keeps this reset at zero specificity so component margins win */
    :where(.fup) p { margin: 0; }

    .fup-nowrap { white-space: nowrap; }

    .fup-h2 {
      font-size: clamp(1.875rem, 3.4vw, 2.75rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.025em;
    }

    .fup-lead {
      font-size: clamp(1.0625rem, 1.3vw, 1.1875rem);
      line-height: 1.6;
      color: var(--fup-muted);
      max-width: 60ch;
    }

    .fup-band { padding-block: clamp(64px, 8vw, 120px); }

    .fup-dark {
      background: var(--fup-dark);
      color: #fff;
    }

    .fup-dark .fup-lead { color: rgba(255, 255, 255, 0.72); }

    .fup .btn:focus-visible,
    .fup button:focus-visible,
    .fup summary:focus-visible {
      outline: 2px solid var(--brass-bright);
      outline-offset: 3px;
    }

    /* ── Media slots ─────────────────────────────────────────────────────────
       Every image on the page sits in a <figure class="fup-media"> with its
       aspect ratio in --ar. Until the real file exists the figure holds a
       .fup-ph placeholder; to swap, replace the .fup-ph div with
         <img src="<?php echo TLA_BASE; ?>/assets/follow-up-pro/<file>" alt="…" loading="lazy" />
       and keep the figure (it keeps the crop and radius). Placeholder IDs
       (FUP-01…) match the image shopping list. */
    .fup-media {
      margin: 0;
      aspect-ratio: var(--ar, 16 / 9);
      border-radius: var(--radius-2xl);
      overflow: hidden;
      position: relative;
    }

    .fup-media > img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .fup-media--contain > img { object-fit: contain; }

    .fup-ph {
      position: absolute;
      inset: 0;
      display: grid;
      place-content: center;
      justify-items: center;
      gap: 6px;
      padding: 20px;
      text-align: center;
      border: 1.5px dashed rgba(201, 150, 28, 0.6);
      border-radius: inherit;
      background:
        repeating-linear-gradient(135deg, rgba(201, 150, 28, 0.07) 0 12px, transparent 12px 24px),
        rgba(2, 28, 54, 0.04);
      color: inherit;
      font-size: 0.875rem;
      line-height: 1.4;
    }

    .fup-ph__id {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 0.8125rem;
      color: var(--brass);
      letter-spacing: 0.04em;
    }

    .fup-ph__what {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1rem;
      max-width: 30ch;
    }

    .fup-ph__spec { opacity: 0.65; font-size: 0.8125rem; }

    .fup-dark .fup-ph,
    .fup-out--notes .fup-ph { background: repeating-linear-gradient(135deg, rgba(234, 194, 90, 0.08) 0 12px, transparent 12px 24px), rgba(255, 255, 255, 0.03); }

    /* ── 1. Hero ─────────────────────────────────────────────────────────── */
    .fup-hero {
      background: var(--fup-dark);
      color: #fff;
      padding-block: clamp(48px, 7vw, 112px) clamp(64px, 8vw, 128px);
      position: relative;
      isolation: isolate;
    }

    /* faint ruled-paper texture — a nod to the legal pad this replaces */
    .fup-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      z-index: -1;
      background: repeating-linear-gradient(180deg, transparent 0 39px, rgba(234, 194, 90, 0.05) 39px 40px);
      mask-image: linear-gradient(90deg, transparent 0%, #000 55%, #000 100%);
      -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 55%, #000 100%);
    }

    .fup-hero__grid {
      display: grid;
      gap: clamp(48px, 6vw, 72px);
      align-items: center;
    }

    @media (min-width: 1024px) {
      .fup-hero__grid { grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr); }
    }

    .fup-hero__kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 0.9375rem;
      color: var(--brass-bright);
      margin-bottom: 22px;
    }

    .fup-hero__kicker::before {
      content: "";
      width: 28px;
      height: 2px;
      background: var(--fup-gold);
      border-radius: 2px;
    }

    .fup-hero__title {
      font-size: clamp(2.25rem, 4.6vw, 3.75rem);
      font-weight: 800;
      line-height: 1.04;
      letter-spacing: -0.035em;
      max-width: 15ch;
    }

    .fup-hero__sub {
      margin-top: 24px;
      font-size: clamp(1.0625rem, 1.35vw, 1.25rem);
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.74);
      max-width: 52ch;
    }

    .fup-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 36px;
    }

    .fup-micro {
      margin-top: 18px;
      font-size: 0.875rem;
      color: rgba(255, 255, 255, 0.55);
    }

    /* ── Hero demo ───────────────────────────────────────────────────────── */
    .fup-demo {
      position: relative;
      display: grid;
      gap: 0;
      max-width: 620px;
      width: 100%;
      margin-inline: auto;
      font-size: 0.875rem;
    }

    .fup-demo__transcript {
      position: relative;
      z-index: 1;
      width: 82%;
      background: #0b1a2e;
      border: 1px solid rgba(255, 255, 255, 0.10);
      border-radius: var(--radius-2xl);
      padding: 18px 20px 20px;
      box-shadow: 0 24px 50px rgba(0, 0, 0, 0.35);
      transition: opacity 600ms ease, transform 600ms cubic-bezier(0.22, 1, 0.36, 1);
    }

    .fup-demo__file {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding-bottom: 12px;
      margin-bottom: 14px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
    }

    .fup-demo__file span:last-child {
      color: rgba(255, 255, 255, 0.45);
      font-weight: 500;
      font-variant-numeric: tabular-nums;
    }

    .fup-demo__wave {
      display: flex;
      align-items: center;
      gap: 3px;
      height: 22px;
      margin-bottom: 14px;
    }

    .fup-demo__wave i {
      flex: 1;
      max-width: 4px;
      border-radius: 2px;
      background: rgba(234, 194, 90, 0.55);
    }

    .fup-tline {
      display: grid;
      grid-template-columns: 62px 1fr;
      gap: 10px;
      line-height: 1.5;
      color: rgba(255, 255, 255, 0.78);
      padding-block: 4px;
    }

    .fup-tline b {
      font-weight: 600;
      color: rgba(255, 255, 255, 0.45);
      font-size: 0.8125rem;
      padding-top: 1px;
    }

    .fup-tline mark {
      background: rgba(234, 194, 90, 0.18);
      color: #fff;
      border-radius: 3px;
      padding: 0 3px;
      transition: background 400ms ease;
    }

    /* the output panel overlaps the transcript from the lower right */
    .fup-demo__out {
      position: relative;
      z-index: 2;
      justify-self: end;
      width: 90%;
      margin-top: -18px;
      background: #fff;
      color: var(--fup-ink);
      border-radius: var(--radius-2xl);
      box-shadow: 0 30px 70px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(255, 255, 255, 0.06);
      overflow: hidden;
      transition: opacity 600ms ease, transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
    }

    .fup-tabs {
      display: flex;
      gap: 2px;
      padding: 8px 8px 0;
      background: var(--surface-container-low);
      border-bottom: 1px solid var(--fup-line);
      overflow-x: auto;
      scrollbar-width: none;
    }

    .fup-tabs::-webkit-scrollbar { display: none; }

    .fup-tab {
      appearance: none;
      border: 0;
      background: transparent;
      font: 600 0.8125rem/1 var(--font-display);
      color: var(--fup-muted);
      padding: 10px 12px 11px;
      border-radius: 8px 8px 0 0;
      cursor: pointer;
      white-space: nowrap;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: background 200ms ease, color 200ms ease;
    }

    .fup-tab:hover { color: var(--primary); }

    .fup-tab[aria-selected="true"] {
      background: #fff;
      color: var(--primary);
      box-shadow: 0 1px 0 #fff;
    }

    /* ready-dot: grey while drafting, brass once that output exists */
    .fup-tab::before {
      content: "";
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--outline-variant);
      transition: background 300ms ease, transform 300ms ease;
    }

    .fup-tab.is-ready::before {
      background: var(--brass);
    }

    .fup-panel {
      padding: 18px 20px 20px;
      min-height: 300px;
    }

    .fup-panel[hidden] { display: none; }

    .fup-panel__title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.9375rem;
      color: var(--primary);
      margin-bottom: 10px;
    }

    .fup-notes {
      display: grid;
      margin: 0;
    }

    .fup-notes > div {
      display: grid;
      grid-template-columns: 118px 1fr;
      gap: 12px;
      padding-block: 7px;
      border-top: 1px solid var(--fup-line);
      transition: opacity 400ms ease, transform 400ms ease;
    }

    .fup-notes dt {
      font-weight: 600;
      color: var(--fup-muted);
      font-size: 0.8125rem;
    }

    .fup-notes dd {
      margin: 0;
      line-height: 1.45;
    }

    .fup-notes .is-flag dd {
      color: #7a4b00;
    }

    .fup-notes .is-flag dt::after {
      content: "";
      display: inline-block;
      width: 6px;
      height: 6px;
      margin-left: 6px;
      border-radius: 50%;
      background: var(--brass);
      vertical-align: middle;
    }

    .fup-sms {
      display: grid;
      gap: 10px;
      padding-top: 6px;
    }

    .fup-sms__to {
      font-size: 0.8125rem;
      color: var(--fup-muted);
      text-align: center;
    }

    .fup-bubble {
      justify-self: end;
      max-width: 86%;
      background: var(--primary);
      color: #fff;
      padding: 11px 14px;
      border-radius: 18px 18px 4px 18px;
      line-height: 1.5;
    }

    .fup-mail__head {
      display: grid;
      gap: 4px;
      padding-bottom: 10px;
      margin-bottom: 12px;
      border-bottom: 1px solid var(--fup-line);
      font-size: 0.8125rem;
      color: var(--fup-muted);
    }

    .fup-mail__head strong { color: var(--fup-ink); font-weight: 600; }

    .fup-mail p + p { margin-top: 9px; }
    .fup-mail p { line-height: 1.55; }

    .fup-demo__note {
      margin-top: 14px;
      font-size: 0.8125rem;
      color: var(--fup-muted);
      display: flex;
      gap: 8px;
      align-items: flex-start;
    }

    .fup-demo__note svg { flex: none; margin-top: 2px; color: var(--success); }

    /* Demo choreography. JS adds .is-armed to hide, then .is-playing steps.
       Without JS (or with reduced motion) nothing is armed: final state shows. */
    .fup-demo.is-armed .fup-tline { opacity: 0; transform: translateY(6px); }
    .fup-demo.is-armed .fup-tline.is-in { opacity: 1; transform: none; transition: opacity 400ms ease, transform 400ms ease; }
    .fup-demo.is-armed .fup-tline mark { background: transparent; color: inherit; }
    .fup-demo.is-armed.is-marked .fup-tline mark { background: rgba(234, 194, 90, 0.18); color: #fff; }
    .fup-demo.is-armed .fup-demo__out { opacity: 0; transform: translateY(24px) scale(0.98); }
    .fup-demo.is-armed.is-out .fup-demo__out { opacity: 1; transform: none; }
    .fup-demo.is-armed.is-out .fup-demo__transcript { opacity: 0.55; transform: translateX(-6px) scale(0.985); }
    .fup-demo.is-armed .fup-notes > div { opacity: 0; transform: translateY(4px); }
    .fup-demo.is-armed .fup-notes > div.is-in { opacity: 1; transform: none; }
    .fup-demo.is-armed .fup-demo__wave i { animation: fup-wave 1.1s ease-in-out infinite alternate; }
    .fup-demo.is-armed.is-out .fup-demo__wave i { animation: none; }

    @keyframes fup-wave {
      from { transform: scaleY(0.35); }
      to { transform: scaleY(1); }
    }

    @media (max-width: 560px) {
      .fup-demo__transcript { width: 100%; }
      .fup-demo__out { width: 100%; margin-top: -12px; }
      .fup-notes > div { grid-template-columns: 1fr; gap: 2px; }
      .fup-panel { min-height: 0; }
    }

    /* ── 2. Problem: a busy day ──────────────────────────────────────────── */
    .fup-day__grid {
      display: grid;
      gap: 48px;
    }

    @media (min-width: 960px) {
      .fup-day__grid { grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr); gap: 80px; }
      .fup-day__intro { position: sticky; top: calc(var(--header-h, 72px) + 40px); align-self: start; }
    }

    .fup-day__intro .fup-lead { margin-top: 20px; }
    .fup-day__intro .fup-media { margin-top: 36px; max-width: 460px; }

    /* FUP-01 photo: desktop only (it sits beside the timeline there) */
    @media (max-width: 959px) {
      .fup-day__intro .fup-media { display: none; }
    }

    .fup-day__list {
      list-style: none;
      margin: 0;
      padding: 0;
      border-left: 2px solid var(--fup-line);
      align-self: start; /* don't stretch the rail to the photo's height */
    }

    .fup-day__item {
      position: relative;
      display: grid;
      grid-template-columns: 84px 1fr;
      gap: 20px;
      padding: 0 0 36px 28px;
    }

    .fup-day__item:last-child { padding-bottom: 0; }

    .fup-day__item::before {
      content: "";
      position: absolute;
      left: -7px;
      top: 4px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--background);
      border: 2px solid var(--outline);
    }

    .fup-day__item--good::before {
      background: var(--brass);
      border-color: var(--brass);
    }

    .fup-day__time {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.0625rem;
      color: var(--primary);
      font-variant-numeric: tabular-nums;
    }

    .fup-day__item h3 {
      font-size: 1.1875rem;
      font-weight: 700;
      letter-spacing: -0.01em;
      line-height: 1.3;
      color: var(--primary);
    }

    .fup-day__item p {
      margin-top: 6px;
      line-height: 1.6;
      color: var(--fup-muted);
    }

    .fup-day__item--good h3 { color: var(--fup-muted); font-weight: 600; }

    @media (max-width: 560px) {
      .fup-day__item { grid-template-columns: 1fr; gap: 4px; }
    }

    /* ── 3. Cost + meet the coach ─────────────────────────────────────────── */
    .fup-cost__statement {
      font-family: var(--font-display);
      font-size: clamp(1.875rem, 4vw, 3.25rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.03em;
      max-width: 20ch;
    }

    .fup-cost__cols {
      display: grid;
      gap: 40px;
      margin-top: clamp(40px, 5vw, 64px);
      padding-top: clamp(32px, 4vw, 48px);
      border-top: 1px solid rgba(255, 255, 255, 0.14);
    }

    @media (min-width: 880px) {
      .fup-cost__cols { grid-template-columns: 1fr 1fr; gap: 72px; }
    }

    .fup-cost__cols h3 {
      font-size: 1.375rem;
      font-weight: 700;
      letter-spacing: -0.015em;
      margin-bottom: 14px;
    }

    .fup-cost__cols p {
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.74);
    }

    .fup-cost__cols p + p { margin-top: 14px; }

    .fup-cost__shot {
      margin-top: clamp(40px, 5vw, 64px);
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.45);
    }

    .fup-cost__fix {
      color: var(--brass-bright) !important;
      font-weight: 600;
    }

    /* ── 4. How it works ─────────────────────────────────────────────────── */
    .fup-how__head { max-width: 760px; }
    .fup-how__head .fup-lead { margin-top: 18px; }

    .fup-steps {
      list-style: none;
      margin: clamp(48px, 5vw, 72px) 0 0;
      padding: 0;
      display: grid;
      gap: 40px;
      position: relative;
      counter-reset: fup-step;
    }

    @media (min-width: 900px) {
      .fup-steps { grid-template-columns: repeat(4, 1fr); gap: 32px; }

      /* connector line that draws across the four step numbers */
      .fup-steps::before,
      .fup-steps::after {
        content: "";
        position: absolute;
        top: 23px;
        left: 24px;
        right: 24px;
        height: 2px;
        background: var(--fup-line);
      }

      .fup-steps::after {
        background: var(--fup-gold);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 200ms;
      }

      .fup-steps.is-revealed::after { transform: scaleX(1); }
    }

    .fup-step { position: relative; }

    .fup-step__num {
      position: relative;
      z-index: 1;
      display: grid;
      place-items: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--primary);
      color: var(--brass-bright);
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.125rem;
      box-shadow: 0 0 0 6px var(--background);
    }

    .fup-step .fup-media {
      margin-top: 22px;
      border-radius: var(--radius-xl);
    }

    .fup-step h3 {
      margin-top: 22px;
      font-size: 1.25rem;
      font-weight: 700;
      letter-spacing: -0.015em;
      color: var(--primary);
    }

    .fup-step p {
      margin-top: 10px;
      line-height: 1.6;
      color: var(--fup-muted);
    }

    .fup-how__foot {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 20px 28px;
      margin-top: clamp(48px, 5vw, 64px);
      padding-top: 32px;
      border-top: 1px solid var(--fup-line);
    }

    .fup-how__foot p {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 1.125rem;
      color: var(--primary);
    }

    /* ── 5. What you get ─────────────────────────────────────────────────── */
    .fup-get { background: #fff; }

    .fup-get__head { max-width: 760px; margin-bottom: clamp(40px, 5vw, 64px); }
    .fup-get__head .fup-lead { margin-top: 18px; }

    .fup-get__grid {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 960px) {
      .fup-get__grid {
        grid-template-columns: 1.15fr 1fr;
        grid-template-rows: auto auto auto;
      }
      .fup-out--notes { grid-row: 1 / span 3; }
    }

    .fup-out {
      border: 1px solid var(--fup-line);
      border-radius: var(--radius-2xl);
      padding: clamp(22px, 2.6vw, 32px);
      background: var(--background);
      display: grid;
      gap: 16px;
      align-content: start;
    }

    .fup-out h3 {
      font-size: 1.25rem;
      font-weight: 700;
      letter-spacing: -0.015em;
      color: var(--primary);
    }

    .fup-out > p {
      line-height: 1.6;
      color: var(--fup-muted);
    }

    .fup-out--notes {
      background: var(--primary);
      border-color: transparent;
      color: #fff;
    }

    .fup-out--notes h3 { color: #fff; font-size: 1.5rem; }
    .fup-out--notes > p { color: rgba(255, 255, 255, 0.72); }

    .fup-fields {
      list-style: none;
      margin: 8px 0 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .fup-fields li {
      font-size: 0.875rem;
      font-weight: 500;
      padding: 7px 12px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      color: rgba(255, 255, 255, 0.86);
    }

    .fup-fields li.is-key {
      border-color: transparent;
      background: var(--fup-gold);
      color: var(--primary);
      font-weight: 700;
    }

    .fup-out__fine {
      font-size: 0.875rem;
      color: rgba(255, 255, 255, 0.55) !important;
      margin-top: auto;
    }

    /* ── 6. Before / after ───────────────────────────────────────────────── */
    .fup-ba__head { max-width: 760px; margin-bottom: clamp(36px, 4vw, 56px); }

    .fup-ba {
      display: grid;
      border-top: 2px solid var(--primary);
    }

    .fup-ba__row {
      display: grid;
      gap: 6px;
      padding-block: 20px;
      border-bottom: 1px solid var(--fup-line);
    }

    .fup-ba__row--head { display: none; }

    .fup-ba__before {
      color: var(--fup-muted);
      line-height: 1.5;
    }

    .fup-ba__after {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.125rem;
      line-height: 1.4;
      color: var(--primary);
      letter-spacing: -0.01em;
    }

    .fup-ba__tag {
      font-weight: 600;
      font-size: 0.8125rem;
      color: var(--fup-muted);
      margin-right: 8px;
    }

    .fup-ba__after .fup-ba__tag { color: var(--brass); font-family: var(--font-body); }

    @media (min-width: 760px) {
      .fup-ba__row {
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        align-items: baseline;
        padding-block: 22px;
      }
      .fup-ba__row--head {
        display: grid;
        padding-block: 14px;
        font-family: var(--font-display);
        font-weight: 700;
        font-size: 0.9375rem;
      }
      .fup-ba__row--head span:first-child { color: var(--fup-muted); }
      .fup-ba__row--head span:last-child { color: var(--brass); }
      .fup-ba__tag { display: none; }
    }

    /* ── 7. Privacy ──────────────────────────────────────────────────────── */
    .fup-privacy { background: var(--surface-container-low); }

    .fup-privacy__grid {
      display: grid;
      gap: 48px;
      align-items: start;
    }

    @media (min-width: 960px) {
      .fup-privacy__grid { grid-template-columns: 1.1fr 0.9fr; gap: 80px; }
    }

    .fup-privacy__grid .fup-lead { margin-top: 20px; }

    .fup-rules {
      list-style: none;
      margin: 32px 0 0;
      padding: 0;
      display: grid;
      gap: 16px;
    }

    .fup-rules li {
      display: grid;
      grid-template-columns: 24px 1fr;
      gap: 12px;
      line-height: 1.55;
    }

    .fup-rules svg { color: var(--brass); margin-top: 2px; }

    .fup-privacy__side { display: grid; gap: 24px; }

    .fup-consent {
      background: #fff;
      border-radius: var(--radius-2xl);
      padding: clamp(24px, 3vw, 36px);
      box-shadow: var(--shadow-lg);
      border: 1px solid var(--fup-line);
    }

    .fup-consent__rec {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.9375rem;
      color: var(--primary);
    }

    .fup-consent__rec::before {
      content: "";
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #d3382f;
      box-shadow: 0 0 0 4px rgba(211, 56, 47, 0.15);
    }

    .fup-consent blockquote {
      margin: 18px 0 0;
      font-family: var(--font-display);
      font-size: clamp(1.125rem, 1.6vw, 1.3125rem);
      font-weight: 600;
      line-height: 1.5;
      letter-spacing: -0.01em;
      color: var(--primary);
    }

    .fup-consent__fine {
      margin-top: 18px !important;
      font-size: 0.875rem;
      color: var(--fup-muted);
      line-height: 1.55;
    }

    /* ── 8. Teams + where it fits ────────────────────────────────────────── */
    .fup-pair {
      display: grid;
      gap: 56px;
    }

    @media (min-width: 900px) {
      .fup-pair { grid-template-columns: 1fr 1fr; gap: 0; }
      .fup-pair > div + div { padding-left: 64px; border-left: 1px solid var(--fup-line); }
      .fup-pair > div:first-child { padding-right: 64px; }
    }

    .fup-pair h2 {
      font-size: clamp(1.625rem, 2.6vw, 2.125rem);
      font-weight: 700;
      line-height: 1.15;
      letter-spacing: -0.02em;
      color: var(--primary);
    }

    .fup-pair .fup-media { margin-bottom: 32px; }

    .fup-pair p {
      margin-top: 16px;
      line-height: 1.65;
      color: var(--fup-muted);
      max-width: 58ch;
    }

    .fup-pair p strong { color: var(--primary); font-weight: 600; }

    /* ── 10. Final CTA ───────────────────────────────────────────────────── */
    .fup-final { text-align: center; }

    .fup-final .fup-h2 {
      font-size: clamp(2.125rem, 4.4vw, 3.5rem);
      max-width: 18ch;
      margin-inline: auto;
    }

    .fup-final .fup-lead { margin: 22px auto 0; }
    .fup-final .fup-actions { justify-content: center; }
    .fup-final .fup-micro { margin-top: 14px; }
    .fup-final .fup-media { max-width: 960px; margin: clamp(48px, 6vw, 72px) auto 0; }

    /* ── 11. FAQ ─────────────────────────────────────────────────────────── */
    .fup-faq__grid {
      display: grid;
      gap: 40px;
    }

    @media (min-width: 960px) {
      .fup-faq__grid { grid-template-columns: 0.7fr 1.3fr; gap: 80px; }
    }

    .fup-faq__list { border-top: 1px solid var(--fup-line); }

    .fup-faq__item { border-bottom: 1px solid var(--fup-line); }

    .fup-faq__item summary {
      list-style: none;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      padding-block: 20px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.0625rem;
      color: var(--primary);
    }

    .fup-faq__item summary::-webkit-details-marker { display: none; }

    .fup-faq__item summary::after {
      content: "";
      flex: none;
      width: 10px;
      height: 10px;
      border-right: 2px solid var(--brass);
      border-bottom: 2px solid var(--brass);
      transform: rotate(45deg) translateY(-3px);
      transition: transform 200ms ease;
    }

    .fup-faq__item[open] summary::after { transform: rotate(-135deg) translateY(-3px); }

    .fup-faq__item p {
      padding: 0 32px 22px 0;
      line-height: 1.65;
      color: var(--fup-muted);
      max-width: 64ch;
    }

    .fup-faq__cta { margin-top: 40px; }

    /* ── Reduced motion ──────────────────────────────────────────────────── */
    @media (prefers-reduced-motion: reduce) {
      .fup-steps::after { transform: scaleX(1); transition: none; }
      .fup-demo__wave i { animation: none !important; }
      .fup-faq__item summary::after,
      .fup-tab,
      .fup-tab::before { transition: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main fup">

    <!-- ───────────────────────── 1. HERO ───────────────────────── -->
    <section class="fup-hero" aria-labelledby="fup-hero-heading">
      <div class="container fup-hero__grid">
        <div class="fup-hero__copy">
          <p class="fup-hero__kicker">Follow-Up Pro, an Atlas AI coach</p>
          <h1 id="fup-hero-heading" class="fup-hero__title">Turn Your First Borrower Call Into Notes, a Strategy, and <span class="fup-nowrap">Follow-Up</span> in Minutes</h1>
          <p class="fup-hero__sub">Paste the transcript from your first conversation with a borrower. Follow-Up Pro builds operations-ready notes, a suggested loan strategy, a text and an email for your client, and an update for the referring Realtor. You review it, send it, and walk into your next appointment with nothing hanging over you.</p>
          <div class="fup-actions">
            <a class="btn btn--gold btn--lg" href="/join/">Join The Loan Atlas</a>
            <a class="btn btn--ghost-on-dark btn--lg" href="#how-it-works">See How It Works</a>
          </div>
          <p class="fup-micro">Included with Loan Atlas membership. Works on the web and in the app.</p>
        </div>

        <!-- Product demo (illustrative, fictional borrower). Swap for a real
             screenshot/video when one exists — keep the same column. -->
        <div class="fup-demo" id="fup-demo" aria-label="Example: a call transcript turned into notes and follow-up messages">
          <div class="fup-demo__transcript">
            <div class="fup-demo__file"><span>First call with Dana R.</span><span>31:04</span></div>
            <div class="fup-demo__wave" aria-hidden="true">
              <i style="height:40%"></i><i style="height:75%"></i><i style="height:55%"></i><i style="height:90%"></i><i style="height:35%"></i><i style="height:65%"></i><i style="height:100%"></i><i style="height:45%"></i><i style="height:70%"></i><i style="height:30%"></i><i style="height:85%"></i><i style="height:50%"></i><i style="height:95%"></i><i style="height:40%"></i><i style="height:60%"></i><i style="height:80%"></i><i style="height:35%"></i><i style="height:70%"></i><i style="height:55%"></i><i style="height:90%"></i><i style="height:45%"></i><i style="height:65%"></i><i style="height:30%"></i><i style="height:75%"></i>
            </div>
            <p class="fup-tline"><b>Dana</b><span>I've run my landscaping business for four years, so <mark>my income's all on Schedule C</mark>.</span></p>
            <p class="fup-tline"><b>You</b><span>Got it. When do you want to be in the new place?</span></p>
            <p class="fup-tline"><b>Dana</b><span><mark>Before school starts in August.</mark> Honestly, I'm nervous about <mark>the deposit I moved from the business account</mark>.</span></p>
          </div>

          <div class="fup-demo__out">
            <div class="fup-tabs" role="tablist" aria-label="Follow-Up Pro output">
              <button class="fup-tab is-ready" role="tab" id="fup-tab-notes" aria-selected="true" aria-controls="fup-panel-notes" data-tab="notes">Notes</button>
              <button class="fup-tab is-ready" role="tab" id="fup-tab-text" aria-selected="false" aria-controls="fup-panel-text" tabindex="-1" data-tab="text">Client text</button>
              <button class="fup-tab is-ready" role="tab" id="fup-tab-email" aria-selected="false" aria-controls="fup-panel-email" tabindex="-1" data-tab="email">Client email</button>
              <button class="fup-tab is-ready" role="tab" id="fup-tab-realtor" aria-selected="false" aria-controls="fup-panel-realtor" tabindex="-1" data-tab="realtor">Realtor update</button>
            </div>

            <div class="fup-panel" role="tabpanel" id="fup-panel-notes" aria-labelledby="fup-tab-notes">
              <p class="fup-panel__title">Operations notes</p>
              <dl class="fup-notes">
                <div><dt>Transaction</dt><dd>Purchase, primary residence</dd></div>
                <div><dt>Timeline</dt><dd>Moved in before school starts in August</dd></div>
                <div><dt>Income</dt><dd>Self-employed 4 yrs, landscaping (Schedule C)</dd></div>
                <div><dt>Worried about</dt><dd>Deposit moved from business account</dd></div>
                <div class="is-flag"><dt>Red flag</dt><dd>Large deposit needs sourcing before processing</dd></div>
                <div><dt>Strategy</dt><dd>Conventional, document the transfer now, bank-statement loan as backup</dd></div>
              </dl>
            </div>

            <div class="fup-panel" role="tabpanel" id="fup-panel-text" aria-labelledby="fup-tab-text" hidden>
              <p class="fup-panel__title">Text to Dana</p>
              <div class="fup-sms">
                <p class="fup-sms__to">To: Dana R.</p>
                <p class="fup-bubble">Great talking today, Dana. The plan: we get your deposit paperwork squared away this week so you're fully approved well before August. I just emailed you the details.</p>
              </div>
            </div>

            <div class="fup-panel fup-mail" role="tabpanel" id="fup-panel-email" aria-labelledby="fup-tab-email" hidden>
              <div class="fup-mail__head">
                <span>To: <strong>Dana R.</strong></span>
                <span>Subject: <strong>Your plan for an August move</strong></span>
              </div>
              <p>Hi Dana, thanks for walking me through everything today.</p>
              <p><strong>What we'll focus on:</strong> documenting the deposit you moved from your business account, so it's settled before underwriting ever asks.</p>
              <p><strong>Next step:</strong> send your last two months of business bank statements by Friday.</p>
            </div>

            <div class="fup-panel fup-mail" role="tabpanel" id="fup-panel-realtor" aria-labelledby="fup-tab-realtor" hidden>
              <div class="fup-mail__head">
                <span>To: <strong>Jen, your referring agent</strong></span>
              </div>
              <p>Hi Jen, I connected with Dana today. Great referral. Dana is a serious, well-capitalized buyer, and we're on track for a full approval with room to spare before the August move.</p>
              <p>I'll update you the moment it's issued.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 2. PROBLEM ───────────────────────── -->
    <section class="fup-band fup-day" aria-labelledby="fup-day-heading">
      <div class="container fup-day__grid">
        <div class="fup-day__intro">
          <h2 id="fup-day-heading" class="fup-h2">The Call Went Great. Then the Next One Started.</h2>
          <p class="fup-lead">The borrower told you about the timeline, the side business, the deposit they're nervous about. Then you hung up, jumped into the next appointment, and by the end of the day the details had blurred together. Most originators know exactly where the first call falls apart.</p>
          <figure class="fup-media" style="--ar: 4 / 5">
            <img src="<?php echo TLA_BASE; ?>/assets/fup-busy-day.webp" alt="A loan officer in the back of a car, checking his phone between appointments" width="1200" height="1500" loading="lazy" />
          </figure>
        </div>

        <ol class="fup-day__list">
          <li class="fup-day__item fup-day__item--good">
            <span class="fup-day__time">9:00</span>
            <div><h3>A strong first conversation. You learn everything you need.</h3></div>
          </li>
          <li class="fup-day__item">
            <span class="fup-day__time">9:35</span>
            <div>
              <h3>The notes never get written.</h3>
              <p>You were driving or back to back, and nothing made it into the file for processing.</p>
            </div>
          </li>
          <li class="fup-day__item">
            <span class="fup-day__time">1:15</span>
            <div>
              <h3>One crucial detail gets lost.</h3>
              <p>It never reaches the file, and it surfaces later in operations as a problem.</p>
            </div>
          </li>
          <li class="fup-day__item">
            <span class="fup-day__time">4:50</span>
            <div>
              <h3>The client follow-up is vague.</h3>
              <p>There's no clear recap of what you talked about, what you need from them, and by when.</p>
            </div>
          </li>
          <li class="fup-day__item">
            <span class="fup-day__time">6:30</span>
            <div>
              <h3>The Realtor never hears back.</h3>
              <p>You connected with their client but never told them, so they're left wondering what the plan is and when they'll hear more.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- ───────────────────────── 3. COST + MEET ───────────────────────── -->
    <section class="fup-band fup-dark fup-cost" aria-labelledby="fup-cost-heading">
      <div class="container">
        <h2 id="fup-cost-heading" class="fup-cost__statement">Your Service Shouldn't Depend on How Busy You Are</h2>
        <div class="fup-cost__cols">
          <div>
            <h3>The gap between your light weeks and your full ones</h3>
            <p>Most originators deliver a great experience when the pipeline is light and a noticeably weaker one when it's full. Your client gets less than your own standard, and every handoff carries friction. You get pulled back into files because something from the first call never got passed along. And the friend a past client referred to you gets a worse experience than the client who sent them.</p>
            <p class="fup-cost__fix">The fix is a process that runs the same way on your busiest day as it does on your slowest one.</p>
          </div>
          <div>
            <h3>Meet Follow-Up Pro</h3>
            <p>Follow-Up Pro is an AI coach inside The Loan Atlas built for one job: the minutes right after your first conversation with a borrower. Share a transcript, a voice memo recap, or rough notes. It organizes the key details, surfaces potential challenges, and drafts follow-up for your client and the referring agent.</p>
            <p>It's built for real mortgage scenarios, from self-employed borrowers to investment properties, so the output reads like it came from someone who understands a loan file.</p>
          </div>
        </div>
        <figure class="fup-media fup-cost__shot" style="--ar: 16 / 9">
          <div class="fup-ph" role="img" aria-label="Image placeholder">
            <span class="fup-ph__id">FUP-02</span>
            <span class="fup-ph__what">Follow-Up Pro in the member app on desktop, a finished run</span>
            <span class="fup-ph__spec">Screenshot, 16:9, 2400 × 1350, fup-app-desktop.webp</span>
          </div>
        </figure>
      </div>
    </section>

    <!-- ───────────────────────── 4. HOW IT WORKS ───────────────────────── -->
    <section class="fup-band fup-how" id="how-it-works" aria-labelledby="fup-how-heading">
      <div class="container">
        <div class="fup-how__head">
          <h2 id="fup-how-heading" class="fup-h2">From Hang-Up to Handoff in a Few Minutes</h2>
        </div>

        <ol class="fup-steps" data-reveal="fade">
          <li class="fup-step">
            <span class="fup-step__num" aria-hidden="true">1</span>
            <figure class="fup-media" style="--ar: 4 / 3">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-03</span>
                <span class="fup-ph__what">Recording a borrower call</span>
                <span class="fup-ph__spec">Photo, 4:3, 1200 × 900, fup-step-record.webp</span>
              </div>
            </figure>
            <h3>Record the call</h3>
            <p>Ask permission, then record your first conversation with the borrower. A recording device like Plaud, iPhone call recording, or a Zoom transcript all work. A voice memo recap or rough notes work too, but a full transcript catches the details memory misses.</p>
          </li>
          <li class="fup-step">
            <span class="fup-step__num" aria-hidden="true">2</span>
            <figure class="fup-media" style="--ar: 4 / 3">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-04</span>
                <span class="fup-ph__what">Transcript pasted into Follow-Up Pro</span>
                <span class="fup-ph__spec">Screenshot, 4:3, 1200 × 900, fup-step-paste.webp</span>
              </div>
            </figure>
            <h3>Paste it in</h3>
            <p>Paste the transcript into Follow-Up Pro or upload the file and press enter. There's no prompt to write. It already knows what to do.</p>
          </li>
          <li class="fup-step">
            <span class="fup-step__num" aria-hidden="true">3</span>
            <figure class="fup-media" style="--ar: 4 / 3">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-05</span>
                <span class="fup-ph__what">Asking for a revision of the summary</span>
                <span class="fup-ph__spec">Screenshot, 4:3, 1200 × 900, fup-step-review.webp</span>
              </div>
            </figure>
            <h3>Review the summary</h3>
            <p>Read the notes, adjust the strategy if you'd structure the loan differently, and ask it to rewrite anything that needs tightening. You know the deal better than any AI, and this is where that shows.</p>
          </li>
          <li class="fup-step">
            <span class="fup-step__num" aria-hidden="true">4</span>
            <figure class="fup-media" style="--ar: 4 / 3">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-06</span>
                <span class="fup-ph__what">Notes going into the CRM, messages going out</span>
                <span class="fup-ph__spec">Photo or screenshot, 4:3, 1200 × 900, fup-step-handoff.webp</span>
              </div>
            </figure>
            <h3>Send and hand off</h3>
            <p>Follow-Up Pro offers to draft the client text, the client email, and the Realtor update. Copy the notes into your CRM or submission sheet, send the messages, and hand the file to operations with everything already in it.</p>
          </li>
        </ol>

        <div class="fup-how__foot">
          <p>Short enough to fit between appointments.</p>
          <a class="btn btn--primary btn--lg" href="/join/">Join The Loan Atlas</a>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 5. WHAT YOU GET ───────────────────────── -->
    <section class="fup-band fup-get" aria-labelledby="fup-get-heading">
      <div class="container">
        <div class="fup-get__head">
          <h2 id="fup-get-heading" class="fup-h2">Four Pieces of Follow-Up From One Conversation</h2>
        </div>

        <div class="fup-get__grid">
          <article class="fup-out fup-out--notes">
            <h3>Operations-ready notes</h3>
            <p>A structured summary your team can work from, with a suggested loan strategy built in. Sections fill in only when the call covered them.</p>
            <figure class="fup-media" style="--ar: 4 / 3">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-07</span>
                <span class="fup-ph__what">The operations notes output, full view</span>
                <span class="fup-ph__spec">Screenshot, 4:3, 1600 × 1200, fup-out-notes.webp</span>
              </div>
            </figure>
            <ul class="fup-fields" aria-label="Sections the notes can include">
              <li>Transaction type</li>
              <li>Current stage</li>
              <li>Borrower goals</li>
              <li>Income</li>
              <li>Assets</li>
              <li>Credit</li>
              <li>What they're worried about</li>
              <li class="is-key">Potential red flags</li>
              <li>Timeline</li>
              <li>Information still needed</li>
              <li>Commitments you made</li>
              <li>Next steps</li>
              <li class="is-key">Suggested loan strategy</li>
            </ul>
            <p class="fup-out__fine">Copy it straight into your CRM or submission sheet.</p>
          </article>

          <article class="fup-out">
            <h3>A text for your client</h3>
            <p>The plan in a couple of lines, with a pointer to the email for detail. Built for the borrower who wants the big picture fast.</p>
            <figure class="fup-media" style="--ar: 16 / 9">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-08</span>
                <span class="fup-ph__what">The client text, on a phone</span>
                <span class="fup-ph__spec">Screenshot, 16:9, 1600 × 900, fup-out-text.webp</span>
              </div>
            </figure>
          </article>

          <article class="fup-out">
            <h3>An email for your client</h3>
            <p>The full strategy: what you'll focus on, why it matters, the outcome you're working toward, and the next step. It serves the detail-oriented reader in the household and leaves a searchable record of what was said.</p>
            <figure class="fup-media" style="--ar: 16 / 9">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-09</span>
                <span class="fup-ph__what">The client email draft</span>
                <span class="fup-ph__spec">Screenshot, 16:9, 1600 × 900, fup-out-email.webp</span>
              </div>
            </figure>
          </article>

          <article class="fup-out">
            <h3>An update for the referring Realtor</h3>
            <p>A message confirming you've connected with their client, sharing the plan, and setting expectations for the next update. The agent hears from you the same day instead of chasing you down.</p>
            <figure class="fup-media" style="--ar: 16 / 9">
              <div class="fup-ph" role="img" aria-label="Image placeholder">
                <span class="fup-ph__id">FUP-10</span>
                <span class="fup-ph__what">The Realtor update draft</span>
                <span class="fup-ph__spec">Screenshot, 16:9, 1600 × 900, fup-out-realtor.webp</span>
              </div>
            </figure>
          </article>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 6. BEFORE / AFTER ───────────────────────── -->
    <section class="fup-band fup-ba-wrap" aria-labelledby="fup-ba-heading">
      <div class="container">
        <div class="fup-ba__head">
          <h2 id="fup-ba-heading" class="fup-h2">What Changes After the First Call</h2>
        </div>
        <div class="fup-ba" role="table" aria-label="Before and with Follow-Up Pro">
          <div class="fup-ba__row fup-ba__row--head" role="row">
            <span role="columnheader">Before Follow-Up Pro</span>
            <span role="columnheader">With Follow-Up Pro</span>
          </div>
          <div class="fup-ba__row" role="row">
            <p class="fup-ba__before" role="cell"><span class="fup-ba__tag">Before</span>Notes written from memory hours later, or never</p>
            <p class="fup-ba__after" role="cell"><span class="fup-ba__tag">After</span>Notes built from the full conversation in minutes</p>
          </div>
          <div class="fup-ba__row" role="row">
            <p class="fup-ba__before" role="cell"><span class="fup-ba__tag">Before</span>The key detail surfaces in underwriting</p>
            <p class="fup-ba__after" role="cell"><span class="fup-ba__tag">After</span>The red flag is in the file before processing starts</p>
          </div>
          <div class="fup-ba__row" role="row">
            <p class="fup-ba__before" role="cell"><span class="fup-ba__tag">Before</span>A quick &ldquo;great talking with you&rdquo; text</p>
            <p class="fup-ba__after" role="cell"><span class="fup-ba__tag">After</span>A clear plan, next steps, and deadlines in writing</p>
          </div>
          <div class="fup-ba__row" role="row">
            <p class="fup-ba__before" role="cell"><span class="fup-ba__tag">Before</span>The Realtor wonders whether you called</p>
            <p class="fup-ba__after" role="cell"><span class="fup-ba__tag">After</span>The Realtor hears the plan the same day</p>
          </div>
          <div class="fup-ba__row" role="row">
            <p class="fup-ba__before" role="cell"><span class="fup-ba__tag">Before</span>Your follow-up depends on how busy you are</p>
            <p class="fup-ba__after" role="cell"><span class="fup-ba__tag">After</span>Every borrower gets the same standard</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 7. PRIVACY ───────────────────────── -->
    <section class="fup-band fup-privacy" aria-labelledby="fup-privacy-heading">
      <div class="container fup-privacy__grid">
        <div>
          <h2 id="fup-privacy-heading" class="fup-h2">Written to Protect Your Client's Information</h2>
          <p class="fup-lead">The messages Follow-Up Pro drafts for clients and agents leave out credit scores, income figures, and account balances. The Realtor update tells the agent what helps them do their job (the plan, the structure, the timing) and describes a buyer as &ldquo;serious and well capitalized&rdquo; instead of listing what's in the bank.</p>
          <ul class="fup-rules">
            <li>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3z"/></svg>
              <span>Use it to summarize conversations. Bank statements, tax returns, W-2s, and pay stubs don't belong in it.</span>
            </li>
            <li>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3z"/></svg>
              <span>Ask permission before you record, and follow your company's policy on call recording.</span>
            </li>
            <li>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3z"/></svg>
              <span>Review everything before it goes out. You're responsible for what you send.</span>
            </li>
          </ul>
        </div>

        <div class="fup-privacy__side">
          <figure class="fup-media" style="--ar: 3 / 2">
            <div class="fup-ph" role="img" aria-label="Image placeholder">
              <span class="fup-ph__id">FUP-11</span>
              <span class="fup-ph__what">Loan officer on a call with a borrower</span>
              <span class="fup-ph__spec">Photo, 3:2, 1500 × 1000, fup-on-call.webp</span>
            </div>
          </figure>
          <figure class="fup-consent">
            <figcaption class="fup-consent__rec">A simple way to ask for permission to record</figcaption>
            <blockquote>&ldquo;Hey [name], I want to make sure I'm a hundred percent present in this conversation and don't miss anything you say. Do I have your permission to record this call? I'll send you a summary afterward.&rdquo;</blockquote>
            <p class="fup-consent__fine">Then send the summary. Follow-Up Pro drafts it for you.</p>
          </figure>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 8. TEAMS + WHERE IT FITS ───────────────────────── -->
    <section class="fup-band" aria-label="For teams, and where Follow-Up Pro fits">
      <div class="container fup-pair">
        <div>
          <figure class="fup-media" style="--ar: 3 / 2">
            <div class="fup-ph" role="img" aria-label="Image placeholder">
              <span class="fup-ph__id">FUP-12</span>
              <span class="fup-ph__what">Loan officer and processor working a file together</span>
              <span class="fup-ph__spec">Photo, 3:2, 1500 × 1000, fup-team-handoff.webp</span>
            </div>
          </figure>
          <h2>One Standard for Every Handoff</h2>
          <p>When the whole team uses Follow-Up Pro, operations gets the same handoff on every file, no matter who took the call. A newer team member communicates in the same format as your most experienced one.</p>
          <p>Your processor can open the first conversation with the borrower's own concern (&ldquo;I understand the deposit paperwork was stressful for you&hellip;&rdquo;), so the client feels remembered from day one. It also pairs well with a virtual assistant: let AI do what it can, then decide what the VA handles before anything comes back to you.</p>
        </div>
        <div>
          <figure class="fup-media" style="--ar: 3 / 2">
            <div class="fup-ph" role="img" aria-label="Image placeholder">
              <span class="fup-ph__id">FUP-13</span>
              <span class="fup-ph__what">The Atlas AI coaches together in the member app</span>
              <span class="fup-ph__spec">Screenshot or graphic, 3:2, 1500 × 1000, fup-ai-coaches.webp</span>
            </div>
          </figure>
          <h2>Where the Perfect Loan Process&trade; Starts</h2>
          <p>You can't make a clean baton pass to your team without passing along everything you learned on the first call. Follow-Up Pro captures the output of your dreams and goals conversation, the first step in A System for Selling, and turns it into the handoff the Perfect Loan Process&trade; runs on.</p>
          <p>Each AI coach has its own lane. Follow-Up Pro handles notes, strategy, and follow-up after a borrower call. When that call surfaces an objection, like a borrower shopping a credit union, take the objection to the <strong>Sales &amp; Scripting Coach</strong>.</p>
        </div>
      </div>
    </section>

    <!-- ───────────────────────── 9. PROOF (held) ─────────────────────────
         Intentionally empty. Add a member result / testimonial here once
         attribution is cleared. Open questions before using any quote:
         - The "save you 30 minutes / files not blowing up" quote is attributed
           to Josh Mettle in the copy doc but to Scott DiGregorio on the live
           /ai-lab-follow-up-pro/ replay page. Confirm the speaker.
         - Scott DiGregorio's approved public title; origin-story sign-off.
    ──────────────────────────────────────────────────────────────────── -->

    <!-- ───────────────────────── 10. FINAL CTA ───────────────────────── -->
    <section class="fup-band fup-dark fup-final" aria-labelledby="fup-final-heading">
      <div class="container">
        <h2 id="fup-final-heading" class="fup-h2">Give Every Borrower Your Best Follow-Up</h2>
        <p class="fup-lead">Follow-Up Pro is included with your Loan Atlas membership, alongside the Sales &amp; Scripting Coach, Content Coach, and Health, Mindset &amp; Vitality Coach, the Perfect Loan Process&trade;, 200+ training modules, and live coaching every week.</p>
        <div class="fup-actions">
          <a class="btn btn--gold btn--lg" href="/join/">Join The Loan Atlas</a>
          <a class="btn btn--ghost-on-dark btn--lg" href="/consultation/">Book a Free Consultation</a>
        </div>
        <p class="fup-micro">Free consultation: 60 minutes, no cost, no obligation.</p>
        <figure class="fup-media fup-media--contain" style="--ar: 16 / 9">
          <div class="fup-ph" role="img" aria-label="Image placeholder">
            <span class="fup-ph__id">FUP-14</span>
            <span class="fup-ph__what">The Loan Atlas on laptop and phone, Follow-Up Pro open</span>
            <span class="fup-ph__spec">Device mockup, transparent background, 2000 × 1125, fup-devices.webp</span>
          </div>
        </figure>
      </div>
    </section>

    <!-- ───────────────────────── 11. FAQ ───────────────────────── -->
    <section class="fup-band fup-faq" aria-labelledby="fup-faq-heading">
      <div class="container fup-faq__grid">
        <div>
          <h2 id="fup-faq-heading" class="fup-h2">Frequently Asked Questions</h2>
          <div class="fup-faq__cta">
            <a class="btn btn--gold btn--lg" href="/join/">Join The Loan Atlas</a>
          </div>
        </div>
        <div class="fup-faq__list">
          <details class="fup-faq__item">
            <summary>Do I need to write a prompt?</summary>
            <p>No. Paste the transcript or upload the file and press enter. It already knows what to produce.</p>
          </details>
          <details class="fup-faq__item">
            <summary>What should I give it?</summary>
            <p>A full transcript gives the best results. A voice memo recap or rough notes also work, but a 30-minute call recapped from memory will miss details.</p>
          </details>
          <details class="fup-faq__item">
            <summary>Can I use it after a call with a Realtor or referral partner?</summary>
            <p>It's built for your first conversation with a borrower. Partner calls don't fit the structure it uses.</p>
          </details>
          <details class="fup-faq__item">
            <summary>What if the borrower raises an objection on the call?</summary>
            <p>Use Follow-Up Pro for the notes and follow-up, then take the objection to the Sales &amp; Scripting Coach.</p>
          </details>
          <details class="fup-faq__item">
            <summary>Will it share my client's financial details with the agent?</summary>
            <p>The client and Realtor messages are written to leave out credit scores, income figures, and account balances. Review every message before you send it.</p>
          </details>
          <details class="fup-faq__item">
            <summary>Can I upload bank statements or tax returns?</summary>
            <p>No. Follow-Up Pro summarizes conversations. Keep financial documents out of it.</p>
          </details>
          <details class="fup-faq__item">
            <summary>Can I change what it writes?</summary>
            <p>Yes. Edit the strategy, ask for a rewrite, or give a plain instruction like &ldquo;write a more detailed Realtor update.&rdquo;</p>
          </details>
          <details class="fup-faq__item">
            <summary>Does it work on my phone?</summary>
            <p>Yes. It works in the web version and the app.</p>
          </details>
          <details class="fup-faq__item">
            <summary>Can I buy Follow-Up Pro on its own?</summary>
            <p>It's included with Loan Atlas membership.</p>
          </details>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    /* Follow-Up Pro hero demo: tabs + one-time play sequence.
       Markup ships in its final state; the sequence only runs with JS and
       without reduced motion, so nothing is ever stuck hidden. */
    (function () {
      var demo = document.getElementById('fup-demo');
      if (!demo) return;
      var tabs = Array.prototype.slice.call(demo.querySelectorAll('.fup-tab'));

      function select(tab, focus) {
        tabs.forEach(function (t) {
          var on = t === tab;
          t.setAttribute('aria-selected', on ? 'true' : 'false');
          t.tabIndex = on ? 0 : -1;
          document.getElementById(t.getAttribute('aria-controls')).hidden = !on;
        });
        if (focus) tab.focus();
      }

      tabs.forEach(function (tab, i) {
        tab.addEventListener('click', function () { stopAuto(); select(tab); });
        tab.addEventListener('keydown', function (e) {
          var n = null;
          if (e.key === 'ArrowRight') n = tabs[(i + 1) % tabs.length];
          if (e.key === 'ArrowLeft') n = tabs[(i - 1 + tabs.length) % tabs.length];
          if (e.key === 'Home') n = tabs[0];
          if (e.key === 'End') n = tabs[tabs.length - 1];
          if (n) { e.preventDefault(); stopAuto(); select(n, true); }
        });
      });

      var timers = [];
      function at(ms, fn) { timers.push(setTimeout(fn, ms)); }
      function stopAuto() { timers.forEach(clearTimeout); timers = []; finish(); }
      function finish() {
        demo.classList.add('is-marked', 'is-out');
        demo.querySelectorAll('.fup-tline, .fup-notes > div').forEach(function (el) { el.classList.add('is-in'); });
        tabs.forEach(function (t) { t.classList.add('is-ready'); });
      }

      var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (reduce) return;

      /* Arm: hide everything, then play the sequence once. */
      demo.classList.add('is-armed');
      tabs.forEach(function (t) { t.classList.remove('is-ready'); });
      var lines = demo.querySelectorAll('.fup-tline');
      var rows = demo.querySelectorAll('.fup-notes > div');

      var t = 400;
      lines.forEach(function (el) { at(t, function () { el.classList.add('is-in'); }); t += 650; });
      t += 200;
      at(t, function () { demo.classList.add('is-marked'); });
      t += 700;
      at(t, function () { demo.classList.add('is-out'); });
      t += 500;
      rows.forEach(function (el) { at(t, function () { el.classList.add('is-in'); }); t += 260; });
      at(t, function () { tabs[0].classList.add('is-ready'); });
      tabs.slice(1).forEach(function (tab) { t += 380; at(t, function () { tab.classList.add('is-ready'); }); });
      /* Show each output once, then settle back on the notes. */
      t += 1600;
      tabs.slice(1).forEach(function (tab) { at(t, function () { select(tab); }); t += 2600; });
      at(t, function () { select(tabs[0]); timers = []; });
    })();
  </script>
