<?php
/**
 * Body partial for /refinance-masterplan-draft/ (TLA Full HTML template).
 * Generated from public/refinance-masterplan.html by scripts/convert-pages.sh — do not hand-edit;
 * edit the source HTML (or the shared header/footer partials) and re-run.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$tla_title       = 'The Refinance Masterplan | Free 5-Step Guide by Craig Strent | The Loan Atlas';
$tla_description = 'Is your business ready for a refi boom? Get Craig Strent\'s free 5-step plan to organize, capitalize, and close more loans in the next 60 days.';
$tla_active      = '';
?>
  <style>
    .rm {
      --rm-navy: #021c36;
      --rm-navy-deep: #060e1c;
      --rm-ink: #16202b;
      --rm-ink-dim: #4a5663;
      --rm-line: rgba(2, 28, 54, 0.1);
      --rm-cream: #f7f4ec;
      --rm-brass: var(--brass);
      --rm-brass-bright: var(--brass-bright);
      --rm-grad: linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%);
      --rm-darkband: linear-gradient(160deg, #060e1c 0%, #021c36 50%, #060e1c 100%);
      color: var(--rm-ink);
      background: var(--surface-container-lowest);
      overflow-x: clip;
    }

    .rm .rm-wrap { max-width: 1200px; margin-inline: auto; padding-inline: var(--gutter); }

    /* Shared bits ----------------------------------------------------------- */
    .rm .rm-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: var(--font-body);
      font-size: 0.8125rem;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--rm-brass);
      margin: 0 0 18px;
    }
    .rm .rm-eyebrow::before {
      content: '';
      width: 26px;
      height: 2px;
      background: var(--rm-grad);
      border-radius: 2px;
    }
    .rm .rm-eyebrow--ondark { color: var(--rm-brass-bright); }

    .rm .rm-grad {
      background: var(--rm-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .rm .rm-cta {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.0625rem;
      letter-spacing: -0.01em;
      text-decoration: none;
      padding: 18px 34px;
      border: none;
      border-radius: 999px;
      cursor: pointer;
      background: var(--rm-grad);
      color: #1a1205;
      box-shadow: 0 10px 28px -8px rgba(201, 150, 28, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.4);
      transition: transform 200ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 200ms ease;
    }
    .rm .rm-cta:hover { transform: translateY(-2px); box-shadow: 0 16px 38px -10px rgba(201, 150, 28, 0.7); }
    .rm .rm-cta svg { width: 18px; height: 18px; stroke: currentColor; stroke-width: 2.5; fill: none; transition: transform 200ms ease; }
    .rm .rm-cta:hover svg { transform: translateX(4px); }

    .rm .rm-checks { list-style: none; margin: 0; padding: 0; display: grid; gap: 14px; }
    .rm .rm-checks li {
      display: grid;
      grid-template-columns: 28px 1fr;
      gap: 14px;
      align-items: start;
      font-size: 1.125rem;
      line-height: 1.55;
      color: var(--rm-ink-dim);
    }
    .rm .rm-checks li strong { color: var(--rm-ink); font-weight: 700; }
    .rm .rm-checks__icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: var(--rm-grad);
      display: grid;
      place-items: center;
      margin-top: 1px;
    }
    .rm .rm-checks__icon svg { width: 15px; height: 15px; stroke: #1a1205; stroke-width: 3; fill: none; stroke-linecap: round; stroke-linejoin: round; }

    /* ── 1 · HERO ─────────────────────────────────────────────────────────── */
    .rm .rm-hero {
      position: relative;
      background: var(--rm-darkband);
      color: #fff;
      padding-block: clamp(56px, 7vw, 104px);
      isolation: isolate;
      overflow: hidden;
    }
    /* Soft brass glow behind the tablet + faint contour lines (pure CSS). */
    .rm .rm-hero::before {
      content: '';
      position: absolute;
      width: 720px;
      height: 720px;
      left: -120px;
      top: 50%;
      transform: translateY(-50%);
      background: radial-gradient(circle, rgba(234, 194, 90, 0.22) 0%, rgba(234, 194, 90, 0) 62%);
      z-index: -1;
      pointer-events: none;
    }
    .rm .rm-hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background:
        repeating-radial-gradient(ellipse at 110% 120%, transparent 0 38px, rgba(234, 194, 90, 0.05) 38px 39px);
      z-index: -1;
      pointer-events: none;
    }
    .rm .rm-hero__grid {
      display: grid;
      gap: clamp(32px, 5vw, 72px);
      align-items: center;
    }
    .rm .rm-hero__copy { text-align: center; }
    .rm .rm-hero__kicker {
      font-family: var(--font-body);
      font-size: clamp(1.0625rem, 1.6vw, 1.25rem);
      font-weight: 500;
      color: rgba(255, 255, 255, 0.78);
      margin: 0 0 14px;
    }
    .rm .rm-hero__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.5rem, 6vw, 4.75rem);
      line-height: 0.98;
      letter-spacing: -0.03em;
      text-transform: uppercase;
      margin: 0 0 22px;
      color: #fff;
    }
    .rm .rm-hero__title .rm-grad { display: block; }
    .rm .rm-hero__sub {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: clamp(1.1875rem, 2vw, 1.5rem);
      line-height: 1.35;
      color: rgba(255, 255, 255, 0.92);
      max-width: 34ch;
      margin: 0 auto;
    }
    .rm .rm-hero__media {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
    }
    .rm .rm-hero__tablet {
      width: min(100%, 440px);
      height: auto;
      display: block;
      filter: drop-shadow(0 30px 50px rgba(0, 0, 0, 0.45));
      animation: rm-float 7s ease-in-out infinite;
    }
    @keyframes rm-float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    @media (min-width: 900px) {
      .rm .rm-hero__grid { grid-template-columns: 0.9fr 1.1fr; }
      .rm .rm-hero__copy { text-align: left; }
      .rm .rm-hero__sub { margin: 0; }
    }

    /* ── 2 · OPT-IN — pitch left, form right ─────────────────────────────── */
    .rm .rm-optin {
      background: var(--surface-container-lowest);
      padding-block: clamp(56px, 7vw, 104px) clamp(40px, 5vw, 64px);
    }
    .rm .rm-optin__head { text-align: center; margin: 0 auto clamp(36px, 5vw, 56px); max-width: 760px; }
    .rm .rm-optin__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 3.6vw, 2.75rem);
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: var(--rm-navy);
      margin: 0;
    }

    /* Three benefit cards, side by side from 760px up. */
    .rm .rm-proof {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: clamp(16px, 2.4vw, 28px);
    }
    .rm .rm-proof__card {
      position: relative;
      background: var(--surface-container-lowest);
      border: 1px solid var(--rm-line);
      border-radius: var(--radius-xl, 0.75rem);
      padding: clamp(26px, 3vw, 36px) clamp(22px, 2.6vw, 30px);
      text-align: center;
      box-shadow: 0 18px 40px -28px rgba(2, 28, 54, 0.4);
      overflow: hidden;
      transition: transform 240ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 240ms ease;
    }
    .rm .rm-proof__card::before {
      content: '';
      position: absolute;
      inset: 0 0 auto 0;
      height: 3px;
      background: var(--rm-grad);
    }
    .rm .rm-proof__card:hover { transform: translateY(-4px); box-shadow: 0 26px 50px -28px rgba(2, 28, 54, 0.5); }
    .rm .rm-proof__icon {
      width: 56px;
      height: 56px;
      margin: 0 auto 18px;
      border-radius: 16px;
      background: var(--rm-darkband);
      display: grid;
      place-items: center;
      box-shadow: inset 0 0 0 1px rgba(234, 194, 90, 0.35);
    }
    .rm .rm-proof__icon svg {
      width: 26px;
      height: 26px;
      stroke: var(--rm-brass-bright);
      stroke-width: 2;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
    .rm .rm-proof__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.375rem;
      letter-spacing: -0.015em;
      color: var(--rm-navy);
      margin: 0 0 8px;
    }
    .rm .rm-proof__text { margin: 0; font-size: 1.0625rem; line-height: 1.55; color: var(--rm-ink-dim); }

    @media (min-width: 760px) {
      .rm .rm-proof { grid-template-columns: repeat(3, 1fr); }
    }

    .rm .rm-formcard {
      position: relative;
      background: var(--surface-container-lowest);
      border-radius: var(--radius-2xl, 1rem);
      border: 1px solid rgba(201, 150, 28, 0.45);
      box-shadow:
        0 0 0 6px rgba(234, 194, 90, 0.12),
        0 40px 80px -30px rgba(2, 28, 54, 0.45),
        0 12px 24px -12px rgba(2, 28, 54, 0.2);
      overflow: hidden;
      scroll-margin-top: 120px;
    }
    /* Navy header bar — the card's heading sits on its own dark band. */
    .rm .rm-formcard__head {
      position: relative;
      background: var(--rm-darkband);
      color: #fff;
      text-align: center;
      padding: clamp(28px, 4vw, 44px) clamp(20px, 4vw, 48px) clamp(26px, 3.5vw, 38px);
      isolation: isolate;
    }
    .rm .rm-formcard__head::before {
      content: '';
      position: absolute;
      inset: 0 0 auto 0;
      height: 4px;
      background: var(--rm-grad);
    }
    .rm .rm-formcard__head::after {
      content: '';
      position: absolute;
      inset: auto 0 0 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(234, 194, 90, 0.6), transparent);
    }
    .rm .rm-formcard__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(1.75rem, 3.6vw, 2.75rem);
      line-height: 1.1;
      letter-spacing: -0.025em;
      color: #fff;
      margin: 0 0 10px;
    }
    .rm .rm-formcard__sub {
      margin: 0;
      font-size: clamp(1rem, 1.4vw, 1.125rem);
      color: rgba(255, 255, 255, 0.78);
    }
    .rm .rm-formcard__body { padding: clamp(16px, 3vw, 36px); }
    .rm .rm-formcard__iframe { width: 100%; min-height: 578px; border: 0; display: block; }

    /* ── 3 · FORM — full-width opt-in card ───────────────────────────────── */
    .rm .rm-form {
      position: relative;
      background:
        radial-gradient(ellipse 70% 55% at 50% 0%, rgba(234, 194, 90, 0.18), transparent 70%),
        linear-gradient(180deg, var(--surface-container-low) 0%, var(--surface-container) 100%);
      border-top: 1px solid var(--rm-line);
      padding-block: clamp(56px, 7vw, 96px);
    }

    /* ── 4 · TRUST — reuses shared .trust marquee; tighten label for this page */
    .rm .trust { background: var(--surface-container-lowest); }

    /* ── 5 · AUTHOR — Craig Strent ───────────────────────────────────────── */
    .rm .rm-author {
      position: relative;
      background: var(--rm-cream);
      padding-top: clamp(56px, 6vw, 88px);
      overflow: hidden;
      isolation: isolate;
    }
    .rm .rm-author::before {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-radial-gradient(ellipse at -10% 50%, transparent 0 30px, rgba(201, 150, 28, 0.07) 30px 31px);
      z-index: -1;
      pointer-events: none;
    }
    .rm .rm-author__grid {
      display: grid;
      gap: clamp(32px, 5vw, 72px);
      align-items: end;
    }
    .rm .rm-author__photo {
      display: flex;
      justify-content: center;
      order: 2;
    }
    .rm .rm-author__photo img {
      width: min(100%, 400px);
      height: auto;
      display: block;
    }
    .rm .rm-author__copy { order: 1; }
    .rm .rm-author__name {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2.5rem, 5vw, 3.75rem);
      line-height: 1;
      letter-spacing: -0.03em;
      color: var(--rm-navy);
      margin: 0 0 14px;
    }
    .rm .rm-author__role {
      font-family: var(--font-display);
      font-weight: 500;
      font-size: clamp(1.125rem, 1.8vw, 1.375rem);
      letter-spacing: 0.02em;
      text-transform: uppercase;
      color: var(--rm-navy);
      margin: 0 0 20px;
    }
    .rm .rm-author__bio {
      font-size: 1.125rem;
      line-height: 1.7;
      color: var(--rm-ink-dim);
      margin: 0 0 32px;
      max-width: 58ch;
    }

    @media (min-width: 900px) {
      .rm .rm-author__grid { grid-template-columns: 0.85fr 1.15fr; }
      .rm .rm-author__photo { order: 0; }
      .rm .rm-author__copy { padding-bottom: clamp(56px, 6vw, 88px); }
    }

    /* ── 6 · CLOSE — dark band ───────────────────────────────────────────── */
    .rm .rm-close {
      background: var(--rm-darkband);
      color: #fff;
      padding-block: clamp(64px, 8vw, 112px);
      text-align: center;
    }
    .rm .rm-close__inner { max-width: 760px; margin-inline: auto; }
    .rm .rm-close__title {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: clamp(2rem, 4vw, 3rem);
      line-height: 1.1;
      letter-spacing: -0.025em;
      margin: 0 0 14px;
      color: #fff;
    }
    .rm .rm-close__sub {
      font-family: var(--font-display);
      font-weight: 600;
      font-size: 1.1875rem;
      color: rgba(255, 255, 255, 0.82);
      margin: 0 0 36px;
    }
    .rm .rm-close .rm-checks {
      text-align: left;
      max-width: 560px;
      margin: 0 auto 44px;
    }
    .rm .rm-close .rm-checks li { color: rgba(255, 255, 255, 0.86); }

    /* Scroll reveal --------------------------------------------------------- */
    .rm [data-rm-reveal] {
      opacity: 0;
      transform: translateY(22px);
      transition: opacity 700ms cubic-bezier(0.22, 1, 0.36, 1), transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
    }
    .rm [data-rm-reveal].is-in { opacity: 1; transform: none; }

    /* ── Reduced motion ────────────────────────────────────────────────────── */
    @media (prefers-reduced-motion: reduce) {
      .rm .rm-hero__tablet { animation: none; }
      .rm [data-rm-reveal] { opacity: 1; transform: none; transition: none; }
      .rm .rm-cta, .rm .rm-cta svg, .rm .rm-proof__card { transition: none; }
      .rm .rm-proof__card:hover { transform: none; }
    }
  </style>


<?php include get_stylesheet_directory() . '/tla/partials/header.php'; ?>

  <main class="site-main rm">

    <!-- ──────────── 1 · HERO — tablet left, headline right ──────────── -->
    <section class="rm-hero" aria-labelledby="rm-hero-heading">
      <div class="rm-wrap rm-hero__grid">
        <div class="rm-hero__media" data-rm-reveal>
          <img class="rm-hero__tablet" src="<?php echo TLA_BASE; ?>/assets/refi-masterplan-tablet.webp"
            alt="The Refinance Masterplan by Craig Strent, shown on a tablet" width="1080" height="1080" />
          <a class="rm-cta" href="#get-the-masterplan" data-scroll-to-form>
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
            Get Your 5-Step Guide Now!
          </a>
        </div>

        <div class="rm-hero__copy" data-rm-reveal>
          <p class="rm-hero__kicker">Is your business ready for a refi boom?</p>
          <h1 id="rm-hero-heading" class="rm-hero__title">
            Unlock your <span class="rm-grad">5-Step Refinance Masterplan</span>
          </h1>
          <p class="rm-hero__sub">
            Your 5-Step Plan to Organize, Capitalize, and Close More Loans in the Next 60&nbsp;Days
          </p>
        </div>
      </div>

    </section>

    <!-- ──────────── 2 · PITCH — centered heading, three benefit cards ──────────── -->
    <section class="rm-optin" aria-labelledby="rm-optin-heading">
      <div class="rm-wrap">
        <div class="rm-optin__head" data-rm-reveal>
          <h2 id="rm-optin-heading" class="rm-optin__title">Will You Be Ready When Mortgage Rates Drop?</h2>
        </div>
        <ul class="rm-proof">
          <li class="rm-proof__card" data-rm-reveal>
            <span class="rm-proof__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><polyline points="9 12 11 14 15 10" /></svg></span>
            <h3 class="rm-proof__title">Feel Confident</h3>
            <p class="rm-proof__text">Because you know exactly what to do next.</p>
          </li>
          <li class="rm-proof__card" data-rm-reveal>
            <span class="rm-proof__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><ellipse cx="12" cy="5" rx="8" ry="3" /><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5" /><path d="M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6" /></svg></span>
            <h3 class="rm-proof__title">Gain Clarity</h3>
            <p class="rm-proof__text">On how to sort your database.</p>
          </li>
          <li class="rm-proof__card" data-rm-reveal>
            <span class="rm-proof__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" /><polyline points="17 6 23 6 23 12" /></svg></span>
            <h3 class="rm-proof__title">Capitalize</h3>
            <p class="rm-proof__text">On the opportunities in front of you.</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- ──────────── 3 · FORM — full-width opt-in ──────────── -->
    <section class="rm-form" aria-label="Get the Refinance Masterplan">
      <div class="rm-wrap">
        <!-- Opt-in form. LeadConnector form "LM: Refi Masterplan Craig Strent".
             GHL's copy-paste embed was the STICKY_SIDEBAR layout (floating tab);
             converted to INLINE here so it renders inside the card. Post-submit
             behavior (redirect / thank-you / PDF delivery) is configured in GHL. -->
        <div class="rm-formcard" id="get-the-masterplan" data-rm-reveal>
          <div class="rm-formcard__head">
            <h2 class="rm-formcard__title">Get the <span class="rm-grad">Refinance Masterplan</span></h2>
            <p class="rm-formcard__sub">Free instant access. Tell us where to send it.</p>
          </div>
          <div class="rm-formcard__body">
          <iframe
            src="https://api.leadconnectorhq.com/widget/form/N2a91EMWucCe2cAnD7or"
            class="rm-formcard__iframe"
            title="LM: Refi Masterplan Craig Strent"
            scrolling="no"
            id="inline-N2a91EMWucCe2cAnD7or"
            data-layout="{'id':'INLINE'}"
            data-trigger-type="alwaysShow"
            data-trigger-value=""
            data-activation-type="alwaysActivated"
            data-activation-value=""
            data-deactivation-type="neverDeactivate"
            data-deactivation-value=""
            data-form-name="LM: Refi Masterplan Craig Strent"
            data-height="578"
            data-layout-iframe-id="inline-N2a91EMWucCe2cAnD7or"
            data-form-id="N2a91EMWucCe2cAnD7or"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- ──────────── 4 · TRUST — same lender logos as the homepage ──────────── -->
    <section class="trust" aria-label="Trusted by loan officers at these companies">
      <div class="container">
        <p class="trust__label" data-reveal="fade">Trusted by loan officers from</p>
      </div>
      <div class="trust__marquee">
        <div class="trust__track">
          <ul class="trust__group">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt="UWM"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt="CMG Financial"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt="CrossCountry Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt="Guaranteed Rate"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt="Fairway Independent Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt="loanDepot"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt="Better"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt="American Pacific Mortgage"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt="ACM"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt="Lower"></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt="SWBC Mortgage"></li>
          </ul>
          <ul class="trust__group" aria-hidden="true">
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/UWM-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/CMG-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/cross-country-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/rate-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/fairway-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/loan-depot-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/better-logo.png" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/american-pacific-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/acm-logo.webp" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/lower-mortgage-logo.svg" alt=""></li>
            <li class="trust__logo"><img src="<?php echo TLA_BASE; ?>/assets/swbc-logo.png" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ──────────── 5 · AUTHOR — Craig Strent ──────────── -->
    <section class="rm-author" aria-labelledby="rm-author-heading">
      <div class="rm-wrap rm-author__grid">
        <div class="rm-author__photo" data-rm-reveal>
          <img src="<?php echo TLA_BASE; ?>/assets/craig-strent-headshot.png" alt="Craig Strent" width="475" height="600" loading="lazy" />
        </div>
        <div class="rm-author__copy" data-rm-reveal>
          <h2 id="rm-author-heading" class="rm-author__name">Craig Strent</h2>
          <p class="rm-author__role">Head of Faculty &nbsp;|&nbsp; The Loan Atlas</p>
          <p class="rm-author__bio">
            With 25 years of experience as a dynamic and influential leader in the mortgage industry, Craig Strent is
            passionate about networking, business development, and mentoring the next generation of mortgage
            professionals looking to make their mark in the industry and become the influential leaders and industry
            giants they are destined to be.
          </p>
          <a class="rm-cta" href="#get-the-masterplan" data-scroll-to-form>
            Get the Refinance Masterplan
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ──────────── 6 · CLOSE — final CTA ──────────── -->
    <section class="rm-close" aria-labelledby="rm-close-heading">
      <div class="rm-wrap">
        <div class="rm-close__inner" data-rm-reveal>
          <p class="rm-eyebrow rm-eyebrow--ondark">Get Your Refinance Masterplan</p>
          <h2 id="rm-close-heading" class="rm-close__title">Don&rsquo;t Miss This Opportunity <span class="rm-grad">To Take Control</span></h2>
          <p class="rm-close__sub">With the Refinance Masterplan, you&rsquo;ll have everything you need to:</p>
          <ul class="rm-checks">
            <li><span class="rm-checks__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg></span>
              <span>Organize your business and maximize efficiency.</span></li>
            <li><span class="rm-checks__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg></span>
              <span>Target the right opportunities at the right time.</span></li>
            <li><span class="rm-checks__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12" /></svg></span>
              <span>Close more deals and build lasting client relationships.</span></li>
          </ul>
          <a class="rm-cta" href="#get-the-masterplan" data-scroll-to-form>
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
            Download the Free Masterplan Now
          </a>
        </div>
      </div>
    </section>

  </main>

<?php include get_stylesheet_directory() . '/tla/partials/footer.php'; ?>

  <!-- LeadConnector form embed runtime (resizes the iframe form) -->
  <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>

  <!-- Page behavior: smooth-scroll CTAs to the form, scroll-reveal. Reduced-motion aware. -->
  <script>
    (function () {
      var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      document.querySelectorAll('[data-scroll-to-form]').forEach(function (el) {
        el.addEventListener('click', function (e) {
          var target = document.getElementById('get-the-masterplan');
          if (!target) return;
          e.preventDefault();
          target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
        });
      });

      var revealEls = document.querySelectorAll('[data-rm-reveal]');
      if (reduce || !('IntersectionObserver' in window)) {
        revealEls.forEach(function (el) { el.classList.add('is-in'); });
      } else {
        var revObs = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) { entry.target.classList.add('is-in'); revObs.unobserve(entry.target); }
          });
        }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
        revealEls.forEach(function (el) { revObs.observe(el); });
      }
    })();
  </script>
