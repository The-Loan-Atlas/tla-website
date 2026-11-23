<?php
/**
 * Body partial for /ai-business-planner/ (TLA Full HTML template).
 * Generated from public/ai-business-planner.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'Atlas AI Business &amp; Life Planner | The Loan Atlas';
$tla_description = 'Execute like the top 1%. The Atlas AI Business & Life Planner turns a 40-question assessment into AI-prioritized SMART goals and 950+ mortgage-specific action items — in about 20 minutes.';
$tla_active      = '';
?>
  <style>
    /* ==========================================================================
       AI Business Planner — page-scoped (.aibp-*)
       Section layout follows the legacy planner page; type + color are the
       new brand (Manrope/Inter, Midnight Slate + Brass).
       ========================================================================== */
    .aibp {
      --aibp-ink: var(--primary);
      --aibp-body: #3c4656;
      --aibp-muted: #5b6575;
      --aibp-line: #e3e7ec;
      --aibp-tint: #f3f6f9;
      --aibp-brass-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      --aibp-brass-text: linear-gradient(135deg, #a77812 0%, #c9961c 55%, #d9a92e 100%);
      --aibp-dark-band: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      background: #fff;
      color: var(--aibp-body);
      overflow-x: clip;
    }

    .aibp h1,
    .aibp h2,
    .aibp h3 {
      font-family: var(--font-display);
      color: var(--aibp-ink);
      letter-spacing: -0.02em;
    }

    /* zero-specificity reset so component margins always win */
    :where(.aibp) :where(h1, h2, h3) { margin: 0; }

    :where(.aibp) :where(p) { margin: 0; }

    .aibp-accent {
      background: var(--aibp-brass-text);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .aibp-accent--light {
      background: var(--aibp-brass-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .aibp-eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-weight: 700;
      font-size: 0.875rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--brass);
    }

    .aibp-section {
      padding-block: clamp(64px, 8vw, 120px);
    }

    .aibp-h2 {
      font-size: clamp(2rem, 1.3rem + 2.6vw, 3.25rem);
      font-weight: 800;
      line-height: 1.1;
    }

    .aibp-lead {
      font-size: clamp(1.0625rem, 1rem + 0.3vw, 1.1875rem);
      line-height: 1.65;
    }

    .aibp-btn {
      border-radius: var(--radius-full);
      white-space: normal;
      text-align: center;
    }

    /* Center every CTA once sections stack (How It Works stacks below 1024px) */
    @media (max-width: 959px) {
      .aibp .aibp-btn {
        display: flex;
        width: fit-content;
        max-width: 100%;
        margin-inline: auto;
      }
    }

    @media (max-width: 959px) {
      .aibp .aibp-hero__copy { max-width: none; } /* so the hero CTA centers on the screen, not a narrow column */
    }

    @media (max-width: 1023px) {
      .aibp .aibp-how__cta .aibp-btn {
        display: flex;
        width: fit-content;
        max-width: 100%;
        margin-inline: auto;
      }
    }

    /* Check-circle list (used on dark backgrounds) */
    .aibp-checks {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      grid-template-columns: 1fr;
      gap: 14px 40px;
    }

    @media (min-width: 560px) {
      .aibp-checks { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    .aibp-checks li {
      display: flex;
      align-items: center;
      gap: 12px;
      color: rgba(255, 255, 255, 0.92);
      font-size: 1.0625rem;
      line-height: 1.4;
    }

    .aibp-checks svg {
      flex: none;
      width: 26px;
      height: 26px;
      fill: none;
      stroke: var(--brass-bright);
      stroke-width: 1.6;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    /* ── 1. HERO ─────────────────────────────────────────────────────────── */
    .aibp-hero {
      position: relative;
      padding-block: clamp(48px, 7vw, 104px) clamp(24px, 4vw, 64px);
      background: #fff; /* phone art has an opaque white glow field */
    }

    .aibp-hero__grid {
      display: grid;
      gap: 32px;
      align-items: center;
    }

    @media (min-width: 960px) {
      .aibp-hero__grid { grid-template-columns: 1.1fr 0.9fr; gap: 48px; }
    }

    .aibp-hero__copy { max-width: 640px; }

    .aibp-hero__kicker {
      display: block;
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.125rem, 1rem + 0.6vw, 1.5rem);
      color: var(--brass);
      letter-spacing: -0.01em;
      margin-bottom: 16px;
    }

    .aibp-hero__title {
      font-size: clamp(2.375rem, 1.4rem + 3.6vw, 4.125rem);
      font-weight: 800;
      line-height: 1.06;
      letter-spacing: -0.03em;
    }

    .aibp-hero__sub {
      margin-top: 24px;
      max-width: 520px;
      font-size: 1.0625rem;
      line-height: 1.7;
      color: var(--aibp-muted);
    }

    .aibp-hero__actions { margin-top: 32px; }

    .aibp-hero__stage {
      position: relative;
      display: none; /* hidden while the hero is stacked (mobile/tablet) */
      justify-content: center;
    }

    @media (min-width: 960px) {
      .aibp-hero__stage { display: flex; }
    }

    .aibp-hero__stage img {
      /* the art is mostly soft glow around a small phone, so it is sized well
         past its column and allowed to overlap the surrounding padding */
      width: 135%;
      max-width: none;
      height: auto;
      margin: -40px -17.5% -56px;
      animation: aibp-float 7s ease-in-out infinite;
    }

    @media (min-width: 960px) {
      .aibp-hero__stage img {
        width: min(165%, 900px);
        margin: -120px -30% -140px -20%;
      }
    }

    @keyframes aibp-float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    /* ── 2. CHAOS → CLARITY ──────────────────────────────────────────────── */
    .aibp-clarity {
      text-align: center;
      background:
        radial-gradient(70% 60% at 50% 110%, rgba(234, 194, 90, 0.16), transparent 70%),
        linear-gradient(180deg, #fff 0%, var(--surface) 100%);
    }

    .aibp-clarity__inner {
      max-width: 780px;
      margin-inline: auto;
      display: grid;
      gap: 20px;
      justify-items: center;
    }

    .aibp-clarity__inner p { font-size: 1.0625rem; line-height: 1.7; }

    .aibp-clarity__pivot {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.25rem, 1.1rem + 0.6vw, 1.5rem);
      line-height: 1.35;
      color: var(--aibp-ink);
      letter-spacing: -0.015em;
      max-width: 520px;
    }

    .aibp-clarity .aibp-btn { margin-top: 12px; }

    /* ── 3. "FINALLY" PHOTO BAND ─────────────────────────────────────────── */
    .aibp-band {
      position: relative;
      background: var(--aibp-dark-band);
      color: #fff;
      z-index: 1; /* photo's head overlaps the section above */
    }

    .aibp-band::before {
      /* warm brass wash on the photo side */
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(55% 90% at 18% 100%, rgba(201, 150, 28, 0.38), transparent 70%);
      pointer-events: none;
    }

    .aibp-band__grid {
      position: relative;
      display: grid;
      gap: 0;
      align-items: end;
    }

    @media (min-width: 960px) {
      .aibp-band__grid { grid-template-columns: 0.85fr 1.15fr; gap: 56px; align-items: center; }
    }

    .aibp-band__photo {
      order: 2;
      display: none; /* hidden while the band is stacked (mobile/tablet) */
      justify-content: center;
      align-self: end;
    }

    .aibp-band__photo img {
      width: min(78%, 420px);
      height: auto;
      display: block;
      margin-top: 32px;
    }

    @media (min-width: 960px) {
      .aibp-band__photo { order: 0; display: flex; }
      .aibp-band__photo img {
        width: min(100%, 470px);
        margin-top: -72px; /* head breaks out of the band */
      }
    }

    .aibp-band__copy { padding-block: clamp(56px, 7vw, 96px); }

    @media (min-width: 960px) {
      .aibp-band__copy { padding-block: 88px; }
    }

    .aibp-band__copy h2 {
      color: #fff;
      font-size: clamp(2rem, 1.3rem + 2.4vw, 3.125rem);
      font-weight: 800;
      line-height: 1.1;
    }

    .aibp-band__copy > p {
      margin-top: 20px;
      color: rgba(255, 255, 255, 0.78);
      font-size: 1.0625rem;
      line-height: 1.7;
      max-width: 580px;
    }

    .aibp-band .aibp-checks { margin-top: 32px; max-width: 560px; }

    /* ── 4. HOW IT WORKS ─────────────────────────────────────────────────── */
    .aibp-how__grid {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 1024px) {
      .aibp-how__grid {
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr) minmax(0, 0.95fr);
        grid-template-rows: auto auto auto;
      }
      .aibp-how__panel { grid-column: 3; grid-row: 1 / span 3; }
    }

    .aibp-how__steps {
      display: grid;
      gap: 20px;
    }

    @media (min-width: 640px) {
      .aibp-how__steps { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (min-width: 1024px) {
      .aibp-how__steps { grid-column: 1 / span 2; grid-row: 1 / span 2; }
      .aibp-how__cta { grid-column: 1 / span 2; grid-row: 3; }
    }

    .aibp-step {
      background: var(--aibp-tint);
      border: 1px solid var(--aibp-line);
      border-radius: var(--radius-3xl);
      padding: 32px 28px;
    }

    .aibp-step__num {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 0.875rem;
      color: var(--brass);
      letter-spacing: 0.02em;
    }

    .aibp-step h3 {
      margin-top: 6px;
      font-size: 1.375rem;
      font-weight: 800;
      line-height: 1.3;
    }

    .aibp-step p {
      margin-top: 14px;
      font-size: 0.9688rem;
      line-height: 1.65;
      color: var(--aibp-muted);
    }

    .aibp-how__panel {
      /* Matches the legacy panel: blue gradient, cropped robot-phone that is
         clipped by the panel's left/bottom edges but bleeds past its right edge. */
      position: relative;
      border-radius: var(--radius-3xl);
      background: linear-gradient(225deg, #050d18 0%, #0c355e 48%, #2668a6 100%);
      padding: 52px 28px 0 48px;
      order: -1; /* heading first on mobile; grid placement takes over at 1024px */
      display: flex;
      flex-direction: column;
      /* clip top/left/bottom to the rounded panel; leave the right side open */
      clip-path: inset(0 -40% 0 0 round var(--radius-3xl));
    }

    .aibp-how__panel h2 {
      color: #fff;
      font-size: clamp(2.5rem, 1.8rem + 2.4vw, 3.5rem);
      font-weight: 800;
      line-height: 1.02;
    }

    .aibp-how__panel img {
      display: block;
      height: auto;
      max-width: none;
      margin: auto 0 0 -48px; /* flush to the panel's left edge, sits on its bottom */
      padding-top: 32px;
      width: calc(100% + 48px + 28px); /* mobile: edge to edge, no bleed */
    }

    .aibp-how__panel .aibp-how__art--mobile { display: none; }

    /* Stacked layout: title and a smaller, uncropped robot-phone side by side */
    @media (max-width: 1023px) {
      .aibp-how__panel {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 28px 20px 28px 32px;
        clip-path: inset(0 round var(--radius-3xl));
      }
      .aibp-how__panel .aibp-how__art--desktop { display: none; }
      .aibp-how__panel .aibp-how__art--mobile {
        display: block;
        flex: none;
        width: 46%;
        max-width: 240px;
        margin: 0;
        padding: 0;
        filter: drop-shadow(0 12px 24px rgba(0, 0, 0, 0.35));
      }
    }

    @media (min-width: 1024px) {
      .aibp-how__panel img { width: calc(125% + 48px); } /* bleeds past the right edge */
    }

    .aibp-how__cta { padding-top: 8px; }

    /* ── 5. SEE IT IN ACTION ─────────────────────────────────────────────── */
    .aibp-video {
      position: relative;
      text-align: center;
      padding-top: clamp(64px, 8vw, 112px);
      padding-bottom: clamp(64px, 8vw, 112px);
      background: linear-gradient(to bottom, #021c36 0, #021c36 62%, #fff 62%);
    }

    .aibp-video h2 { color: #fff; }

    .aibp-video__sub {
      margin: 20px auto 0;
      max-width: 560px;
      color: rgba(255, 255, 255, 0.78);
    }

    .aibp-video__frame {
      position: relative;
      margin: clamp(36px, 5vw, 56px) auto 0;
      max-width: 1120px;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      background: #0a1628;
      box-shadow: 0 30px 80px rgba(2, 28, 54, 0.35);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .aibp-video__frame wistia-player { display: block; width: 100%; }

    /* Blur-up swatch while the Wistia web component defines itself */
    wistia-player[media-id='adkrjifyrg']:not(:defined) {
      background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/adkrjifyrg/swatch');
      display: block;
      filter: blur(5px);
      padding-top: 56.25%;
    }

    /* ── 6. PRICING + WHAT'S INSIDE ──────────────────────────────────────── */
    .aibp-inside { padding-top: 0; }

    .aibp-inside__card {
      max-width: 1100px;
      margin-inline: auto;
      background: var(--surface);
      border: 1px solid var(--aibp-line);
      border-radius: 32px;
      padding: 0 clamp(20px, 5vw, 96px) clamp(48px, 6vw, 88px);
      margin-top: clamp(40px, 6vw, 96px);
    }

    .aibp-inside__devices {
      display: block;
      width: min(100%, 920px);
      height: auto;
      margin: calc(-1 * clamp(40px, 6vw, 96px)) auto 0;
      filter: drop-shadow(0 24px 40px rgba(2, 28, 54, 0.16));
    }

    .aibp-price {
      text-align: center;
      margin-top: 32px;
    }

    .aibp-price__label {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.0625rem;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--aibp-ink);
    }

    .aibp-price__amount {
      display: block;
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(4rem, 3rem + 4vw, 6rem);
      line-height: 1;
      letter-spacing: -0.04em;
      margin-top: 8px;
      background: var(--aibp-brass-text);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .aibp-price__term {
      margin-top: 8px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.25rem;
      color: var(--aibp-ink);
    }

    .aibp-price__actions {
      margin-top: 28px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
    }

    .aibp-inside__head {
      text-align: center;
      margin-top: clamp(56px, 7vw, 88px);
    }

    .aibp-features {
      list-style: none;
      margin: 40px 0 0;
      padding: 0;
      display: grid;
      gap: 40px 64px;
    }

    @media (min-width: 720px) {
      .aibp-features { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    .aibp-feature__icon {
      display: grid;
      place-items: center;
      width: 52px;
      height: 52px;
      border-radius: var(--radius-xl);
      background: #fff;
      border: 1px solid var(--aibp-line);
      box-shadow: var(--shadow-sm);
      margin-bottom: 18px;
    }

    .aibp-feature__icon svg {
      width: 26px;
      height: 26px;
      fill: none;
      stroke: var(--brass);
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .aibp-feature h3 {
      font-size: 1.1875rem;
      font-weight: 800;
      line-height: 1.3;
    }

    .aibp-feature p {
      margin-top: 8px;
      font-size: 0.9688rem;
      line-height: 1.7;
      color: var(--aibp-muted);
    }

    /* ── 7. COMPARISON ───────────────────────────────────────────────────── */
    .aibp-compare__grid {
      display: grid;
      gap: 40px;
      align-items: center;
    }

    @media (min-width: 1024px) {
      .aibp-compare__grid { grid-template-columns: 0.8fr 1.2fr; gap: 64px; }
    }

    .aibp-compare__copy p { margin-top: 24px; }

    .aibp-compare__copy p + p { margin-top: 16px; }

    .aibp-table-wrap {
      overflow-x: auto;
      border: 1px solid var(--aibp-line);
      border-radius: var(--radius-2xl);
      box-shadow: var(--shadow);
      background: #fff;
    }

    .aibp-table {
      width: 100%;
      min-width: 560px;
      border-collapse: collapse;
      font-size: 0.9375rem;
      text-align: center;
    }

    .aibp-table th,
    .aibp-table td {
      padding: 16px 14px;
      border-bottom: 1px solid var(--aibp-line);
    }

    .aibp-table tr:last-child td { border-bottom: 0; }

    .aibp-table thead th {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 0.875rem;
      color: var(--aibp-ink);
      background: var(--aibp-tint);
      line-height: 1.35;
    }

    .aibp-table tbody th {
      font-weight: 500;
      color: var(--aibp-ink);
      text-align: left;
      padding-left: 20px;
    }

    .aibp-table td { color: var(--aibp-muted); }

    .aibp-table .is-atlas {
      background: rgba(234, 194, 90, 0.12);
      color: var(--aibp-ink);
      font-weight: 700;
    }

    .aibp-table thead .is-atlas {
      background: var(--primary);
      color: var(--brass-bright);
    }

    @media (max-width: 599px) {
      /* fit all four columns so the Atlas column is never scrolled off-screen */
      .aibp-table { min-width: 0; font-size: 0.8125rem; }
      .aibp-table th,
      .aibp-table td { padding: 12px 6px; }
      .aibp-table tbody th { padding-left: 10px; }
      .aibp-table thead th { font-size: 0.75rem; }
    }

    .aibp-yes { color: var(--brass); font-weight: 800; }
    .aibp-no { color: #9aa3b0; }

    /* ── 8. BUILD THE BUSINESS — gradient CTA card ───────────────────────── */
    .aibp-build__card {
      position: relative;
      max-width: 1140px;
      margin-inline: auto;
      border-radius: 32px;
      padding: clamp(48px, 7vw, 104px) clamp(24px, 6vw, 88px) clamp(48px, 6vw, 80px);
      background:
        linear-gradient(105deg, rgba(201, 150, 28, 0.85) 0%, rgba(118, 91, 0, 0.55) 22%, rgba(6, 14, 28, 0) 55%),
        linear-gradient(160deg, #060e1c 0%, #021c36 60%, #0b2a4a 100%);
      color: #fff;
      box-shadow: var(--shadow-xl);
    }

    .aibp-build__card h2 {
      color: #fff;
      max-width: 640px;
      font-size: clamp(2rem, 1.3rem + 2.4vw, 3.125rem);
      font-weight: 800;
      line-height: 1.1;
    }

    .aibp-build__card .aibp-checks { margin-top: 40px; max-width: 860px; }

    .aibp-build__art {
      display: none;
    }

    @media (min-width: 1024px) {
      .aibp-build__art {
        display: block;
        position: absolute;
        top: -72px;
        right: -32px;
        width: clamp(260px, 24vw, 330px);
        height: auto;
        filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.35));
        animation: aibp-float 8s ease-in-out infinite;
      }
    }

    .aibp-build__cta {
      margin-top: 48px;
      text-align: center;
    }

    /* ── 9. ABOUT TIM ────────────────────────────────────────────────────── */
    .aibp-about { background: var(--surface); }

    .aibp-about__grid {
      display: grid;
      gap: 48px;
      align-items: center;
      max-width: 1100px;
      margin-inline: auto;
    }

    @media (min-width: 900px) {
      .aibp-about__grid { grid-template-columns: 0.8fr 1.2fr; gap: 64px; }
    }

    .aibp-about__photo {
      position: relative;
      max-width: 420px;
      margin-inline: auto;
      width: 100%;
      padding-top: 64px;
    }

    .aibp-about__photo::before {
      content: "";
      position: absolute;
      inset: 120px 0 0;
      border-radius: var(--radius-3xl);
      background:
        radial-gradient(80% 60% at 50% 100%, rgba(234, 194, 90, 0.35), transparent 70%),
        var(--aibp-dark-band);
    }

    .aibp-about__photo img {
      position: relative;
      display: block;
      width: 100%;
      height: auto;
      border-radius: 0 0 var(--radius-3xl) var(--radius-3xl);
    }

    .aibp-about__copy h2 {
      font-size: clamp(2rem, 1.3rem + 2.2vw, 3rem);
      font-weight: 800;
      line-height: 1.12;
    }

    .aibp-about__copy p {
      margin-top: 18px;
      font-size: 1.0313rem;
      line-height: 1.75;
    }

    .aibp-about__copy h2 + p { margin-top: 28px; }

    .aibp-about__copy .aibp-btn { margin-top: 32px; }

    /* ── 10. FAQ ─────────────────────────────────────────────────────────── */
    .aibp-faq__inner { max-width: 880px; margin-inline: auto; }

    .aibp-faq__inner > h2 { text-align: center; }

    .aibp-faq__list { margin-top: 40px; border-top: 1px solid var(--aibp-line); }

    .aibp-faq__item { border-bottom: 1px solid var(--aibp-line); }

    .aibp-faq__item summary {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding: 26px 8px;
      cursor: pointer;
      list-style: none;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.0625rem, 1rem + 0.3vw, 1.25rem);
      color: var(--aibp-ink);
      letter-spacing: -0.01em;
    }

    .aibp-faq__item summary::-webkit-details-marker { display: none; }

    .aibp-faq__item summary:hover { color: #0b3b6b; }

    .aibp-faq__chev {
      flex: none;
      display: grid;
      place-items: center;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: var(--aibp-tint);
      border: 1px solid var(--aibp-line);
      transition: transform 220ms ease, background 220ms ease;
    }

    .aibp-faq__chev svg {
      width: 16px;
      height: 16px;
      fill: none;
      stroke: var(--aibp-ink);
      stroke-width: 2.4;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .aibp-faq__item[open] .aibp-faq__chev {
      transform: rotate(90deg);
      background: var(--brass-bright);
      border-color: var(--brass-bright);
    }

    .aibp-faq__answer {
      padding: 0 56px 28px 8px;
      font-size: 1.0313rem;
      line-height: 1.75;
      color: var(--aibp-muted);
    }

    .aibp-faq__cta { margin-top: 56px; text-align: center; }

    /* ── Reduced motion ──────────────────────────────────────────────────── */
    @media (prefers-reduced-motion: reduce) {
      .aibp-hero__stage img,
      .aibp-build__art { animation: none; }
      .aibp-faq__chev { transition: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main aibp">

    <!-- ───────────────────────── 1. HERO ───────────────────────── -->
    <section class="aibp-hero" aria-labelledby="aibp-hero-heading">
      <div class="container aibp-hero__grid">
        <div class="aibp-hero__copy" data-reveal="up">
          <span class="aibp-hero__kicker">Atlas A.I. Business &amp; Life Planner</span>
          <h1 id="aibp-hero-heading" class="aibp-hero__title">
            Execute Like the Top 1% By Turning AI-Powered Insights Into
            <span class="aibp-accent">Actionable Goals</span>
          </h1>
          <p class="aibp-hero__sub">
            The complete business &amp; life planning system built by billion-dollar originator and
            coach Tim Braheem. Designed to transform overwhelmed originators into confident,
            in-demand advisors with predictable, scalable businesses.
          </p>
          <div class="aibp-hero__actions">
            <a class="btn btn--gold btn--xl aibp-btn" href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Get Access</a>
          </div>
        </div>
        <div class="aibp-hero__stage" aria-hidden="true">
          <img src="<?php echo TLA_BASE; ?>/assets/ai-business-planner-phone.webp" alt="" width="1080" height="1127"
            loading="eager" fetchpriority="high" />
        </div>
      </div>
    </section>

    <!-- ─────────────────── 2. CHAOS → CLARITY ─────────────────── -->
    <section class="aibp-section aibp-clarity" aria-labelledby="aibp-clarity-heading">
      <div class="container">
        <div class="aibp-clarity__inner" data-reveal="up">
          <h2 id="aibp-clarity-heading" class="aibp-h2">
            Turn Chaos Into <span class="aibp-accent">Clarity</span> in 20 Minutes
          </h2>
          <p>
            Every loan originator knows what they need to do to reach the next level, but the gap
            between knowing and doing is where most of us get stuck.
          </p>
          <p class="aibp-clarity__pivot">
            The Atlas AI Business &amp; Life Planner changes that in minutes.
          </p>
          <p>
            Using a smart 40-question assessment, 86 AI-powered SMART goals, and 950+ specific
            action items, you will receive a personalized, AI-prioritized blueprint that shows you
            exactly where you need to focus for maximum impact.
          </p>
          <p>No more guessing. The planner does the thinking — you just do the executing.</p>
          <a class="btn btn--gold btn--xl aibp-btn" href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Take Control of Your Business</a>
        </div>
      </div>
    </section>

    <!-- ──────────────── 3. "FINALLY" PHOTO BAND ──────────────── -->
    <section class="aibp-band" aria-labelledby="aibp-band-heading">
      <div class="container aibp-band__grid">
        <div class="aibp-band__photo" aria-hidden="true">
          <img src="<?php echo TLA_BASE; ?>/assets/young-man-laptop.webp" alt="" width="819" height="1024" loading="lazy" />
        </div>
        <div class="aibp-band__copy" data-reveal="up">
          <h2 id="aibp-band-heading">
            Finally, Business Planning You'll Actually <span class="aibp-accent--light">Execute</span>
          </h2>
          <p>
            The Atlas AI Business and Life Planner isn't a simple checklist. It analyzes your
            habits, skills, and strengths — then builds a plan that fits who you are and where you
            want to go.
          </p>
          <ul class="aibp-checks">
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Clear priorities</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Automated reminders</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Weekly execution</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Real accountability</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Assignable tasks</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Trackable progress</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ───────────────────── 4. HOW IT WORKS ───────────────────── -->
    <section class="aibp-section aibp-how" aria-labelledby="aibp-how-heading">
      <div class="container aibp-how__grid">
        <div class="aibp-how__steps" data-reveal-stagger="90">
          <article class="aibp-step">
            <span class="aibp-step__num">Step 1</span>
            <h3>Diagnose Your Business</h3>
            <p>Take the 40-question assessment across the 8 Disciplines of Mortgage Origination Mastery.</p>
            <p>You'll immediately see where your business is leaking time, energy, money, and
              opportunity — presented visually in your Assessment Wheel &amp; Scorecard.</p>
          </article>
          <article class="aibp-step">
            <span class="aibp-step__num">Step 2</span>
            <h3>Choose Your 2–3 High-Impact Goals</h3>
            <p>Based on your score, the planner recommends the goals that will move the needle the fastest.</p>
            <p>These aren't vague ideas. They're curated SMART goals written specifically for
              mortgage originators.</p>
          </article>
          <article class="aibp-step">
            <span class="aibp-step__num">Step 3</span>
            <h3>Install the Action System</h3>
            <p>The AI matches each selected goal with the action items most relevant to your
              strengths, weaknesses, and role so you always know the right next move.</p>
            <p>You choose the actions you want, set reminders, assign tasks to teammates, and create
              accountability loops — all inside the tool.</p>
          </article>
          <article class="aibp-step">
            <span class="aibp-step__num">Step 4</span>
            <h3>Execute With Weekly Momentum</h3>
            <p>Your AI dashboard tracks patterns, habits, and gaps to help you adjust before momentum stalls.</p>
            <p>You get a weekly rhythm that keeps you consistent — without needing to rely on motivation.</p>
          </article>
        </div>

        <div class="aibp-how__panel" data-reveal="up">
          <h2 id="aibp-how-heading">How It<br />Works</h2>
          <!-- Two images swapped by CSS (the build only rewrites src/href, not srcset).
               Mobile: uncropped art beside the title. Desktop: cropped art bleeds off the panel. -->
          <img class="aibp-how__art aibp-how__art--mobile" src="<?php echo TLA_BASE; ?>/assets/ai-planner-robot-phone.webp" alt=""
            aria-hidden="true" width="1024" height="937" loading="lazy" />
          <img class="aibp-how__art aibp-how__art--desktop" src="<?php echo TLA_BASE; ?>/assets/ai-planner-robot-phone-cropped.webp" alt=""
            aria-hidden="true" width="598" height="734" loading="lazy" />
        </div>

        <div class="aibp-how__cta">
          <a class="btn btn--gold btn--xl aibp-btn" href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Activate Your Execution System</a>
        </div>
      </div>
    </section>

    <!-- ──────────────────── 5. SEE IT IN ACTION ──────────────────── -->
    <section class="aibp-video" id="see-it-in-action" aria-labelledby="aibp-video-heading">
      <div class="container">
        <h2 id="aibp-video-heading" class="aibp-h2" data-reveal="up">See It In Action</h2>
        <p class="aibp-lead aibp-video__sub" data-reveal="up">
          Watch as Tim Braheem explains exactly how the planner works and how simple execution becomes.
        </p>
        <div class="aibp-video__frame" data-reveal="up">
          <!-- Wistia loader scripts live in <body> (the build strips <head> scripts) -->
          <script src="https://fast.wistia.com/player.js" async></script>
          <script src="https://fast.wistia.com/embed/adkrjifyrg.js" async type="module"></script>
          <wistia-player media-id="adkrjifyrg" seo="false" aspect="1.7777777777777777"></wistia-player>
        </div>
      </div>
    </section>

    <!-- ─────────────── 6. PRICING + WHAT'S INSIDE ─────────────── -->
    <section class="aibp-section aibp-inside" id="pricing" aria-labelledby="aibp-inside-heading">
      <div class="container">
        <div class="aibp-inside__card">
          <img class="aibp-inside__devices" src="<?php echo TLA_BASE; ?>/assets/ai-planner-devices.webp"
            alt="The Atlas AI Planner on phone, laptop and tablet — assessment wheel and My Plan dashboard"
            width="1080" height="585" loading="lazy" />

          <div class="aibp-price" data-reveal="up">
            <div class="aibp-price__label">For Only</div>
            <span class="aibp-price__amount">$775</span>
            <div class="aibp-price__term">(one-time payment)</div>
            <div class="aibp-price__actions">
              <a class="btn btn--gold btn--xl aibp-btn"
                href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Get Access Now</a>
              <a class="btn btn--ghost btn--xl aibp-btn" href="#see-it-in-action">Watch The Intro Video</a>
            </div>
          </div>

          <h2 id="aibp-inside-heading" class="aibp-h2 aibp-inside__head">What's Inside</h2>

          <ul class="aibp-features" data-reveal-stagger="70">
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="1" /></svg></span>
              <h3>86 Pre-Written SMART Goals</h3>
              <p>Written by Tim, rooted in the 8 Disciplines of Mortgage Origination Mastery, and
                structured for maximum clarity and execution.</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="4" width="14" height="17" rx="2" /><path d="M9 4V3h6v1" /><path d="M9 10h6M9 14h6M9 18h3" /></svg></span>
              <h3>950+ Action Items</h3>
              <p>Granular, mortgage-specific, battle-tested instructions that walk you step-by-step
                to implementation. (These alone replace thousands of dollars in coaching.)</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l1.9 4.6L18.5 9.5l-4.6 1.9L12 16l-1.9-4.6L5.5 9.5l4.6-1.9z" /><path d="M19 15l.8 1.9 1.9.8-1.9.8L19 20.4l-.8-1.9-1.9-.8 1.9-.8z" /></svg></span>
              <h3>AI-Powered Goal Prioritization</h3>
              <p>Automatically recommends the most achievable, high-impact goals for your business.</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10 6h10M10 12h10M10 18h10" /><path d="M4 6h1M4 12h1M4 18h1" /></svg></span>
              <h3>Personalized Action Sequencing</h3>
              <p>The planner helps determine the order and timing of your action items for maximum execution.</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8" r="3.5" /><path d="M2.5 20c.6-3.6 3.2-5.5 6.5-5.5s5.9 1.9 6.5 5.5" /><path d="M16 4.6a3.5 3.5 0 010 6.8M18 14.8c2 .7 3.2 2.5 3.5 5.2" /></svg></span>
              <h3>Team Delegation</h3>
              <p>Assign tasks with a click — perfect for leaders and managers.</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="6" y="2.5" width="12" height="19" rx="2.5" /><path d="M12 7.5v7M9 12l3 3 3-3" /></svg></span>
              <h3>Export to Any System</h3>
              <p>Run the planner inside Atlas, or sync it to your workflow tool of choice.</p>
            </li>
            <li class="aibp-feature">
              <span class="aibp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2" /></svg></span>
              <h3>40-Question Assessment</h3>
              <p>A full business diagnostic that exposes the truth about where you are — and where
                you need to grow.</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ─────────────────────── 7. COMPARISON ─────────────────────── -->
    <section class="aibp-section aibp-compare" aria-labelledby="aibp-compare-heading">
      <div class="container aibp-compare__grid">
        <div class="aibp-compare__copy" data-reveal="up">
          <h2 id="aibp-compare-heading" class="aibp-h2">
            Stop Paying for Stuff That <span class="aibp-accent">Doesn't Move the Needle</span>
          </h2>
          <p class="aibp-lead">
            Most loan officers waste years rebuilding plans that never stick. Traditional coaching
            gives you ideas, DIY planning gives you stress.
          </p>
          <p class="aibp-lead">
            No more guessing. The planner does the thinking — <strong style="color:var(--aibp-ink)">you just do the executing.</strong>
          </p>
        </div>

        <div class="aibp-table-wrap" data-reveal="up">
          <table class="aibp-table">
            <caption class="visually-hidden">Atlas AI Planner compared with DIY planning and traditional coaching</caption>
            <thead>
              <tr>
                <th scope="col">Feature</th>
                <th scope="col">DIY Planning</th>
                <th scope="col">Traditional Coaching</th>
                <th scope="col" class="is-atlas">Atlas AI Planner</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Mortgage-specific</th>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td>Sometimes</td>
                <td class="is-atlas"><span class="aibp-yes" aria-hidden="true">✓</span> 100%</td>
              </tr>
              <tr>
                <th scope="row">SMART goals</th>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td>Varies</td>
                <td class="is-atlas"><span class="aibp-yes" aria-hidden="true">✓</span> 86</td>
              </tr>
              <tr>
                <th scope="row">Action items</th>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td>Limited</td>
                <td class="is-atlas"><span class="aibp-yes" aria-hidden="true">✓</span> 950+</td>
              </tr>
              <tr>
                <th scope="row">Accountability</th>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td>Human only</td>
                <td class="is-atlas"><span class="aibp-yes" aria-hidden="true">✓</span> Automated</td>
              </tr>
              <tr>
                <th scope="row">Team delegation</th>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td><span class="aibp-no" aria-label="No">✕</span></td>
                <td class="is-atlas"><span class="aibp-yes" aria-hidden="true">✓</span> Yes</td>
              </tr>
              <tr>
                <th scope="row">Setup time</th>
                <td>Weeks</td>
                <td>Weeks</td>
                <td class="is-atlas">20 minutes</td>
              </tr>
              <tr>
                <th scope="row">Price</th>
                <td>Free</td>
                <td>$1,000–$20,000/yr</td>
                <td class="is-atlas">$775 one-time</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ──────────────── 8. BUILD THE BUSINESS CTA ──────────────── -->
    <section class="aibp-section aibp-build" aria-labelledby="aibp-build-heading" style="padding-top:clamp(40px,5vw,72px)">
      <div class="container">
        <div class="aibp-build__card" data-reveal="up">
          <img class="aibp-build__art" src="<?php echo TLA_BASE; ?>/assets/ai-planner-robot-phone.webp" alt="" aria-hidden="true"
            width="1024" height="937" loading="lazy" />
          <h2 id="aibp-build-heading">Build the Business and Life You've Always Wanted</h2>
          <ul class="aibp-checks">
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>40-question business diagnostic</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>One-click task delegation</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>86 pre-built SMART goals</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Automated reminders</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>950+ actionable steps</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Weekly progress tracking</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Agent partnership systems</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Exportable performance reports</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Database follow-up rhythms</li>
            <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" /><polyline points="7.5 12.5 10.5 15.5 16.5 9" /></svg>Your full operating system</li>
          </ul>
          <div class="aibp-build__cta">
            <a class="btn btn--gold btn--xl aibp-btn" href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Install the Structure You've Been Missing</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ─────────────────────── 9. ABOUT TIM ─────────────────────── -->
    <section class="aibp-section aibp-about" aria-labelledby="aibp-about-heading">
      <div class="container aibp-about__grid">
        <div class="aibp-about__photo" data-reveal="up">
          <img src="<?php echo TLA_BASE; ?>/assets/tim-braheem-smiling.webp" alt="Tim Braheem, founder of The Loan Atlas"
            width="743" height="1024" loading="lazy" />
        </div>
        <div class="aibp-about__copy" data-reveal="up">
          <h2 id="aibp-about-heading">About Tim Braheem &amp; The Loan Atlas</h2>
          <p>
            Tim Braheem is a top 1% originator and 30-year mortgage veteran known for building the
            systems elite producers still use today. After decades of coaching, he saw that the
            industry didn't need more tips or motivation — it needed a true operating system.
          </p>
          <p>
            That vision became The Loan Atlas, built on the 8 Disciplines of Origination Mastery.
            The Atlas AI Business &amp; Life Planner is the companion tool that makes those
            disciplines executable.
          </p>
          <p>
            The Loan Atlas shows you what top producers do. The Planner ensures you actually do it
            with weekly rhythms, task delegation, and daily accountability.
          </p>
          <a class="btn btn--gold btn--xl aibp-btn" href="/whats-inside/">Explore The Loan Atlas</a>
        </div>
      </div>
    </section>

    <!-- ────────────────────────── 10. FAQ ────────────────────────── -->
    <section class="aibp-section aibp-faq" aria-labelledby="aibp-faq-heading">
      <div class="container">
        <div class="aibp-faq__inner">
          <h2 id="aibp-faq-heading" class="aibp-h2">Frequently Asked Questions</h2>
          <div class="aibp-faq__list">
            <details class="aibp-faq__item">
              <summary>How long does setup take?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">Most originators complete their entire plan in 20–30 minutes.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>How many goals should I choose?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">Tim recommends 2–3 goals maximum. This tool is built for execution, not overwhelm.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>How often should I use it?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">Daily for reminders, weekly for check-ins, monthly for reporting.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>Can my team use it?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">Yes. You can assign tasks to team members with built-in notifications.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>Does this replace coaching?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">This is the operating system coaching programs wish they were built on. It works alone, or as the backbone of any coaching relationship.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>Is this only for Loan Atlas members?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">No. Anyone can purchase the 3-year license.</div>
            </details>
            <details class="aibp-faq__item">
              <summary>Can I really get 3-year access for $775?<span class="aibp-faq__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="9 6 15 12 9 18" /></svg></span></summary>
              <div class="aibp-faq__answer">Yes! The price is intentionally disruptive to give originators at every level access to a real operating system they can use every day.</div>
            </details>
          </div>
          <div class="aibp-faq__cta">
            <a class="btn btn--gold btn--xl aibp-btn" href="https://members.theloanatlas.com/checkouts/atlas-ai-business-and-life-planner/">Get Access</a>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

