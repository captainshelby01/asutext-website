/* ============================================================
   ASUTEXT GROUP NIGERIA LIMITED — main.js (v2 Premium)
   ============================================================ */

// ─── Mobile menu toggle ───────────────────────────────────────
const menuBtn    = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (menuBtn && mobileMenu) {
  menuBtn.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('open');
    menuBtn.classList.toggle('open', isOpen);
    menuBtn.setAttribute('aria-expanded', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      menuBtn.classList.remove('open');
      menuBtn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    });
  });
}

// ─── Sticky navbar shadow + active link ───────────────────────
const navbar = document.getElementById('navbar');
const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
  if (navbar) {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  }

  // Active nav link on scroll
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop - 100;
    if (window.scrollY >= sectionTop) current = section.getAttribute('id');
  });
  navLinks.forEach(link => {
    link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
  });
}, { passive: true });

// ─── Scroll-reveal (IntersectionObserver) ─────────────────────
const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

if (revealEls.length > 0) {
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  revealEls.forEach(el => revealObserver.observe(el));
}

// ─── Animated counter (count-up) ──────────────────────────────
function animateCount(el) {
  const target = parseInt(el.dataset.target, 10);
  const duration = 1800;
  const start = performance.now();

  function update(timestamp) {
    const progress = Math.min((timestamp - start) / duration, 1);
    const ease = 1 - Math.pow(1 - progress, 3); // ease-out cubic
    el.textContent = Math.floor(ease * target).toLocaleString();
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

const counters = document.querySelectorAll('.count-up');
if (counters.length > 0) {
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.animated) {
        entry.target.dataset.animated = '1';
        animateCount(entry.target);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(c => counterObserver.observe(c));
}

// ─── FAQ accordion ────────────────────────────────────────────
document.querySelectorAll('.faq-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const answer  = btn.nextElementSibling;
    const isOpen  = answer.classList.contains('open');

    // Close all
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
    document.querySelectorAll('.faq-btn').forEach(b => b.classList.remove('active'));

    // Open clicked if it was closed
    if (!isOpen) {
      answer.classList.add('open');
      btn.classList.add('active');
    }
  });
});

// ─── Interactive Portfolio Section ─────────────────────────────
const portfolioCards = document.querySelectorAll('.portfolio-card');
const portfolioPanels = document.querySelectorAll('.portfolio-panel');

portfolioCards.forEach(card => {
  card.addEventListener('click', () => {
    const targetPanelId = `panel-${card.dataset.panel}`;
    const targetPanel = document.getElementById(targetPanelId);
    const isActive = card.classList.contains('active');

    // Deactivate all cards and close all panels first
    portfolioCards.forEach(c => c.classList.remove('active'));
    portfolioPanels.forEach(p => {
      if (p.classList.contains('open')) {
        p.style.maxHeight = p.scrollHeight + 'px';
        p.offsetHeight; // force reflow
        p.style.maxHeight = '0px';
        p.classList.remove('open');
      } else {
        p.classList.remove('open');
        p.style.maxHeight = '0px';
      }
    });

    // If it wasn't active, activate the clicked card and open its panel
    if (!isActive && targetPanel) {
      card.classList.add('active');
      targetPanel.classList.add('open');
      targetPanel.style.maxHeight = targetPanel.scrollHeight + 'px';

      // After dynamic expand transition completes, remove max-height limit so masonry grid images aren't cropped
      const handleTransitionEnd = (e) => {
        if (e.propertyName === 'max-height' && targetPanel.classList.contains('open')) {
          targetPanel.style.maxHeight = 'none';
        }
      };
      targetPanel.addEventListener('transitionend', handleTransitionEnd, { once: true });

      // Smooth scroll to the panel header so it is visible
      setTimeout(() => {
        const offset = 80; // navbar height offset
        const bodyRect = document.body.getBoundingClientRect().top;
        const panelRect = targetPanel.getBoundingClientRect().top;
        const panelPosition = panelRect - bodyRect;
        const offsetPosition = panelPosition - offset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }, 300);
    }
  });
});

// Recalculate max-height on window resize if any panel is open
window.addEventListener('resize', () => {
  const activePanel = document.querySelector('.portfolio-panel.open');
  if (activePanel) {
    activePanel.style.maxHeight = activePanel.scrollHeight + 'px';
    setTimeout(() => {
      if (activePanel.classList.contains('open')) {
        activePanel.style.maxHeight = 'none';
      }
    }, 400);
  }
});


// Lightbox Modal Functionality
const lightbox = document.getElementById('portfolio-lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxVideo = document.getElementById('lightbox-video');
const lightboxClose = document.getElementById('lightbox-close');

const galleryImages = document.querySelectorAll('.portfolio-gallery-item img');
const galleryVideos = document.querySelectorAll('.portfolio-gallery-item video');

if (lightbox) {
  const openLightbox = (src, isVideo, alt = '') => {
    if (isVideo) {
      if (lightboxImg) lightboxImg.classList.add('hidden');
      if (lightboxVideo) {
        lightboxVideo.src = src;
        lightboxVideo.classList.remove('hidden');
        lightboxVideo.play();
      }
    } else {
      if (lightboxVideo) {
        lightboxVideo.classList.add('hidden');
        lightboxVideo.src = '';
        lightboxVideo.pause();
      }
      if (lightboxImg) {
        lightboxImg.src = src;
        lightboxImg.alt = alt;
        lightboxImg.classList.remove('hidden');
      }
    }
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden'; // Lock background scroll
  };

  galleryImages.forEach(img => {
    img.addEventListener('click', (e) => {
      e.stopPropagation();
      openLightbox(img.src, false, img.alt);
    });
  });

  galleryVideos.forEach(vid => {
    vid.addEventListener('click', (e) => {
      e.stopPropagation();
      openLightbox(vid.src, true);
    });
  });

  const closeLightbox = () => {
    lightbox.classList.remove('open');
    if (lightboxImg) {
      lightboxImg.src = '';
      lightboxImg.classList.add('hidden');
    }
    if (lightboxVideo) {
      lightboxVideo.pause();
      lightboxVideo.src = '';
      lightboxVideo.classList.add('hidden');
    }
    // Restore scroll lock only if mobile menu isn't also open
    const mobileMenuOpen = document.getElementById('mobile-menu')?.classList.contains('open');
    if (!mobileMenuOpen) {
      document.body.style.overflow = '';
    }
  };

  if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
  }

  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox || e.target.closest('.portfolio-lightbox-content') === null) {
      closeLightbox();
    }
  });

  // Close on Escape key press
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox.classList.contains('open')) {
      closeLightbox();
    }
  });
}


// ─── Scroll-to-top button ──────────────────────────────────────
const scrollTopBtn = document.getElementById('scroll-top');
if (scrollTopBtn) {
  window.addEventListener('scroll', () => {
    scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });

  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}