/**
 * Front-end behaviour for the Happy Miles design.
 * Everything here is progressive enhancement: with JS disabled (or reduced motion) the pages are fully visible.
 */

const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* ------------------------------------------------------------------ */
/* Scroll reveal                                                       */
/* ------------------------------------------------------------------ */
function markRevealTargets() {
    const used = new Set();
    const mark = (el, delay = 0, kind = '') => {
        if (!el || used.has(el)) return;
        // never animate something that lives inside an already-animated element
        for (let p = el.parentElement; p; p = p.parentElement) if (used.has(p)) return;
        used.add(el);
        el.classList.add('reveal');
        if (kind) el.dataset.reveal = kind;
        if (delay) el.style.setProperty('--reveal-delay', `${delay}ms`);
    };

    document.querySelectorAll('main section, main > div > div').forEach((section) => {
        // grids and flex card rows -> staggered children
        section.querySelectorAll('.grid').forEach((grid) => {
            if (grid.closest('header, nav, form, table, [class*="hidden"] .grid')) return;
            [...grid.children].forEach((child, i) => mark(child, Math.min(i, 7) * 90, 'up'));
        });
        // headings and intro copy
        section.querySelectorAll('h1, h2, h3, h4').forEach((h) => {
            if (h.closest('.grid > *, form, table')) return;
            mark(h.parentElement && h.parentElement.children.length <= 6 ? h.parentElement : h);
        });
        // wide cards: call-to-action bands, tables, forms, details
        section.querySelectorAll('form, table, details, .rounded-2xl').forEach((el) => mark(el));
    });
}

function setupReveal() {
    const targets = document.querySelectorAll('.reveal');
    if (!targets.length) return;
    if (!('IntersectionObserver' in window) || reduceMotion) {
        targets.forEach((t) => t.classList.add('is-visible'));
        return;
    }
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -6% 0px' },
    );
    targets.forEach((t) => io.observe(t));
}

/* ------------------------------------------------------------------ */
/* Count-up for stat numbers ("42+", "100%", "4.9")                     */
/* ------------------------------------------------------------------ */
function setupCounters() {
    if (reduceMotion || !('IntersectionObserver' in window)) return;
    const pattern = /^(\d[\d,]*)(\.\d+)?(\+|%)?$/;
    const nodes = [...document.querySelectorAll('main *')].filter(
        (el) => el.children.length === 0 && pattern.test(el.textContent.trim()) && el.textContent.trim().length <= 7,
    );
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                io.unobserve(entry.target);
                const el = entry.target;
                const [, whole, dec = '', suffix = ''] = el.textContent.trim().match(pattern);
                const end = parseFloat(whole.replace(/,/g, '') + dec);
                const decimals = dec ? dec.length - 1 : 0;
                const start = performance.now();
                const duration = 1400;
                const tick = (now) => {
                    const t = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - t, 3);
                    const value = end * eased;
                    el.textContent = (whole.includes(',') ? Math.round(value).toLocaleString('en-IN') : value.toFixed(decimals)) + suffix;
                    if (t < 1) requestAnimationFrame(tick);
                    else el.textContent = whole + dec + suffix;
                };
                requestAnimationFrame(tick);
            });
        },
        { threshold: 0.6 },
    );
    nodes.forEach((n) => io.observe(n));
}

/* ------------------------------------------------------------------ */
/* Header: shadow on scroll + mobile menu                              */
/* ------------------------------------------------------------------ */
function setupHeader() {
    const header = document.querySelector('header.fixed');
    if (!header) return;

    const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // The mock-ups only define a desktop nav; add a hamburger + drawer for small screens.
    const nav = header.querySelector('nav.hidden');
    if (!nav) return;
    const bar = nav.parentElement;
    const toggle = document.createElement('button');
    toggle.type = 'button';
    toggle.className = 'hm-mobile-toggle items-center justify-center w-10 h-10 rounded-lg text-primary hover:bg-surface-container transition-colors ml-auto';
    toggle.setAttribute('aria-label', 'Open menu');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.innerHTML = '<span class="material-symbols-outlined text-[28px]">menu</span>';
    bar.appendChild(toggle);

    const panel = document.createElement('nav');
    panel.className = 'hm-mobile-nav bg-surface-container-lowest shadow-lg px-margin-mobile pb-space-md';
    panel.setAttribute('aria-label', 'Mobile');
    panel.innerHTML = [...nav.querySelectorAll('a')]
        .map((a) => `<a href="${a.getAttribute('href')}" class="block py-3 border-b border-outline-variant/40 font-label-lg text-label-lg ${a.getAttribute('aria-current') ? 'text-primary font-bold' : 'text-on-surface-variant'}">${a.textContent.trim()}</a>`)
        .join('');
    header.appendChild(panel);

    toggle.addEventListener('click', () => {
        const open = panel.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        toggle.querySelector('span').textContent = open ? 'close' : 'menu';
    });
}

/* ------------------------------------------------------------------ */
/* Hero background slow zoom                                           */
/* ------------------------------------------------------------------ */
function setupHero() {
    if (reduceMotion) return;
    const hero = document.querySelector('main section');
    if (!hero) return;
    const bg = hero.querySelector('[style*="background-image"], img.object-cover');
    if (bg) bg.classList.add('kenburns');
}

/* ------------------------------------------------------------------ */
/* In-page anchor links                                                */
/* ------------------------------------------------------------------ */
function setupAnchors() {
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        const id = link.getAttribute('href');
        if (id.length < 2) return;
        link.addEventListener('click', (e) => {
            const target = document.querySelector(id);
            if (!target) return;
            e.preventDefault();
            const y = target.getBoundingClientRect().top + window.scrollY - 130;
            window.scrollTo({ top: y, behavior: reduceMotion ? 'auto' : 'smooth' });
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    markRevealTargets();
    setupReveal();
    setupCounters();
    setupHeader();
    setupHero();
    setupAnchors();
});
