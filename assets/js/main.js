// ===== HERO SLIDER =====
(function() {
  var slides = document.querySelectorAll('.slide');
  var dots = document.querySelectorAll('.dot');
  var current = 0;
  var timer;

  function showSlide(n) {
    slides.forEach(function(s) { s.classList.remove('active'); });
    dots.forEach(function(d) { d.classList.remove('active'); });
    current = (n + slides.length) % slides.length;
    if (slides[current]) slides[current].classList.add('active');
    if (dots[current]) dots[current].classList.add('active');
  }

  function next() { showSlide(current + 1); }
  function prev() { showSlide(current - 1); }

  function startAuto() {
    clearInterval(timer);
    timer = setInterval(next, 5000);
  }

  var nextBtn = document.querySelector('.slider-next');
  var prevBtn = document.querySelector('.slider-prev');
  if (nextBtn) nextBtn.addEventListener('click', function() { next(); startAuto(); });
  if (prevBtn) prevBtn.addEventListener('click', function() { prev(); startAuto(); });

  dots.forEach(function(d, i) {
    d.addEventListener('click', function() { showSlide(i); startAuto(); });
  });

  if (slides.length > 0) { showSlide(0); startAuto(); }
})();

// ===== MOBILE NAV =====
(function() {
  var toggle = document.querySelector('.mobile-toggle');
  var nav = document.querySelector('.main-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function() {
      nav.classList.toggle('open');
    });
  }
})();

// ===== STICKY HEADER SHADOW =====
(function() {
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.style.boxShadow = '0 4px 30px rgba(0,0,0,0.15)';
      } else {
        header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
      }
    });
  }
})();

// ===== ACCORDION =====
(function() {
  var headers = document.querySelectorAll('.accordion-header');
  headers.forEach(function(header) {
    header.addEventListener('click', function() {
      var body = this.nextElementSibling;
      var isOpen = body.classList.contains('open');
      // Close all
      document.querySelectorAll('.accordion-header').forEach(function(h) {
        h.classList.remove('active');
        if (h.nextElementSibling) h.nextElementSibling.classList.remove('open');
      });
      if (!isOpen) {
        this.classList.add('active');
        body.classList.add('open');
      }
    });
  });
})();

// ===== COUNTER ANIMATION =====
(function() {
  function animateCounter(el) {
    var target = parseInt(el.getAttribute('data-target'));
    var start = 0;
    var duration = 2000;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      el.textContent = Math.floor(progress * target);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }
    requestAnimationFrame(step);
  }

  var counters = document.querySelectorAll('[data-target]');
  if (counters.length === 0) return;

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(function(c) { observer.observe(c); });
})();

// ===== PROGRESS BAR ANIMATION =====
(function() {
  var fills = document.querySelectorAll('.progress-fill');
  if (fills.length === 0) return;

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var width = entry.target.getAttribute('data-width');
        entry.target.style.width = width + '%';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  fills.forEach(function(f) {
    f.style.width = '0';
    observer.observe(f);
  });
})();

// ===== SCROLL REVEAL =====
(function() {
  var reveals = document.querySelectorAll('.reveal');
  if (reveals.length === 0) return;

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  reveals.forEach(function(r) { observer.observe(r); });
})();

// ===== GALLERY LIGHTBOX =====
(function() {
  var items = document.querySelectorAll('.gallery-item');
  if (items.length === 0) return;

  // Create overlay
  var overlay = document.createElement('div');
  overlay.style.cssText = 'display:none;position:fixed;inset:0;background:rgba(0,0,0,0.9);z-index:9999;align-items:center;justify-content:center;';
  var img = document.createElement('img');
  img.style.cssText = 'max-width:90%;max-height:90vh;border-radius:8px;box-shadow:0 0 50px rgba(0,0,0,0.5);';
  var close = document.createElement('span');
  close.innerHTML = '&times;';
  close.style.cssText = 'position:absolute;top:20px;right:30px;color:#fff;font-size:40px;cursor:pointer;line-height:1;';
  overlay.appendChild(close);
  overlay.appendChild(img);
  document.body.appendChild(overlay);

  items.forEach(function(item) {
    item.addEventListener('click', function() {
      var src = this.querySelector('img').src;
      img.src = src;
      overlay.style.display = 'flex';
    });
  });

  close.addEventListener('click', function() { overlay.style.display = 'none'; });
  overlay.addEventListener('click', function(e) { if (e.target === overlay) overlay.style.display = 'none'; });
})();

// ===== FORM SUBMISSION =====
(function() {
  var forms = document.querySelectorAll('form.contact-form-el');
  forms.forEach(function(form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var btn = this.querySelector('[type="submit"]');
      var orig = btn.textContent;
      btn.textContent = 'Sending...';
      btn.disabled = true;
      setTimeout(function() {
        btn.textContent = '✓ Message Sent!';
        btn.style.background = '#2c8c3c';
        setTimeout(function() {
          btn.textContent = orig;
          btn.disabled = false;
          btn.style.background = '';
          form.reset();
        }, 3000);
      }, 1500);
    });
  });
})();

// ===== AOS-like entrance animations =====
(function() {
  var style = document.createElement('style');
  style.textContent = '.reveal { opacity:0; transform:translateY(30px); transition: opacity 0.6s ease, transform 0.6s ease; } .reveal.revealed { opacity:1; transform:translateY(0); }';
  document.head.appendChild(style);
})();

// ===== SLIDER BTN IDs (PHP pages use #sliderNext / #sliderPrev) =====
(function() {
  var nextBtn = document.getElementById('sliderNext');
  var prevBtn = document.getElementById('sliderPrev');
  var slides  = document.querySelectorAll('.slide');
  var dots    = document.querySelectorAll('.dot');
  if (!nextBtn || slides.length === 0) return;
  var cur = 0, timer;
  function show(n) {
    slides.forEach(function(s){ s.classList.remove('active'); });
    dots.forEach(function(d){ d.classList.remove('active'); });
    cur = (n + slides.length) % slides.length;
    slides[cur].classList.add('active');
    if (dots[cur]) dots[cur].classList.add('active');
  }
  function startAuto(){ clearInterval(timer); timer = setInterval(function(){ show(cur+1); }, 5000); }
  nextBtn.addEventListener('click', function(){ show(cur+1); startAuto(); });
  prevBtn.addEventListener('click', function(){ show(cur-1); startAuto(); });
  dots.forEach(function(d,i){ d.addEventListener('click', function(){ show(i); startAuto(); }); });
  show(0); startAuto();
})();

// ===== GALLERY FILTERS (PHP gallery page) =====
(function() {
  var filterBtns = document.querySelectorAll('.filter-btn');
  var items = document.querySelectorAll('#galleryGrid .gallery-item');
  if (!filterBtns.length || !items.length) return;

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b){ b.classList.remove('active'); });
      this.classList.add('active');
      var filter = this.getAttribute('data-filter');
      items.forEach(function(item) {
        if (filter === 'all' || item.getAttribute('data-cat') === filter) {
          item.style.display = '';
          setTimeout(function(){ item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.8)';
          setTimeout(function(){ item.style.display = 'none'; }, 300);
        }
      });
    });
  });
})();

// ===== LIGHTBOX (gallery.php with #lightbox) =====
(function() {
  var lightbox    = document.getElementById('lightbox');
  var lbImg       = document.getElementById('lightboxImg');
  var lbCaption   = document.getElementById('lightboxCaption');
  var lbClose     = document.getElementById('lightboxClose');
  var lbPrev      = document.getElementById('lightboxPrev');
  var lbNext      = document.getElementById('lightboxNext');
  if (!lightbox) return;

  var links = document.querySelectorAll('.gallery-lightbox');
  var currentIndex = 0;

  function open(idx) {
    currentIndex = (idx + links.length) % links.length;
    lbImg.src = links[currentIndex].getAttribute('href');
    lbCaption.textContent = links[currentIndex].getAttribute('data-title') || '';
    lightbox.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
  function close() { lightbox.style.display = 'none'; document.body.style.overflow = ''; }

  links.forEach(function(link, i) {
    link.addEventListener('click', function(e) { e.preventDefault(); open(i); });
  });

  if (lbClose) lbClose.addEventListener('click', close);
  if (lbPrev) lbPrev.addEventListener('click', function(){ open(currentIndex - 1); });
  if (lbNext) lbNext.addEventListener('click', function(){ open(currentIndex + 1); });
  lightbox.addEventListener('click', function(e){ if(e.target === lightbox) close(); });
  document.addEventListener('keydown', function(e){
    if (!lightbox || lightbox.style.display === 'none') return;
    if (e.key === 'ArrowRight') open(currentIndex + 1);
    if (e.key === 'ArrowLeft') open(currentIndex - 1);
    if (e.key === 'Escape') close();
  });
})();

