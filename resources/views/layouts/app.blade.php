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
  <meta property="og:image" content="{{ asset('Images/logo.jpeg') }}" />
  <meta property="og:locale" content="en_NG" />

  <!-- ═══ FONTS ═══ -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- ═══ JSON-LD STRUCTURED DATA ═══ -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Asutext Group Nigeria Limited",
    "image": "{{ asset('Images/logo.jpeg') }}",
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
            src="/Images/logo.jpeg"
            alt="Asutext Group Nigeria Limited Logo"
            class="h-12 w-auto object-contain mix-blend-multiply"
          />
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex items-center gap-8" aria-label="Main navigation">
          <a href="{{ route('home') }}"      class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
          <a href="{{ route('services') }}"  class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
          <a href="{{ route('products') }}"  class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
          <a href="{{ route('about') }}"     class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
          <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Gallery</a>
          <a href="{{ route('contact') }}"   class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <!-- Desktop WhatsApp CTA -->
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20website%20and%20I%27d%20like%20to%20enquire%20about%20your%20services."
          target="_blank"
          rel="noopener noreferrer"
          class="hidden lg:inline-flex btn-whatsapp text-sm"
          id="nav-wa-btn"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
          </svg>
          Chat with Us
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
        <a href="{{ route('services') }}"  class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        <a href="{{ route('products') }}"  class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
        <a href="{{ route('about') }}"     class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
        <a href="{{ route('portfolio') }}" class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('portfolio') ? 'active' : '' }}">Gallery</a>
        <a href="{{ route('contact') }}"   class="nav-link text-brand-dark py-1.5 text-base {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20website%20and%20I%27d%20like%20to%20enquire%20about%20your%20services."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp justify-center text-sm mt-2"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
          </svg>
          Chat with Us on WhatsApp
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
            class="btn-whatsapp text-base mb-10 inline-flex"
            id="footer-wa-btn"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
            Chat with Us on WhatsApp
          </a>

          <!-- Contact info items -->
          <div>
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div>
                <p class="contact-info-label">WhatsApp / Phone</p>
                <p class="contact-info-value">{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <p class="contact-info-label">Email</p>
                <a href="mailto:{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}" class="contact-info-value hover:text-brand-red transition-colors">{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}</a>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="contact-info-label">Lagos Office</p>
                <p class="contact-info-value">{{ $globalSettings['address_lagos'] ?? '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="contact-info-label">Cross-River Office</p>
                <p class="contact-info-value">{{ $globalSettings['address_calabar'] ?? '10 Federal Housing Road, Calabar, Cross-River State' }}</p>
              </div>
            </div>
          </div>

          <!-- Social links -->
          <div class="flex items-center gap-3 mt-8">
            <a href="{{ $globalSettings['facebook_url'] ?? 'https://www.facebook.com/asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on Facebook" class="social-link">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="{{ $globalSettings['youtube_url'] ?? 'https://www.youtube.com/@asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on YouTube" class="social-link">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/>
              </svg>
            </a>
            <a href="{{ $globalSettings['twitter_url'] ?? 'https://twitter.com/asutext' }}" target="_blank" rel="noopener noreferrer" aria-label="Asutext on Twitter/X" class="social-link">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
              </svg>
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
              <a href="{{ route('services') }}" class="footer-link footer-link-red">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>Services Overview</span>
              </a>
              <a href="{{ route('products') }}" class="footer-link footer-link-blue">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>Products Catalogue</span>
              </a>
              <a href="{{ route('portfolio') }}" class="footer-link footer-link-red">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>Work Gallery</span>
              </a>
              <a href="{{ route('about') }}" class="footer-link footer-link-red">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>About Company</span>
              </a>
              <a href="{{ route('about') }}#team" class="footer-link footer-link-blue">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>Leadership Team</span>
              </a>
              <a href="{{ route('contact') }}#coverage" class="footer-link footer-link-red">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <span>Coverage Areas</span>
              </a>
              <a href="{{ route('contact') }}" class="footer-link footer-link-blue">
                <svg class="footer-link-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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
    class="fab-whatsapp"
    aria-label="Chat with us on WhatsApp"
  >
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.346c1.652.981 3.275 1.498 4.887 1.499 5.463 0 9.907-4.448 9.91-9.913.002-2.648-1.018-5.137-2.872-6.993-1.855-1.856-4.323-2.879-6.974-2.88-5.466 0-9.91 4.448-9.913 9.914-.001 1.713.488 3.387 1.414 4.88L2.023 21.8l4.624-1.213zM17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
    </svg>
    Chat with Us
  </a>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  GLOBAL MEDIA LIGHTBOX MODAL                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <div class="portfolio-lightbox" id="global-lightbox" aria-hidden="true" role="dialog">
    <button class="portfolio-lightbox-close" id="global-lightbox-close" aria-label="Close modal preview">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <div class="portfolio-lightbox-content">
      <img id="global-lightbox-img" src="" alt="Media Preview" class="hidden rounded-lg max-h-[85vh] max-w-[90vw] object-contain shadow-2xl" />
      <video id="global-lightbox-video" src="" controls autoplay class="hidden rounded-lg max-h-[85vh] max-w-[90vw] object-contain shadow-2xl"></video>
      <p id="global-lightbox-caption" class="text-white text-sm mt-3 text-center font-medium bg-black/60 px-4 py-2 rounded-full"></p>
    </div>
  </div>

</body>
</html>
