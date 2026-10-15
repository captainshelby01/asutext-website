@php
  $isHome = request()->routeIs('home');
  $homePrefix = $isHome ? '' : route('home');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- ═══ SEO META TAGS ═══ -->
  <title>@yield('title', $globalSettings['seo_title'] ?? 'Asutext Group Nigeria Limited | Cleaning, Laundry, Fumigation & More')</title>
  <meta name="description" content="@yield('meta_description', $globalSettings['seo_description'] ?? 'Asutext Group Nigeria Limited, professional cleaning, fumigation, laundry, transport, catering, branding, fashion design and mobile accessories across Lagos Island, Banana Island, and Cross-River State.')" />
  <meta name="keywords" content="@yield('meta_keywords', $globalSettings['seo_keywords'] ?? 'cleaning services Lagos, fumigation Lagos, laundry Lagos, pest control Lagos, cleaning company Nigeria')" />
  <meta name="author" content="Asutext Group Nigeria Limited" />
  <link rel="canonical" href="{{ request()->url() }}" />

  <!-- ═══ OPEN GRAPH ═══ -->
  <meta property="og:title" content="@yield('title', $globalSettings['seo_title'] ?? 'Asutext Group Nigeria Limited')" />
  <meta property="og:description" content="@yield('meta_description', $globalSettings['seo_description'] ?? 'Professional services across Lagos and Nigeria.')" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="{{ asset('Images/logo-transparent.png') }}" />
  <meta property="og:locale" content="en_NG" />

  <!-- ═══ FONTS & ICONS ═══ -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- ═══ JSON-LD STRUCTURED DATA ═══ -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Asutext Group Nigeria Limited",
    "image": "{{ asset('Images/logo-transparent.png') }}",
    "@@id": "{{ route('home') }}",
    "url": "{{ route('home') }}",
    "telephone": "{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}",
    "email": "{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}",
    "priceRange": "$$",
    "address": [
      {
        "@@type": "PostalAddress",
        "streetAddress": "2nd Ave, 216 Close, Movamo Court, Banana Island",
        "addressLocality": "Ikoyi, Lagos",
        "addressRegion": "Lagos State",
        "addressCountry": "NG"
      },
      {
        "@@type": "PostalAddress",
        "streetAddress": "10 Federal Housing Road",
        "addressLocality": "Calabar",
        "addressRegion": "Cross-River State",
        "addressCountry": "NG"
      }
    ],
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": 6.4531,
      "longitude": 3.4331
    },
    "openingHoursSpecification": {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
      ],
      "opens": "08:00",
      "closes": "20:00"
    },
    "sameAs": [
      "{{ $globalSettings['facebook_url'] ?? 'https://www.facebook.com/asutext' }}",
      "{{ $globalSettings['youtube_url'] ?? 'https://www.youtube.com/@@asutext' }}",
      "{{ $globalSettings['twitter_url'] ?? 'https://twitter.com/asutext' }}"
    ]
  }
  </script>

  <!-- Vite styles & scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body bg-white text-brand-dark antialiased">

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  NAVBAR                                                    -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <header id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between" style="height:72px;">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center flex-shrink-0" aria-label="Asutext Group Nigeria Limited - Home">
          <img
            src="/Images/logo-transparent.png"
            alt="Asutext Group Nigeria Limited Logo"
            class="h-10 sm:h-12 w-auto object-contain transition-all duration-300 hover:scale-105"
          />
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex items-center gap-7" aria-label="Main navigation">
          <a href="{{ route('home') }}"      class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
          <a href="{{ route('services') }}"  class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">Services</a>
          <a href="{{ route('products') }}"  class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
          <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Gallery</a>
          <a href="{{ route('about') }}"     class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
          <a href="{{ route('contact') }}"   class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <!-- Desktop Quote CTA -->
        <a
          href="{{ route('services') }}"
          onclick="if(document.getElementById('quote-form')) { document.getElementById('quote-form').scrollIntoView({behavior: 'smooth'}); return false; }"
          class="hidden lg:inline-flex btn-primary text-sm items-center gap-2"
          id="nav-cta-btn"
        >
          <span>Get a Quote</span>
          <i class="bi bi-arrow-right text-xs"></i>
        </a>

        <!-- Mobile Hamburger -->
        <button
          id="menu-btn"
          aria-label="Open navigation menu"
          aria-expanded="false"
          aria-controls="mobile-menu"
          class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red"
        >
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>

      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" role="navigation" aria-label="Mobile navigation">
      <div class="border-t border-gray-100 bg-white px-5 py-5 flex flex-col gap-3">
        <a href="{{ route('home') }}"      class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('services') }}"  class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('services*') ? 'active' : '' }}">Services</a>
        <a href="{{ route('products') }}"  class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
        <a href="{{ route('portfolio') }}" class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('portfolio') ? 'active' : '' }}">Gallery</a>
        <a href="{{ route('about') }}"     class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
        <a href="{{ route('contact') }}"   class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        <a
          href="{{ route('services') }}"
          onclick="if(document.getElementById('quote-form')) { document.getElementById('quote-form').scrollIntoView({behavior: 'smooth'}); const m = document.getElementById('mobile-menu'); if(m) m.classList.remove('open'); return false; }"
          class="btn-primary justify-center text-sm mt-2 items-center gap-2 flex"
        >
          <span>Get a Quote</span>
          <i class="bi bi-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </header>
  <div class="nav-spacer"></div>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CONTACT + FOOTER                                          -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <footer id="contact" class="bg-brand-dark py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20">

        <!-- Left: CTA + contact info -->
        <div class="reveal-left">
          <p class="section-label mb-4" style="color:#CC0000;">Get In Touch</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-white mb-4 leading-tight">
            Ready to Work<br/>With Us?
          </h2>
          <p class="text-gray-300 mb-8 max-w-md leading-relaxed text-base">
            Whether you need a one-off service or a long-term partnership, we are ready to help.
            Reach out on WhatsApp for the fastest response. Most enquiries answered within hours.
          </p>

          <!-- Primary WhatsApp CTA -->
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27d%20like%20to%20enquire%20about%20your%20services."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-whatsapp text-base mb-10 inline-flex items-center gap-2"
            id="footer-wa-btn"
          >
            <i class="bi bi-whatsapp text-lg"></i>
            <span>Chat with Us on WhatsApp</span>
          </a>

          <!-- Contact info items -->
          <div>
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-telephone-fill text-sm"></i>
              </div>
              <div>
                <p class="contact-info-label">WhatsApp / Phone</p>
                <p class="contact-info-value">{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-envelope-fill text-sm"></i>
              </div>
              <div>
                <p class="contact-info-label">Email</p>
                <a href="mailto:{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}" class="contact-info-value hover:text-brand-red transition-colors">{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}</a>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-geo-alt-fill text-sm"></i>
              </div>
              <div>
                <p class="contact-info-label">Lagos Office</p>
                <p class="contact-info-value">{{ $globalSettings['address_lagos'] ?? '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-geo-alt-fill text-sm"></i>
              </div>
              <div>
                <p class="contact-info-label">Cross-River Office</p>
                <p class="contact-info-value">{{ $globalSettings['address_calabar'] ?? '10 Federal Housing Road, Calabar, Cross-River State' }}</p>
              </div>
            </div>
          </div>

          <!-- Social links -->
          <div class="flex items-center gap-3 mt-8">
            <a href="{{ $globalSettings['facebook_url'] ?? 'https://www.facebook.com/asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on Facebook" class="social-link flex items-center justify-center">
              <i class="bi bi-facebook text-base"></i>
            </a>
            <a href="{{ $globalSettings['youtube_url'] ?? 'https://www.youtube.com/@@asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on YouTube" class="social-link flex items-center justify-center">
              <i class="bi bi-youtube text-base"></i>
            </a>
            <a href="{{ $globalSettings['twitter_url'] ?? 'https://twitter.com/asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on Twitter/X" class="social-link flex items-center justify-center">
              <i class="bi bi-twitter-x text-base"></i>
            </a>
          </div>
        </div>

        <!-- Right: NAP + quick links -->
        <div class="reveal-right">

          <!-- NAP Block -->
          <div class="nap-block mb-8">
            <p class="nap-label">Business Information</p>
            <p class="nap-name mb-3">Asutext Group Nigeria Limited</p>
            <div class="space-y-1.5">
              <p class="nap-detail">{{ $globalSettings['address_lagos'] ?? '2nd Avenue, 216 Close, Movamo Court, Banana Island, Lagos' }}</p>
              <p class="nap-detail">{{ $globalSettings['address_calabar'] ?? '10 Federal Housing Road, Calabar, Cross-River State' }}</p>
              <p class="nap-detail mt-2">Service Area: Nationwide, Nigeria</p>
              <p class="nap-detail">{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</p>
              <p class="nap-detail">{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}</p>
              <p class="nap-detail">RC No: Incorporated 14 September 2023 (CAMA 2020)</p>
            </div>
          </div>

          <!-- Quick service links -->
          <div class="bg-white/5 border border-white/08 rounded-2xl p-4 sm:p-5" style="border-color:rgba(255,255,255,0.08);">
            <p class="nap-label mb-3.5">Quick Service Links</p>
            <div class="grid grid-cols-1 min-[400px]:grid-cols-2 gap-2">
              <a href="{{ route('services') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Services Overview</span>
              </a>
              <a href="{{ route('services.cleaning') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Cleaning Division</span>
              </a>
              <a href="{{ route('services.transport') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Transport &amp; Logistics</span>
              </a>
              <a href="{{ route('services.fashion') }}" class="footer-link footer-link-blue flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Fashion &amp; Branding</span>
              </a>
              <a href="{{ route('services.fastfood') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Fast Food &amp; Catering</span>
              </a>
              <a href="{{ route('services.electronics') }}" class="footer-link footer-link-blue flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Gadgets &amp; Tech</span>
              </a>
              <a href="{{ route('products') }}" class="footer-link footer-link-blue flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Products Catalogue</span>
              </a>
              <a href="{{ route('portfolio') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Work Gallery</span>
              </a>
              <a href="{{ route('about') }}" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>About Company</span>
              </a>
              <a href="{{ route('about') }}#team" class="footer-link footer-link-blue flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Leadership Team</span>
              </a>
              <a href="{{ route('contact') }}#coverage" class="footer-link footer-link-red flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Coverage Areas</span>
              </a>
              <a href="{{ route('contact') }}" class="footer-link footer-link-blue flex items-center gap-2">
                <i class="bi bi-arrow-right text-xs"></i>
                <span>Contact Support</span>
              </a>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer bottom bar -->
      <div class="footer-bottom mt-16">
        <p class="footer-copy">© {{ date('Y') }} Asutext Group Nigeria Limited. All rights reserved.</p>

        <!-- Signature Divider -->
        <div class="flex items-center justify-center gap-3">
            <span class="w-8 h-px bg-slate-700"></span>
            <span class="text-xs uppercase tracking-widest text-slate-500">
                Crafted with precision
            </span>
            <span class="w-8 h-px bg-slate-700"></span>
        </div>

        <!-- ImpactDev Signature -->
        <p class="text-xs text-slate-500 tracking-wide">
            Website by
            <span class="font-serif text-slate-300 tracking-normal ml-1">
                ImpactDev
            </span>
        </p>
      </div>

    </div>
  </footer>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  FLOATING WHATSAPP BUTTON                                  -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <a
    href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20website%20and%20I%27d%20like%20to%20enquire%20about%20your%20services."
    target="_blank"
    rel="noopener noreferrer"
    class="fab-whatsapp inline-flex items-center gap-2"
    aria-label="Chat with us on WhatsApp"
  >
    <i class="bi bi-whatsapp text-lg"></i>
    <span>Chat with Us</span>
  </a>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  GLOBAL MEDIA LIGHTBOX MODAL                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <div class="portfolio-lightbox" id="global-lightbox" aria-hidden="true" role="dialog">
    <button class="portfolio-lightbox-close" id="global-lightbox-close" aria-label="Close modal preview">
      <i class="bi bi-x-lg text-lg"></i>
    </button>
    <div class="portfolio-lightbox-content">
      <img id="global-lightbox-img" src="" alt="Media Preview" class="hidden rounded-lg max-h-[85vh] max-w-[90vw] object-contain shadow-2xl" />
      <video id="global-lightbox-video" src="" controls autoplay class="hidden rounded-lg max-h-[85vh] max-w-[90vw] object-contain shadow-2xl"></video>
      <p id="global-lightbox-caption" class="text-white text-sm mt-3 text-center font-medium bg-black/60 px-4 py-2 rounded-full"></p>
    </div>
  </div>

</body>
</html>
