<?php
/**
 * Body partial for /join-mbs-111926/ (TLA Full HTML template).
 * Generated from public/webinar-offers/join-mbs-111926.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'MBS Live Campaign Playbook — Free Download — The Loan Atlas';
$tla_description = 'Download the MBS Live Campaign Playbook: three ready-to-send text and email follow-up campaigns for buyers who pressed pause and past clients sitting on equity.';
$tla_active      = '';
?>
  <style>
    /* ══════════════════════════════════════════════════════════════════════════
       STICKY OFFER BAR — from the earlier join-mbs-111926 sales page
       ══════════════════════════════════════════════════════════════════════════ */
    .apm-bar {
      position: sticky;
      top: var(--header-h);
      z-index: 40;
      border-bottom: 2px solid transparent;
      border-image: linear-gradient(90deg, #c9961c, #ffd56c, #c9961c) 1;
      box-shadow: 0 8px 26px rgba(2, 28, 54, 0.28);
    }
    .apm-bar__link {
      display: block;
      color: inherit;
      text-decoration: none;
      transition: filter 0.2s ease;
    }
    .apm-bar__link:hover { filter: brightness(1.06); }
    .apm-bar__link:focus-visible {
      outline: 3px solid #ffd56c;
      outline-offset: -3px;
    }
    @media (prefers-reduced-motion: reduce) {
      .apm-bar__link { transition: none; }
    }
    .apm-bar__strip {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
    }
    .apm-bar__strip-in {
      max-width: var(--container-max);
      margin-inline: auto;
      padding: 9px var(--gutter);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }
    .apm-bar__strip-in::before,
    .apm-bar__strip-in::after {
      content: "";
      height: 1px;
      width: clamp(20px, 6vw, 70px);
      background: rgba(2, 28, 54, 0.32);
    }
    .apm-bar__label {
      font-family: var(--font-body);
      font-weight: 900;
      font-size: 0.9375rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: #021c36;
      text-align: center;
    }
    .apm-bar__row {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
    }
    .apm-bar__row-in {
      max-width: var(--container-max);
      margin-inline: auto;
      padding: 17px var(--gutter);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: clamp(14px, 2vw, 28px);
    }
    .apm-bar__copy {
      display: flex;
      align-items: baseline;
      justify-content: center;
      gap: clamp(9px, 1.3vw, 14px);
      flex-wrap: wrap;
    }
    .apm-bar__price {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.875rem;
      color: #ffffff;
      letter-spacing: -0.02em;
      white-space: nowrap;
      line-height: 1.1;
    }
    .apm-bar__price i {
      font-style: normal;
      font-size: 0.46em;
      font-weight: 700;
      opacity: 0.72;
      letter-spacing: 0;
    }
    .apm-bar__price s {
      font-family: var(--font-display);
      font-size: 0.6em;
      font-weight: 600;
      opacity: 0.42;
      margin-right: 9px;
      letter-spacing: 0;
    }
    .apm-bar__save {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.3125rem;
      color: #6ee7a0;
      white-space: nowrap;
      line-height: 1.1;
      margin-left: clamp(7px, 1.3vw, 16px);
    }
    .apm-bar__brands {
      display: flex;
      align-items: center;
      gap: clamp(8px, 1vw, 14px);
      flex-shrink: 0;
    }
    .apm-bar__brands::after {
      content: "";
      align-self: stretch;
      width: 1px;
      margin-left: clamp(6px, 1vw, 14px);
      background: rgba(234, 194, 90, 0.35);
    }
    .apm-bar__la { height: 24px; width: auto; display: block; }
    .apm-bar__brands-plus {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.25rem;
      line-height: 1;
      color: rgba(234, 194, 90, 0.85);
    }
    .apm-bar__plat { display: flex; align-items: center; gap: 7px; }
    .apm-bar__plat img { height: 28px; width: auto; display: block; }
    .apm-bar__plat-name {
      display: flex;
      flex-direction: column;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.125rem;
      line-height: 1;
      letter-spacing: -0.01em;
      background: linear-gradient(180deg, #eef1f5 0%, #b4bbc7 55%, #d5dae2 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .apm-bar__plat-name small {
      font-family: var(--font-body);
      font-weight: 500;
      font-size: 0.42em;
      letter-spacing: 0.38em;
      margin-top: 0.3em;
      text-transform: uppercase;
      color: #aeb5c1;
      -webkit-text-fill-color: #aeb5c1;
    }
    @media (max-width: 1279px) {
      .apm-bar__label { font-size: 0.875rem; letter-spacing: 0.15em; }
      .apm-bar__row-in { padding: 15px var(--gutter); }
      .apm-bar__price { font-size: 1.625rem; }
      .apm-bar__save { font-size: 1.125rem; }
    }
    @media (max-width: 1099px) {
      .apm-bar__la { height: 20px; }
      .apm-bar__plat img { height: 24px; }
      .apm-bar__plat-name { font-size: 1rem; }
      .apm-bar__label { font-size: 0.8125rem; letter-spacing: 0.14em; }
      .apm-bar__price { font-size: 1.375rem; }
      .apm-bar__save { font-size: 1rem; }
    }
    @media (max-width: 899px) {
      .apm-bar__strip-in { padding: 6px var(--gutter); }
      .apm-bar__label { font-size: 0.75rem; letter-spacing: 0.12em; }
      .apm-bar__row-in { padding: 13px var(--gutter); }
      .apm-bar__price { font-size: 1.1875rem; }
      .apm-bar__save { font-size: 0.875rem; }
    }
    /* Phones: the lockup takes its own centred line above the price. */
    @media (max-width: 639px) {
      .apm-bar__row-in { flex-wrap: wrap; row-gap: 8px; padding: 9px 14px; gap: 8px 12px; }
      .apm-bar__brands { flex-basis: 100%; justify-content: center; }
      .apm-bar__brands::after { display: none; }
      .apm-bar__la { height: 16px; }
      .apm-bar__brands-plus { font-size: 1rem; }
      .apm-bar__plat img { height: 20px; }
      .apm-bar__plat-name { font-size: 0.875rem; }
      .apm-bar__label { font-size: 0.625rem; letter-spacing: 0.06em; }
      .apm-bar__strip-in::before,
      .apm-bar__strip-in::after { width: clamp(12px, 4vw, 40px); }
      .apm-bar__copy { gap: 4px 12px; }
      .apm-bar__price { font-size: 1.25rem; }
      .apm-bar__price s { display: none; }
      .apm-bar__save { font-size: 0.8125rem; margin-left: 0; }
    }
    @media (max-width: 380px) {
      .apm-bar__strip-in { gap: 8px; }
      .apm-bar__strip-in::before,
      .apm-bar__strip-in::after { display: none; }
    }

    /* Anchor targets clear the fixed header + sticky offer bar. */
    #offer, #replay { scroll-margin-top: calc(var(--header-h) + 110px); }

    /* ══════════════════════════════════════════════════════════════════════════
       DOWNLOAD HERO — dark band, copy left · GHL form right
       (layout from namb-build-your-custom-gpt.html's .naq-hero)
       ══════════════════════════════════════════════════════════════════════════ */
    .dl-hero {
      background: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      padding-block: clamp(48px, 7vw, 104px);
      position: relative;
      overflow: hidden;
    }
    .dl-hero::before {
      content: '';
      position: absolute;
      top: -140px;
      right: -80px;
      width: 560px;
      height: 560px;
      max-width: 90vw;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.14), transparent);
      filter: blur(60px);
      pointer-events: none;
    }
    .dl-hero > .container { position: relative; z-index: 1; }
    .dl-hero__grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(32px, 4vw, 56px);
      align-items: center;
    }
    @media (min-width: 900px) {
      .dl-hero__grid {
        grid-template-columns: 1.05fr 0.95fr;
        gap: clamp(40px, 4vw, 72px);
        /* Top-align: the pill's top edge sits level with the form card's top. */
        align-items: start;
      }
    }

    .dl-hero__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass-bright);
      background: rgba(234, 194, 90, 0.12);
      border: 1px solid rgba(234, 194, 90, 0.32);
      border-radius: var(--radius-full);
      padding: 8px 18px;
      margin: 0 0 var(--space-md);
    }
    .dl-hero__eyebrow svg { width: 16px; height: 16px; flex: none; }
    .dl-hero__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.25rem, 1.5rem + 3vw, 3.5rem);
      line-height: 1.08;
      letter-spacing: -0.03em;
      color: #ffffff;
      margin: 0 0 var(--space-md);
      text-wrap: balance;
    }
    .dl-hero__title em {
      font-style: normal;
      /* Bottom padding so background-clip: text doesn't crop the "g". */
      padding-bottom: 0.08em;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    .dl-hero__sub {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 0.95rem + 0.5vw, 1.25rem);
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.8);
      margin: 0 0 clamp(28px, 3vw, 40px);
      max-width: 36rem;
    }

    /* The three campaigns — numbered rows */
    .dl-camps {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: clamp(18px, 2vw, 24px);
      max-width: 36rem;
    }
    .dl-camp {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 16px;
      align-items: start;
    }
    .dl-camp__num {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 0.9375rem;
      color: #021c36;
    }
    .dl-camp__name {
      display: block;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1.125rem, 1rem + 0.4vw, 1.3125rem);
      line-height: 1.25;
      color: #ffffff;
      margin: 0 0 4px;
    }
    .dl-camp__desc {
      display: block;
      font-family: var(--font-body);
      font-size: clamp(0.9375rem, 0.9rem + 0.2vw, 1.0625rem);
      line-height: 1.55;
      color: rgba(255, 255, 255, 0.72);
    }

    /* ── Right column — GHL form card ───────────────────────────────────────── */
    .dl-formcard {
      background: #ffffff;
      border: 1px solid rgba(234, 194, 90, 0.4);
      border-radius: var(--radius-2xl);
      box-shadow:
        inset 0 0 0 1px rgba(234, 194, 90, 0.12),
        0 40px 90px rgba(2, 28, 54, 0.5),
        0 0 60px rgba(234, 194, 90, 0.14);
      padding: clamp(20px, 2vw, 28px) clamp(18px, 2.4vw, 32px);
      overflow: hidden;
      text-align: center;
    }
    .dl-formcard__head { margin-bottom: var(--space-md); }
    .dl-formcard__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.25rem, 1rem + 1vw, 1.625rem);
      line-height: 1.15;
      letter-spacing: -0.015em;
      color: var(--primary);
      margin: 0;
      text-wrap: balance;
    }
    .dl-formcard__embed { min-height: 492px; display: flex; }
    .dl-formcard__embed iframe {
      display: block;
      width: 100%;
      min-height: 492px;
      border: none;
    }

    /* ══════════════════════════════════════════════════════════════════════════
       HIGHWAY PRICING — from the earlier join-mbs-111926 sales page (.mm-pricing + the
       .naq-card equation card: Loan Atlas + Platinum = $448 → $318/mo)
       ══════════════════════════════════════════════════════════════════════════ */
    .mm-pricing {
      background-color: #021c36;
      background-image: url('<?php echo TLA_BASE; ?>/assets/consultation-header.png');
      background-size: cover;
      background-position: center;
      padding-block: clamp(56px, 7vw, 104px);
      position: relative;
      overflow: hidden;
    }
    .mm-pricing::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(160deg, rgba(6, 14, 28, 0.92) 0%, rgba(2, 28, 54, 0.88) 50%, rgba(6, 14, 28, 0.94) 100%);
      pointer-events: none;
      z-index: 0;
    }
    .mm-pricing > .container { position: relative; z-index: 1; }
    .mm-pricing::before {
      content: '';
      position: absolute;
      top: -80px;
      left: 6%;
      width: 480px;
      height: 480px;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.1), transparent);
      filter: blur(70px);
      pointer-events: none;
      z-index: 1;
    }
    .mm-plan {
      position: relative;
      z-index: 1;
      max-width: 64rem;
      margin-inline: auto;
      border-radius: var(--radius-3xl);
      overflow: hidden;
      text-align: center;
    }
    .mm-plan > * { position: relative; z-index: 1; }

    .naq-card {
      --naq-pad: clamp(20px, 4vw, 56px);
      border: 3px solid transparent;
      background:
        linear-gradient(#ffffff, #ffffff) padding-box,
        linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%) border-box;
      box-shadow: 0 40px 90px rgba(2, 28, 54, 0.45), 0 0 60px rgba(234, 194, 90, 0.16);
      padding: 0;
      color: #021c36;
    }
    .naq-eq {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      justify-content: center;
      gap: clamp(8px, 2.4vw, 32px);
      padding: calc(var(--naq-pad) * 0.9) var(--naq-pad) calc(var(--naq-pad) * 0.8);
    }
    .naq-eq__item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: clamp(4px, 0.8vw, 10px);
    }
    .naq-eq__brand {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      gap: 6px;
      min-height: clamp(64px, 8vw, 100px);
    }
    .naq-eq__mark { height: clamp(28px, 4vw, 52px); width: auto; display: block; }
    .naq-eq__name {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(0.75rem, 0.55rem + 0.8vw, 1.25rem);
      letter-spacing: 0.01em;
      text-transform: uppercase;
      color: #0a0f1a;
      white-space: nowrap;
    }
    .naq-eq__plat {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: clamp(1rem, 0.7rem + 1.3vw, 1.75rem);
      line-height: 1;
      letter-spacing: -0.01em;
      background: linear-gradient(180deg, #c3cad6 0%, #7d8594 55%, #a9b0bc 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .naq-eq__plat small {
      font-family: var(--font-body);
      font-weight: 500;
      font-size: 0.4em;
      letter-spacing: 0.42em;
      margin-top: 0.35em;
      margin-right: -0.42em;
      text-transform: uppercase;
      color: #7d8594;
      -webkit-text-fill-color: #7d8594;
    }
    .naq-eq__price {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 1.1rem + 4vw, 4.25rem);
      line-height: 1;
      letter-spacing: -0.03em;
      color: #2c3e5c;
    }
    .naq-eq__op {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.5rem, 1rem + 2vw, 2.75rem);
      line-height: 1;
      color: #2c3e5c;
      align-self: center;
    }
    .naq-eq__sum {
      display: flex;
      align-items: center;
      gap: clamp(8px, 2.4vw, 32px);
      align-self: center;
    }
    .naq-eq__item--total { gap: 2px; }
    .naq-eq__per {
      font-family: var(--font-display);
      font-weight: 500;
      font-size: clamp(0.875rem, 0.7rem + 0.7vw, 1.375rem);
      color: #2c3e5c;
    }
    .naq-band {
      background: linear-gradient(90deg, #2c3e5c 0%, #2c3e5c 55%, #121a28 100%);
      padding: clamp(18px, 2.4vw, 30px) var(--naq-pad);
      text-align: center;
    }
    .naq-band__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.5rem, 0.9rem + 2.8vw, 3rem);
      line-height: 1.05;
      letter-spacing: -0.01em;
      text-transform: uppercase;
      color: #ffffff;
      margin: 0 0 6px;
      text-wrap: balance;
    }
    .naq-band__save {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.375rem, 1.05rem + 1.2vw, 2rem);
      color: #ffffff;
      margin: 0;
    }
    .naq-band__save strong { color: #4cc261; font-weight: 800; }
    .naq-deal {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: calc(var(--naq-pad) * 0.9) var(--naq-pad) var(--naq-pad);
    }
    .naq-deal__price {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(4.5rem, 2.5rem + 9vw, 8.5rem);
      line-height: 1;
      letter-spacing: -0.02em;
      background: linear-gradient(90deg, #a8812f 0%, #eac87a 45%, #a8812f 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .naq-deal__per {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.625rem, 1.2rem + 1.6vw, 2.5rem);
      line-height: 1.1;
      color: #021c36;
      margin-top: clamp(8px, 1.2vw, 16px);
    }
    .naq-deal__terms {
      font-family: var(--font-display);
      font-weight: 400;
      font-size: clamp(1.0625rem, 0.9rem + 0.6vw, 1.5rem);
      color: #021c36;
      margin: 4px 0 var(--space-lg);
    }
    .naq-plan__cta {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
    }
    .naq-plan__cta .btn--gold.btn--lg {
      font-size: clamp(1.0625rem, 0.95rem + 0.6vw, 1.3125rem);
      padding: clamp(20px, 1.6vw, 26px) clamp(36px, 4vw, 56px);
      border-radius: var(--radius-2xl);
      box-shadow: 0 10px 32px rgba(201, 150, 28, 0.34);
    }
    @media (max-width: 520px) {
      .naq-plan__cta { align-self: stretch; }
      .naq-plan__cta .btn--gold.btn--lg {
        width: 100%;
        white-space: normal;
        padding-inline: var(--space-md);
      }
    }
    .naq-plan__fine {
      font-size: 0.9375rem;
      color: #3a4658;
      margin: var(--space-md) 0 0;
      line-height: 1.5;
    }

    /* ══════════════════════════════════════════════════════════════════════════
       PLATINUM MARKETING — from the earlier join-mbs-111926 sales page
       ══════════════════════════════════════════════════════════════════════════ */
    .mm-plat {
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(120% 90% at 100% 0%, #14243f 0%, transparent 55%),
        linear-gradient(160deg, #04122a 0%, #021c36 45%, #050c1a 100%);
      padding-block: clamp(64px, 8vw, 120px);
      isolation: isolate;
      /* Hairline separates it from the pricing band directly above. */
      border-top: 1px solid rgba(234, 194, 90, 0.22);
    }
    .mm-plat__glow {
      position: absolute;
      top: -160px;
      right: -120px;
      width: 620px;
      height: 620px;
      max-width: 90vw;
      background: radial-gradient(closest-side, rgba(234, 194, 90, 0.22), transparent 70%);
      filter: blur(60px);
      pointer-events: none;
      z-index: -1;
    }
    .mm-plat > .container { position: relative; z-index: 1; }
    .mm-plat__bg {
      position: absolute;
      inset: 0;
      z-index: 0;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: clamp(10px, 1.4vw, 18px);
      padding: clamp(10px, 1.4vw, 18px);
      align-content: start;
      opacity: 0.16;
      filter: saturate(0.85);
      pointer-events: none;
      -webkit-mask-image: radial-gradient(120% 90% at 50% 30%, #000 0%, rgba(0,0,0,0.35) 55%, transparent 85%);
      mask-image: radial-gradient(120% 90% at 50% 30%, #000 0%, rgba(0,0,0,0.35) 55%, transparent 85%);
    }
    @media (min-width: 700px) {
      .mm-plat__bg { grid-template-columns: repeat(6, 1fr); }
    }
    .mm-plat__bg img { display: block; width: 100%; height: auto; border-radius: 6px; }
    .mm-plat__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.75rem, 1.6rem + 5.5vw, 6rem);
      line-height: 1.0;
      letter-spacing: -0.03em;
      text-align: center;
      margin: 0 0 clamp(20px, 3vw, 36px);
      background: linear-gradient(180deg, #ffffff 0%, #f2f6fb 30%, #c3cedd 55%, #8b9bb3 78%, #e8eef6 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
      filter: drop-shadow(0 8px 26px rgba(0, 0, 0, 0.5));
      position: relative;
    }
    .mm-plat__title::after {
      content: 'Platinum Marketing';
      position: absolute;
      inset: 0;
      background: linear-gradient(105deg, transparent 40%, rgba(255, 255, 255, 0.9) 50%, transparent 60%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      background-size: 250% 100%;
      background-position: 200% 0;
      animation: mm-plat-shine 6s ease-in-out 1s infinite;
      pointer-events: none;
    }
    @keyframes mm-plat-shine {
      0%   { background-position: 200% 0; }
      55%  { background-position: -130% 0; }
      100% { background-position: -130% 0; }
    }
    @media (prefers-reduced-motion: reduce) {
      .mm-plat__title::after { animation: none; display: none; }
    }
    .mm-plat__headline {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.25rem, 0.8rem + 1.6vw, 2rem);
      line-height: 1.15;
      letter-spacing: -0.01em;
      text-align: center;
      color: #ffffff;
      margin: 0 auto clamp(28px, 4vw, 48px);
      max-width: 72rem;
      text-wrap: balance;
    }
    .mm-plat__headline span {
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .mm-plat__card {
      max-width: 72rem;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr;
      gap: clamp(28px, 4vw, 48px);
      align-items: center;
      padding: clamp(24px, 3.6vw, 48px);
      background: #f7f7f8;
      border: 2px solid #c9961c;
      border-radius: var(--radius-3xl);
      box-shadow: 0 40px 90px rgba(2, 8, 20, 0.55);
      color: #021c36;
    }
    @media (min-width: 900px) {
      .mm-plat__card { grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.15fr); }
      .mm-plat__tiles {
        border-left: 2px solid transparent;
        border-image: linear-gradient(180deg, #eac25a, #c9961c) 1;
        padding-left: clamp(24px, 3vw, 44px);
      }
    }
    .mm-plat__chat { display: flex; flex-direction: column; gap: clamp(14px, 1.8vw, 22px); }
    .mm-plat__msg { display: flex; align-items: flex-end; gap: 10px; }
    .mm-plat__msg p {
      margin: 0;
      padding: 14px 18px;
      border-radius: 8px;
      font-family: var(--font-body);
      font-size: clamp(0.9375rem, 0.88rem + 0.25vw, 1.0625rem);
      line-height: 1.45;
    }
    .mm-plat__msg--bot { max-width: 92%; }
    .mm-plat__msg--bot p { background: #0f2742; color: #ffffff; }
    .mm-plat__msg--user { align-self: flex-end; max-width: 88%; }
    .mm-plat__msg--user p { background: #ffffff; color: #0a0f1a; border: 1px solid #1f2a3a; }
    .mm-plat__avatar {
      flex: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      border-radius: 9999px;
      background: #ffffff;
      border: 1px solid #c9961c;
      margin-bottom: 4px;
    }
    .mm-plat__avatar img { width: 18px; height: auto; display: block; }
    .mm-plat__avatar--user { border: 0; }
    .mm-plat__avatar--user svg { width: 32px; height: 32px; display: block; }
    .mm-plat__tiles {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: clamp(20px, 2.6vw, 32px) clamp(12px, 1.6vw, 20px);
    }
    .mm-plat__tile:last-child { grid-column: 1 / -1; }
    @media (min-width: 560px) {
      .mm-plat__tiles { grid-template-columns: repeat(6, minmax(0, 1fr)); }
      .mm-plat__tile { grid-column: span 2; }
      .mm-plat__tile:nth-child(4) { grid-column: 2 / span 2; }
      .mm-plat__tile:last-child { grid-column: 4 / span 2; }
    }
    .mm-plat__tile {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      gap: 12px;
      text-align: center;
    }
    .mm-plat__tile-label {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(0.75rem, 0.7rem + 0.2vw, 0.875rem);
      letter-spacing: 0.02em;
      text-transform: uppercase;
      color: #0a0f1a;
    }
    .mm-plat__thumb {
      position: relative;
      width: 100%;
      max-width: 150px;
      height: clamp(96px, 10vw, 118px);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .mm-plat__thumb img {
      display: block;
      height: 100%;
      width: auto;
      max-width: 100%;
      object-fit: cover;
      object-position: top;
      border-radius: 3px;
      box-shadow: 0 6px 16px rgba(2, 28, 54, 0.18);
    }
    .mm-plat__thumb--pair img { position: absolute; height: 78%; width: auto; }
    .mm-plat__thumb--pair img:first-child { top: 0; left: 8%; }
    .mm-plat__thumb--pair img:last-child { bottom: 0; right: 8%; }
    .mm-plat__thumb--wide img { height: auto; width: 68%; }
    .mm-plat__thumb--wide img:first-child { top: 6%; left: 4%; }
    .mm-plat__thumb--wide img:last-child { bottom: 6%; right: 4%; }
    .mm-plat__thumb--email { max-width: 170px; height: auto; min-height: clamp(96px, 10vw, 118px); }
    .mm-plat__thumb--email ol {
      list-style: none;
      margin: 0;
      padding: 0;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 3px;
      text-align: left;
    }
    .mm-plat__thumb--email li {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 2px 6px;
      background: #ffffff;
      border: 1px solid #e3e6ea;
      border-radius: 3px;
      box-shadow: 0 2px 6px rgba(2, 28, 54, 0.06);
    }
    .mm-plat__thumb--email b {
      flex: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 12px;
      height: 12px;
      border-radius: 9999px;
      font-size: 7px;
      font-weight: 800;
      color: #021c36;
      background: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
    }
    .mm-plat__thumb--email span {
      min-width: 0;
      font-family: var(--font-body);
      font-size: 7px;
      font-weight: 600;
      line-height: 1.2;
      color: #0a0f1a;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .mm-plat__thumb--email i {
      display: block;
      font-style: normal;
      font-size: 5.5px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #7d8594;
    }
    /* Mobile: hide the chat; the five outputs cycle one at a time (script). */
    @media (max-width: 559.98px) {
      .mm-plat__chat { display: none; }
      .mm-plat__tiles { display: grid; grid-template-columns: minmax(0, 1fr); }
      .mm-plat__tiles .mm-plat__tile,
      .mm-plat__tiles .mm-plat__tile:last-child {
        grid-area: 1 / 1;
        min-width: 0;
        gap: 18px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 500ms ease, visibility 0s linear 500ms;
      }
      .mm-plat__tiles .mm-plat__tile.is-active {
        opacity: 1;
        visibility: visible;
        transition: opacity 500ms ease, visibility 0s;
      }
      .mm-plat__thumb { max-width: 100%; height: clamp(200px, 62vw, 280px); }
      .mm-plat__tile-label { font-size: clamp(1.125rem, 0.9rem + 1.2vw, 1.375rem); }
      .mm-plat__thumb--email {
        max-width: 300px;
        height: auto;
        min-height: clamp(200px, 62vw, 280px);
      }
      .mm-plat__thumb--email ol { gap: 6px; }
      .mm-plat__thumb--email li { gap: 10px; padding: 6px 10px; border-radius: 6px; }
      .mm-plat__thumb--email b { width: 22px; height: 22px; font-size: 11px; }
      .mm-plat__thumb--email span { font-size: 12px; }
      .mm-plat__thumb--email i { font-size: 9px; }
    }
    @media (max-width: 559.98px) and (prefers-reduced-motion: reduce) {
      .mm-plat__tiles .mm-plat__tile,
      .mm-plat__tiles .mm-plat__tile.is-active { transition: none; }
    }
    .mm-plat__price-note {
      font-family: var(--font-body);
      font-size: 0.9375rem;
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.62);
      text-align: center;
      max-width: 46rem;
      margin: var(--space-md) auto 0;
    }

    /* ══════════════════════════════════════════════════════════════════════════
       REPLAY — light band at the bottom (namb-build-your-custom-gpt.html's
       .naq-replay), holding the "coming soon" panel until the video is ready
       ══════════════════════════════════════════════════════════════════════════ */
    .rp-replay {
      background: var(--background);
      padding-block: clamp(56px, 7vw, 104px);
    }
    .rp-replay__head {
      max-width: 52rem;
      margin: 0 auto clamp(32px, 4vw, 52px);
      text-align: center;
    }
    .rp-replay__eyebrow {
      display: inline-block;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass);
      margin: 0 0 var(--space-sm);
    }
    .rp-replay__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.75rem, 1.2rem + 2vw, 2.75rem);
      line-height: 1.15;
      letter-spacing: -0.025em;
      color: var(--primary);
      margin: 0;
      text-wrap: balance;
    }
    .rp-replay__frame {
      max-width: 68rem;
      margin-inline: auto;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      border: 1px solid rgba(2, 28, 54, 0.12);
      box-shadow: 0 30px 70px rgba(2, 28, 54, 0.22);
    }
    .rp-replay__frame wistia-player { display: block; }
    .rp-replay__soon {
      aspect-ratio: 16 / 9;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: clamp(16px, 2.4vw, 28px);
      padding: var(--space-md);
      text-align: center;
      background:
        radial-gradient(ellipse at 50% 40%, rgba(234, 194, 90, 0.12), transparent 60%),
        linear-gradient(135deg, #0a1628 0%, #021c36 55%, #0a223d 100%);
    }
    .rp-replay__soon-icon {
      display: grid;
      place-items: center;
      width: clamp(56px, 8vw, 96px);
      height: clamp(56px, 8vw, 96px);
      border-radius: 50%;
      border: 2px solid rgba(234, 194, 90, 0.55);
      color: var(--brass-bright);
    }
    .rp-replay__soon-icon svg { width: 40%; height: 40%; margin-left: 6%; }
    .rp-replay__soon-text {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.25rem, 0.9rem + 1.8vw, 2.25rem);
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #ffffff;
      margin: 0;
    }
  </style>


  <!-- ── Header (minimal landing chrome — logo only) ─────────────────────────── -->
<?php include get_stylesheet_directory() . '/tla/partials/header-minimal.php'; ?>

  <!-- ── Sticky offer bar ─────────────────────────────────────────────────────── -->
  <div class="apm-bar">
    <a class="apm-bar__link" href="#offer" aria-label="Click to claim your Highway Member Offer — The Loan Atlas + Platinum Marketing, $318/mo, save $1,560 a year">
      <div class="apm-bar__strip">
        <div class="apm-bar__strip-in">
          <span class="apm-bar__label">Click to Claim Your Highway Member Offer</span>
        </div>
      </div>
      <div class="apm-bar__row">
        <div class="apm-bar__row-in">
          <div class="apm-bar__brands" aria-hidden="true">
            <img class="apm-bar__la" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logo-white.png" alt="" />
            <span class="apm-bar__brands-plus">+</span>
            <span class="apm-bar__plat">
              <img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" />
              <span class="apm-bar__plat-name">Platinum<small>Marketing</small></span>
            </span>
          </div>
          <div class="apm-bar__copy">
            <span class="apm-bar__price"><s>$448/mo</s>$318<i>/mo</i></span>
            <span class="apm-bar__save">Save $1,560/yr</span>
          </div>
        </div>
      </div>
    </a>
  </div>

  <main>

    <!-- ── 1. FREE DOWNLOAD — copy (left) · GHL form (right) ───────────────── -->
    <section class="dl-hero" aria-labelledby="dl-title">
      <div class="container">
        <div class="dl-hero__grid">

          <!-- LEFT: copy -->
          <div class="dl-hero__copy">
            <span class="dl-hero__eyebrow">
              <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M10 3v10m0 0l-4-4m4 4l4-4M4 16h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Free Platinum Marketing Campaigns
            </span>
            <h1 id="dl-title" class="dl-hero__title">Three Follow-Up Campaigns That Are <em>Working Right Now</em></h1>
            <p class="dl-hero__sub">Ready-to-send text and email sequences for the buyers who pressed pause and the past clients sitting on equity. Swap in the names, then send.</p>

            <ol class="dl-camps">
              <li class="dl-camp">
                <span class="dl-camp__num" aria-hidden="true">01</span>
                <span>
                  <span class="dl-camp__name">Comeback Buyers</span>
                  <span class="dl-camp__desc">Previously interested buyers who haven&rsquo;t purchased. Leads and prospects.</span>
                </span>
              </li>
              <li class="dl-camp">
                <span class="dl-camp__num" aria-hidden="true">02</span>
                <span>
                  <span class="dl-camp__name">Past Clients, Rate Below 5%</span>
                  <span class="dl-camp__desc">Educate on how to access equity without giving up their low rate.</span>
                </span>
              </li>
              <li class="dl-camp">
                <span class="dl-camp__num" aria-hidden="true">03</span>
                <span>
                  <span class="dl-camp__name">Past Clients, Rate 5% or Higher</span>
                  <span class="dl-camp__desc">Debt consolidation to improve cash flow.</span>
                </span>
              </li>
            </ol>
          </div>

          <!-- RIGHT: GHL LeadConnector form card -->
          <div class="dl-formcard">
            <div class="dl-formcard__head">
              <h2 class="dl-formcard__title">Send Messages That Are Impossible to Ignore</h2>
            </div>
            <div class="dl-formcard__embed">
              <!-- GHL LeadConnector form: "LM: MBS Follow-up Campaigns 11.19.2026".
                   form_embed.js is loaded at the bottom of the page. -->
              <iframe
                src="https://api.leadconnectorhq.com/widget/form/axLJUA7YmHpLaGatWrfS"
                style="width:100%;height:100%;border:none;border-radius:0px"
                id="inline-axLJUA7YmHpLaGatWrfS"
                data-layout="{'id':'INLINE'}"
                data-trigger-type="alwaysShow"
                data-trigger-value=""
                data-activation-type="alwaysActivated"
                data-activation-value=""
                data-deactivation-type="neverDeactivate"
                data-deactivation-value=""
                data-form-name="LM: MBS Follow-up Campaigns 11.19.2026"
                data-height="492"
                data-layout-iframe-id="inline-axLJUA7YmHpLaGatWrfS"
                data-form-id="axLJUA7YmHpLaGatWrfS"
                data-cookie-consent="true"
                data-cookie-consent-provider="auto"
                title="LM: MBS Follow-up Campaigns 11.19.2026">
              </iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── 2. HIGHWAY PRICING ────────────────────────────────────────────────── -->
    <section class="mm-pricing" id="pricing" aria-label="Highway Member Offer pricing">
      <div class="container">
        <article id="offer" class="mm-plan naq-card" data-reveal="scale">
          <div class="naq-eq" role="group" aria-label="Regular price: The Loan Atlas $349 plus Platinum Marketing $99 equals $448 per month">
            <div class="naq-eq__item">
              <div class="naq-eq__brand">
                <img class="naq-eq__mark" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" />
                <span class="naq-eq__name">The Loan Atlas</span>
              </div>
              <span class="naq-eq__price">$349</span>
            </div>
            <span class="naq-eq__op" aria-hidden="true">+</span>
            <div class="naq-eq__item">
              <div class="naq-eq__brand">
                <img class="naq-eq__mark" src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" />
                <span class="naq-eq__plat">Platinum<small>Marketing</small></span>
              </div>
              <span class="naq-eq__price">$99</span>
            </div>
            <div class="naq-eq__sum">
              <span class="naq-eq__op" aria-hidden="true">=</span>
              <div class="naq-eq__item naq-eq__item--total">
                <span class="naq-eq__price">$448</span>
                <span class="naq-eq__per">Per Month</span>
              </div>
            </div>
          </div>

          <div class="naq-band">
            <h3 class="naq-band__title">Highway Member Offer</h3>
            <p class="naq-band__save"><strong>$1,560</strong> Annual Savings</p>
          </div>

          <div class="naq-deal">
            <span class="naq-deal__price">$318</span>
            <span class="naq-deal__per">Per Month</span>
            <span class="naq-deal__terms">(annual subscription paid monthly)</span>
            <div class="naq-plan__cta">
              <a class="btn btn--gold btn--lg" href="https://members.theloanatlas.com/checkouts/premium-membership-checkout-mbs-5-laws/">Start Your Transformation</a>
            </div>
            <p class="naq-plan__fine">Discount pricing available through <strong>Monday, November&nbsp;23</strong>. 12-month commitment. Offer only available to new members.</p>
          </div>
        </article>
      </div>
    </section>

    <!-- ── 3. PLATINUM MARKETING ────────────────────────────────────────────────── -->
    <section class="mm-plat" id="platinum" aria-labelledby="plat-heading">
      <div class="mm-plat__glow" aria-hidden="true"></div>

      <!-- Faded background collage of every Platinum asset -->
      <div class="mm-plat__bg" aria-hidden="true">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-landing-page-1.png" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-presentation-deck-1.png" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-flyer-1.jpeg" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-1.jpeg" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-newsletter.png" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-presentation-deck-2.png" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-2.jpeg" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-landing-page-2.png" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-flyer-2.jpeg" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-3.jpeg" alt="" loading="lazy">
        <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-4.png" alt="" loading="lazy">
      </div>

      <div class="container">

        <h2 id="plat-heading" class="mm-plat__title" data-reveal="up">Platinum Marketing</h2>

        <p class="mm-plat__headline" data-reveal="up">Create and deploy marketing that is <span>impossible to ignore.</span></p>

        <!-- Light card: sample chat (left) + what it builds (right) -->
        <div class="mm-plat__card" data-reveal="scale">
          <div class="mm-plat__chat" aria-label="A sample conversation with Platinum Marketing">
            <div class="mm-plat__msg mm-plat__msg--bot">
              <span class="mm-plat__avatar"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" /></span>
              <p>What should we create today?</p>
            </div>
            <div class="mm-plat__msg mm-plat__msg--user">
              <p>Help me win more business from an agent I just met.</p>
              <span class="mm-plat__avatar mm-plat__avatar--user" aria-hidden="true">
                <svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="20" fill="#dbe7f5"/><circle cx="20" cy="16" r="7" fill="#e9b48f"/><path d="M13 14.5c0-5 3.2-7.5 7-7.5s7 2.5 7 7.5c-1.6-2-4-2.6-7-2.6s-5.4.6-7 2.6z" fill="#7a4a2a"/><path d="M7 36c1.8-7 7-10 13-10s11.2 3 13 10a20 20 0 0 1-26 0z" fill="#e8743b"/></svg>
              </span>
            </div>
            <div class="mm-plat__msg mm-plat__msg--bot">
              <span class="mm-plat__avatar"><img src="<?php echo TLA_BASE; ?>/assets/Loan Atlas logomark-18.png" alt="" /></span>
              <p>Great — let's build a partner pitch. Who's the audience and what's the angle?</p>
            </div>
          </div>

          <ul class="mm-plat__tiles">
            <li class="mm-plat__tile">
              <div class="mm-plat__thumb mm-plat__thumb--pair">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-1.jpeg" alt="" loading="lazy">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-social-image-2.jpeg" alt="" loading="lazy">
              </div>
              <span class="mm-plat__tile-label">Social Graphics</span>
            </li>
            <li class="mm-plat__tile">
              <div class="mm-plat__thumb">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-newsletter.png" alt="" loading="lazy">
              </div>
              <span class="mm-plat__tile-label">Newsletters</span>
            </li>
            <li class="mm-plat__tile">
              <div class="mm-plat__thumb mm-plat__thumb--pair">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-landing-page-1.png" alt="" loading="lazy">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-landing-page-2.png" alt="" loading="lazy">
              </div>
              <span class="mm-plat__tile-label">Landing Pages</span>
            </li>
            <li class="mm-plat__tile">
              <div class="mm-plat__thumb mm-plat__thumb--pair mm-plat__thumb--wide">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-presentation-deck-1.png" alt="" loading="lazy">
                <img src="<?php echo TLA_BASE; ?>/assets/platinum-presentation-deck-2.png" alt="" loading="lazy">
              </div>
              <span class="mm-plat__tile-label">Decks &amp; Flyers</span>
            </li>
            <li class="mm-plat__tile">
              <div class="mm-plat__thumb mm-plat__thumb--email" aria-hidden="true">
                <ol>
                  <li><b>1</b><span><i>Email 1 · Day 0</i>Is now actually the right time to buy?</span></li>
                  <li><b>2</b><span><i>Email 2 · Day 3</i>The number that matters more than the rate</span></li>
                  <li><b>3</b><span><i>Email 3 · Day 7</i>How much home can you really afford?</span></li>
                  <li><b>4</b><span><i>Email 4 · Day 10</i>3 first-time buyer mistakes to avoid</span></li>
                  <li><b>5</b><span><i>Email 5 · Day 14</i>Ready when you are — let's run your numbers</span></li>
                </ol>
              </div>
              <span class="mm-plat__tile-label">Email Campaigns</span>
            </li>
          </ul>
        </div>

        <p class="mm-plat__price-note" data-reveal="up">Additional monthly subscription not included with Loan Atlas membership. Cancel anytime.</p>
      </div>
    </section>

    <!-- ── 4. REPLAY (bottom) ───────────────────────────────────────────────── -->
    <section class="rp-replay" id="replay" aria-labelledby="rp-title">
      <div class="container">
        <div class="rp-replay__head">
          <span class="rp-replay__eyebrow">Webinar Replay</span>
          <h2 id="rp-title" class="rp-replay__title">The 5 Laws of Marketing</h2>
        </div>
        <div class="rp-replay__frame">
          <!-- Placeholder until the 5 Laws of Marketing replay is available.
               When it is, swap this div for the Wistia embed (loader scripts
               stay in <body>, the build strips <head> scripts):
                 <script src="https://fast.wistia.com/player.js" async></script>
                 <script src="https://fast.wistia.com/embed/MEDIA_ID.js" async type="module"></script>
                 <wistia-player media-id="MEDIA_ID" seo="false" aspect="1.7777777777777777"></wistia-player> -->
          <div class="rp-replay__soon">
            <span class="rp-replay__soon-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.14v13.72a1 1 0 0 0 1.52.85l10.6-6.86a1 1 0 0 0 0-1.7L9.52 4.29A1 1 0 0 0 8 5.14z"/></svg>
            </span>
            <p class="rp-replay__soon-text">Replay Coming Soon</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ── Footer (standard site chrome) ──────────────────────────────────────── -->
<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <script>
    // ── Platinum tiles: on mobile, show one output at a time and cycle ──
    (function () {
      var list = document.querySelector('.mm-plat__tiles');
      if (!list) return;
      var tiles = list.querySelectorAll('.mm-plat__tile');
      var mq = window.matchMedia('(max-width: 559.98px)');
      var i = 0, timer = null;
      function show(n) {
        tiles.forEach(function (t, k) { t.classList.toggle('is-active', k === n); });
      }
      function start() {
        if (timer) return;
        show(i);
        timer = setInterval(function () { i = (i + 1) % tiles.length; show(i); }, 2600);
      }
      function stop() { clearInterval(timer); timer = null; }
      function sync() { mq.matches ? start() : stop(); }
      (mq.addEventListener ? mq.addEventListener('change', sync) : mq.addListener(sync));
      sync();
    })();
  </script>
  <!-- LeadConnector form embed (download form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js"></script>
