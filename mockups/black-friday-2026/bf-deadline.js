/* Black Friday 2026 — shared deadline + countdown logic for the mockups.
   Hooks (all optional):
     [data-bf-badge]      text → phase badge
     [data-bf-deadline]   text → deadline sentence
     [data-bf-count]      container with [data-u="d|h|m|s"] children
     [data-bf-short]      text → "5d 09h 54m 01s"
     [data-bf-cta]        <a> → falls back to /join/ after the offer ends
     [data-bf-dock]       sticky bar: shown after #bf-hero leaves view, hidden while #bf-final is visible
   Phases (midnight Pacific): main (≤ 11/30) → ext (12/1–12/4, extension not revealed earlier) → ended.
   QA: append ?now=2026-12-02T10:00:00-08:00 to preview any moment. */
(function () {
  var END_MAIN = Date.parse('2026-11-30T23:59:59-08:00');
  var END_EXT = Date.parse('2026-12-04T23:59:59-08:00');
  var offset = 0;
  var q = /[?&]now=([^&]+)/.exec(location.search);
  if (q) { var t0 = Date.parse(decodeURIComponent(q[1])); if (!isNaN(t0)) offset = t0 - Date.now(); }
  function now() { return Date.now() + offset; }

  var COPY = {
    main: { badge: 'Lowest Price of the Year', deadline: 'Ends Monday, November 30th at Midnight' },
    ext: { badge: 'Black Friday Pricing Extended', deadline: 'Extended Through Friday, December 4th at Midnight' },
    ended: { badge: 'Black Friday Pricing Has Ended', deadline: 'Black Friday Pricing Has Ended' }
  };
  function phase(t) { return t <= END_MAIN ? 'main' : (t <= END_EXT ? 'ext' : 'ended'); }
  function each(sel, fn) { Array.prototype.forEach.call(document.querySelectorAll(sel), fn); }
  function pad(n) { return (n < 10 ? '0' : '') + n; }

  var current = null;
  function apply(ph) {
    if (ph === current) return;
    current = ph;
    document.documentElement.setAttribute('data-bf-phase', ph);
    each('[data-bf-badge]', function (el) { el.textContent = COPY[ph].badge; });
    each('[data-bf-deadline]', function (el) { el.textContent = COPY[ph].deadline; });
    if (ph === 'ended') {
      each('[data-bf-cta]', function (a) { a.href = '/join/'; a.textContent = 'Join The Loan Atlas'; });
      each('[data-bf-count], [data-bf-short], [data-bf-dock]', function (el) { el.style.display = 'none'; });
    }
  }

  function tick() {
    var t = now(), ph = phase(t);
    apply(ph);
    if (ph === 'ended') return;
    var s = Math.floor(Math.max(0, (ph === 'main' ? END_MAIN : END_EXT) - t) / 1000);
    var p = { d: Math.floor(s / 86400), h: Math.floor(s % 86400 / 3600), m: Math.floor(s % 3600 / 60), s: s % 60 };
    each('[data-bf-count] [data-u]', function (el) {
      var u = el.getAttribute('data-u'), v = u === 'd' ? String(p.d) : pad(p[u]);
      if (el.textContent !== v) el.textContent = v;
    });
    var short = (p.d ? p.d + 'd ' : '') + pad(p.h) + 'h ' + pad(p.m) + 'm ' + pad(p.s) + 's';
    each('[data-bf-short]', function (el) { el.textContent = short; });
  }
  tick();
  setInterval(tick, 1000);

  var dock = document.querySelector('[data-bf-dock]');
  var hero = document.getElementById('bf-hero');
  var fin = document.getElementById('bf-final');
  if (dock && hero && 'IntersectionObserver' in window) {
    var heroOut = false, finalIn = false;
    var sync = function () {
      var on = heroOut && !finalIn && current !== 'ended';
      dock.classList.toggle('is-on', on);
      dock.setAttribute('aria-hidden', on ? 'false' : 'true');
      each('[data-bf-dock] a', function (a) { a.tabIndex = on ? 0 : -1; });
    };
    new IntersectionObserver(function (e) { heroOut = !e[0].isIntersecting; sync(); }).observe(hero);
    if (fin) new IntersectionObserver(function (e) { finalIn = e[0].isIntersecting; sync(); }).observe(fin);
  }
})();
