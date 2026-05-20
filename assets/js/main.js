/* It's A Wonderful Life Weddings — interaction layer */
(function () {
  'use strict';

  // 1) Sticky-header shadow + cream background after scroll
  const header = document.querySelector('.site-header');
  const onScroll = () => {
    if (!header) return;
    if (window.scrollY > 50) header.classList.add('is-scrolled');
    else header.classList.remove('is-scrolled');
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // 2) Desktop dropdowns (click + hover; hover state is CSS-only, JS handles click + a11y)
  const navItems = document.querySelectorAll('.nav-links > li.has-submenu');
  const setExpanded = (li, open) => {
    li.classList.toggle('is-open', open);
    const trigger = li.querySelector(':scope > .nav-toggle');
    if (trigger) trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
  };
  navItems.forEach((li) => {
    const trigger = li.querySelector(':scope > .nav-toggle');
    if (!trigger) return;
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const willOpen = !li.classList.contains('is-open');
      navItems.forEach((other) => { if (other !== li) setExpanded(other, false); });
      setExpanded(li, willOpen);
    });
    // Keep aria in sync with hover: open on mouseenter, close on mouseleave
    li.addEventListener('mouseenter', () => trigger.setAttribute('aria-expanded', 'true'));
    li.addEventListener('mouseleave', () => {
      if (!li.classList.contains('is-open')) trigger.setAttribute('aria-expanded', 'false');
    });
  });
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-links')) {
      navItems.forEach((li) => setExpanded(li, false));
    }
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      navItems.forEach((li) => setExpanded(li, false));
      closeMobile();
    }
  });

  // 3) Mobile nav
  const burger = document.querySelector('.nav-burger');
  const mobile = document.querySelector('.mobile-nav');
  const closeBtn = document.querySelector('.mobile-nav-close');
  const openMobile = () => {
    if (!mobile) return;
    mobile.classList.add('is-open');
    mobile.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (burger) burger.setAttribute('aria-expanded', 'true');
    if (closeBtn) closeBtn.focus();
  };
  const closeMobile = () => {
    if (!mobile) return;
    mobile.classList.remove('is-open');
    mobile.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    if (burger) {
      burger.setAttribute('aria-expanded', 'false');
      burger.focus();
    }
  };
  if (burger) burger.addEventListener('click', openMobile);
  if (closeBtn) closeBtn.addEventListener('click', closeMobile);
  document.querySelectorAll('.mobile-nav-group > button').forEach((btn) => {
    btn.addEventListener('click', () => {
      const open = btn.parentElement.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
  document.querySelectorAll('.mobile-nav a').forEach((a) => a.addEventListener('click', closeMobile));

  // 4) Reveal-on-scroll with eager first-pass for above-the-fold items
  const revealAll = (els) => els.forEach((el) => el.classList.add('is-revealed'));
  const reveals = Array.from(document.querySelectorAll('[data-reveal]'));
  // Eager pass: anything within ~1.4× viewport reveals immediately so headless
  // renderers + slow JS environments still show content on first paint.
  const eagerLimit = window.innerHeight * 1.4;
  reveals.forEach((el) => {
    if (el.getBoundingClientRect().top < eagerLimit) el.classList.add('is-revealed');
  });
  // Observer handles below-the-fold reveals on scroll.
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            io.unobserve(entry.target);
          }
        });
      },
      { rootMargin: '0px 0px -80px 0px', threshold: 0.06 }
    );
    reveals.forEach((el) => {
      if (!el.classList.contains('is-revealed')) io.observe(el);
    });
  } else {
    revealAll(reveals);
  }
  // Safety net: anything still hidden after 1.5s gets revealed.
  setTimeout(() => revealAll(reveals), 1500);

  // 5) Anchor links: smooth scroll respecting fixed header
  document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach((a) => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href').slice(1);
      const target = document.getElementById(id) || document.querySelector(`[name="${id}"]`);
      if (!target) return;
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.pageYOffset - 90;
      window.scrollTo({ top, behavior: 'smooth' });
      history.replaceState(null, '', `#${id}`);
    });
  });

  // 6) Auto-close summary peers (one FAQ open at a time on a page)
  document.querySelectorAll('.faq-list').forEach((list) => {
    list.addEventListener('toggle', (e) => {
      const target = e.target;
      if (!(target instanceof HTMLDetailsElement)) return;
      if (!target.open) return;
      list.querySelectorAll('details.faq[open]').forEach((d) => { if (d !== target) d.open = false; });
    }, true);
  });

  // 7) Current year for footer (no inline scripts)
  const yearEl = document.getElementById('current-year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();
})();
