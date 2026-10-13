@extends('layouts.app')

@section('title', 'Fashion & Branding — Asutext Group | Wear Your Identity')
@section('meta_description', 'A premium lifestyle brand offering timeless essentials from head to toe. Signature caps, tees, luxury pique polos, footwear, innerwear, accessories & home comfort.')

@section('content')
<div class="bg-white min-h-screen">

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="relative bg-brand-dark text-white pt-28 pb-20 sm:pt-36 sm:pb-28 overflow-hidden">
    <!-- Ambient Gradients -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-black opacity-95 z-0"></div>
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-brand-blue/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs text-gray-400 mb-8" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>/</span>
        <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
        <span>/</span>
        <span class="text-brand-red font-medium">Fashion &amp; Branding</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Hero Copy -->
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-red/20 text-brand-red border border-brand-red/30 mb-5">
            <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
            Asutext Fashion &amp; Lifestyle Brand
          </div>

          <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-tight mb-5">
            Wear Your <span class="text-brand-red">Identity.</span>
          </h1>

          <p class="text-lg sm:text-xl text-gray-300 font-light leading-relaxed mb-6 max-w-2xl">
            A premium lifestyle brand offering timeless essentials from head to toe. <strong class="text-white font-semibold">Quality, Comfort &amp; Style.</strong>
          </p>

          <p class="text-sm sm:text-base text-gray-400 leading-relaxed mb-8 max-w-2xl">
            From signature brown caps to pique polos, statement graphic tees, knit sweaters, handcrafted footwear, and exclusive accessories—every piece is tailored to represent class, comfort, and authenticity.
          </p>

          <!-- Quick Trust Points -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-10 max-w-xl">
            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-red/20 text-brand-red flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-scissors"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Original Designs</p>
                <p class="text-gray-400 text-[11px]">Bespoke &amp; signature cuts</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/20 text-brand-blue flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Premium Fabrics</p>
                <p class="text-gray-400 text-[11px]">100% heavy comb-spun</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-gem"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Pure Confidence</p>
                <p class="text-gray-400 text-[11px]">Wear luxury anywhere</p>
              </div>
            </div>
          </div>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4">
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20ordering%20from%20Asutext%20Fashion%20%26%20Branding%20Collection."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              <span>Order on WhatsApp</span>
            </a>
            <a href="#collections" class="btn-outline text-base">
              Explore Collections <i class="bi bi-arrow-down ml-1"></i>
            </a>
          </div>

        </div>

        <!-- Right Hero Visual Showcase -->
        <div class="lg:col-span-5">
          <div class="relative">
            
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-slate-900 group">
              <div
                class="relative aspect-[4/5] overflow-hidden cursor-pointer"
                onclick="openFashionLightbox('{{ asset('images/Fashion/PHOTO-2026-10-02-13-38-51.jpg') }}', 'Jesus The Way, The Truth, The Life Oversized Streetwear Tee')"
              >
                <img
                  src="{{ asset('images/Fashion/PHOTO-2026-10-02-13-38-51.jpg') }}"
                  alt="Asutext Jesus The Way Streetwear Graphic Tee"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />

                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                <!-- Floating tags -->
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-black/75 text-white backdrop-blur-md border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
                    Featured Drop
                  </span>
                  <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[11px] font-semibold bg-black/75 text-amber-400 backdrop-blur-md border border-white/20">
                    ★ Premium Cotton
                  </span>
                </div>

                <!-- Bottom overlay label -->
                <div class="absolute bottom-0 inset-x-0 p-6 z-10">
                  <p class="text-xs uppercase tracking-widest text-brand-red font-bold mb-1">Heavyweight Streetwear</p>
                  <h3 class="text-white font-display font-black text-xl leading-snug">
                    Jesus The Way, The Truth &amp; The Life
                  </h3>
                  <p class="text-gray-300 text-xs mt-1">Tap to inspect high-definition fabric detail</p>
                </div>
              </div>

              <!-- Bottom Bar inside frame -->
              <div class="p-4 sm:p-5 bg-slate-900/95 border-t border-white/10 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                    🧢
                  </div>
                  <div>
                    <p class="text-xs font-bold text-white leading-tight">Signature Caps &amp; Polos</p>
                    <p class="text-[11px] text-gray-400">Headwear, tees, pique polos &amp; loafers</p>
                  </div>
                </div>

                <a
                  href="#gallery"
                  class="inline-flex items-center gap-1 text-xs font-bold text-brand-red hover:text-white px-3 py-1.5 rounded-lg bg-white/5 hover:bg-brand-red transition-all flex-shrink-0"
                >
                  <span>26+ Designs</span>
                  <span>↓</span>
                </a>
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  ABOUT US / BRAND STORY                                    -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Story image composite -->
        <div class="lg:col-span-5 order-2 lg:order-1">
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
              <div class="rounded-2xl overflow-hidden shadow-lg aspect-[3/4] bg-slate-100">
                <img
                  src="{{ asset('images/Fashion/PHOTO-2026-10-02-13-38-18.jpg') }}"
                  alt="Asutext Now Or Never Mustard T-Shirt"
                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
              </div>
              <div class="rounded-2xl overflow-hidden shadow-lg aspect-square bg-slate-100">
                <img
                  src="{{ asset('images/Fashion/PHOTO-2026-10-02-13-38-56.jpg') }}"
                  alt="Asutext Modern Tipped Polo"
                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
              </div>
            </div>

            <div class="space-y-4 pt-6">
              <div class="rounded-2xl overflow-hidden shadow-lg aspect-square bg-slate-100">
                <img
                  src="{{ asset('images/Fashion/PHOTO-2026-10-02-13-29-54.jpg') }}"
                  alt="Asutext Bad Boys Baseball Polo"
                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
              </div>
              <div class="rounded-2xl overflow-hidden shadow-lg aspect-[3/4] bg-slate-100">
                <img
                  src="{{ asset('images/Fashion/PHOTO-2026-10-02-13-38-47.jpg') }}"
                  alt="Asutext Jesus Is King White Tee"
                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
              </div>
            </div>
          </div>
        </div>

        <!-- Story Copy -->
        <div class="lg:col-span-7 order-1 lg:order-2">
          <p class="section-label section-label--red mb-3">About Us</p>
          <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark leading-tight mb-6">
            Welcome to Asutext Fashion &amp; Lifestyle.
          </h2>

          <div class="space-y-4 text-gray-600 text-base sm:text-lg leading-relaxed">
            <p class="font-medium text-brand-dark">
              We are more than a clothing line. We are a lifestyle brand built on quality, originality and confidence.
            </p>
            <p>
              From signature brown caps to polos, T-shirts, sweaters and exclusive accessories, every piece is designed to represent class, comfort and authenticity.
            </p>
            <p>
              Our goal is simple: <strong class="text-brand-dark font-semibold">To give you premium products that you can wear anywhere, anytime.</strong>
            </p>
          </div>

          <!-- Highlight Quotation -->
          <div class="mt-8 p-6 rounded-2xl bg-brand-light border-l-4 border-brand-red">
            <p class="text-sm font-bold uppercase tracking-wider text-brand-red mb-1">Our Core Mission</p>
            <p class="text-slate-800 font-semibold italic text-base">
              &ldquo;To deliver exceptional fashion experiences through diverse, trend-setting designs and affordable luxury, making high-end fashion accessible to all.&rdquo;
            </p>
          </div>

          <div class="mt-8 flex items-center gap-6">
            <div>
              <p class="font-display font-black text-3xl text-brand-dark">100%</p>
              <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Original Designs</p>
            </div>
            <div class="h-10 w-px bg-gray-200"></div>
            <div>
              <p class="font-display font-black text-3xl text-brand-dark">6</p>
              <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Curated Categories</p>
            </div>
            <div class="h-10 w-px bg-gray-200"></div>
            <div>
              <p class="font-display font-black text-3xl text-brand-dark">500+</p>
              <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Happy Clients</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  COLLECTIONS / SHOP BY CATEGORY                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="collections" class="py-16 sm:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <p class="section-label section-label--blue mb-3 justify-center">Our Collections</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
          Shop By Category
        </h2>
        <p class="text-gray-500 mt-4 text-base sm:text-lg leading-relaxed">
          From signature headwear and daily casuals to handcrafted footwear and bespoke lifestyle pieces. Select a collection to explore.
        </p>
      </div>

      <!-- Category Filter Pills -->
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12" id="category-tab-bar">
        <button
          type="button"
          class="cat-tab-trigger active px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold border transition-all duration-200 cursor-pointer bg-brand-dark text-white border-brand-dark shadow-sm"
          data-target="all"
        >
          All Collections (6)
        </button>
        @foreach($collections as $col)
          <button
            type="button"
            class="cat-tab-trigger px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold border transition-all duration-200 cursor-pointer bg-white text-gray-700 border-gray-200 hover:border-brand-dark hover:text-brand-dark"
            data-target="col-{{ $col['id'] }}"
          >
            {{ $col['name'] }}
          </button>
        @endforeach
      </div>

      <!-- Collections Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="collections-grid">
        @foreach($collections as $col)
          <div
            class="collection-card bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col group"
            data-collection="col-{{ $col['id'] }}"
          >
            <!-- Card Image -->
            <div class="relative aspect-[4/3] overflow-hidden bg-slate-900">
              <img
                src="{{ $col['image'] }}"
                alt="{{ $col['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
              
              <div class="absolute top-4 left-4">
                <span class="text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full {{ $col['badge_color'] }} shadow">
                  {{ $col['tag'] }}
                </span>
              </div>

              <div class="absolute bottom-4 left-4 right-4 text-white">
                <p class="text-[11px] font-bold uppercase tracking-wider text-brand-red">{{ $col['name'] }}</p>
                <h3 class="font-display font-black text-xl text-white leading-snug">{{ $col['title'] }}</h3>
              </div>
            </div>

            <!-- Card Body -->
            <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">{{ $col['subtitle'] }}</p>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ $col['desc'] }}</p>

                <!-- Key Items List -->
                <div class="space-y-2 mb-6 border-t border-gray-100 pt-4">
                  @foreach($col['items'] as $item)
                    <div class="flex items-start gap-2 text-xs text-slate-700">
                      <span class="text-brand-red font-bold mt-0.5">•</span>
                      <span>{{ $item }}</span>
                    </div>
                  @endforeach
                </div>
              </div>

              <!-- Card Action Button -->
              <div class="pt-4 border-t border-gray-100 flex items-center justify-between gap-3">
                <a
                  href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20order%20or%20enquire%20about%20{{ urlencode($col['name'] . ': ' . $col['title']) }}."
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-600 hover:text-emerald-700 transition-colors"
                >
                  <span>Order {{ $col['name'] }}</span>
                  <span>→</span>
                </a>

                <button
                  type="button"
                  onclick="openFashionLightbox('{{ $col['image'] }}', '{{ addslashes($col['title']) }}')"
                  class="text-xs text-gray-500 hover:text-brand-dark font-medium underline cursor-pointer"
                >
                  View Detail
                </button>
              </div>

            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  LOOKBOOK & PRODUCT GALLERY                                -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="gallery" class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
        <div>
          <p class="section-label section-label--red mb-3">Our Lookbook</p>
          <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
            Latest Catalog &amp; Streetwear Drops
          </h2>
          <p class="text-gray-500 mt-2 text-base max-w-2xl">
            Browse our original graphic t-shirts, contrast-collar polos, bespoke suiting, and styling proposals.
          </p>
        </div>

        <!-- Filter tabs for lookbook -->
        <div class="flex flex-wrap gap-2" id="lookbook-tab-container">
          <button class="lookbook-tab-btn active px-4 py-2 rounded-full text-xs font-bold border border-brand-red bg-brand-red text-white transition-all shadow cursor-pointer" data-theme="all">
            All ({{ count($fashionPhotos) }})
          </button>
          <button class="lookbook-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="apparel">
            Graphic Tees
          </button>
          <button class="lookbook-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="headwear">
            Polos &amp; Headwear
          </button>
          <button class="lookbook-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="footwear">
            Bespoke &amp; Footwear
          </button>
          <button class="lookbook-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="accessories">
            Accessories &amp; Runway
          </button>
        </div>
      </div>

      <!-- Photo Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="lookbook-grid">
        @foreach($fashionPhotos as $photo)
          <div
            class="lookbook-card-item rounded-2xl overflow-hidden bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col"
            data-theme="{{ $photo['theme'] }}"
            onclick="openFashionLightbox('{{ $photo['url'] }}', '{{ addslashes($photo['title']) }}')"
          >
            <div class="relative aspect-[3/4] overflow-hidden bg-slate-100">
              <img
                src="{{ $photo['url'] }}"
                alt="{{ $photo['title'] }}"
                loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-75 group-hover:opacity-90 transition-opacity"></div>

              <div class="absolute top-3 left-3">
                <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-black/70 text-white backdrop-blur-md border border-white/20">
                  {{ $photo['tag'] }}
                </span>
              </div>

              <!-- Quick zoom icon -->
              <div class="absolute bottom-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-white text-brand-dark flex items-center justify-center shadow-lg">
                  <i class="bi bi-zoom-in text-sm"></i>
                </div>
              </div>
            </div>

            <div class="p-4 flex-1 flex flex-col justify-between">
              <div>
                <p class="text-[11px] font-bold text-brand-red uppercase tracking-wider mb-1">{{ $photo['category'] }}</p>
                <h4 class="font-display font-bold text-brand-dark text-sm leading-snug group-hover:text-brand-red transition-colors">
                  {{ $photo['title'] }}
                </h4>
              </div>

              <div class="mt-3 pt-3 border-t border-gray-100 flex items-center justify-between text-[11px]">
                <span class="text-gray-400">Asutext Originals</span>
                <span class="font-bold text-emerald-600">Order Piece →</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  WHY ASUTEXT                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-brand-light border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="section-label section-label--blue mb-3 justify-center">The Standard</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
          Why Choose Asutext
        </h2>
        <p class="text-gray-500 mt-4 text-base sm:text-lg leading-relaxed">
          Built on meticulous craftsmanship, relentless originality, and a commitment to dressing you with confidence.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        @foreach($whyAsutext as $reason)
          <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
            <div class="w-12 h-12 rounded-xl bg-brand-light flex items-center justify-center text-2xl mb-5 shadow-inner">
              {{ $reason['icon'] }}
            </div>
            <h3 class="font-display font-bold text-brand-dark text-lg mb-2">
              {{ $reason['title'] }}
            </h3>
            <p class="text-gray-500 text-xs sm:text-sm leading-relaxed">
              {{ $reason['desc'] }}
            </p>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  BRAND PROMISE & CALL TO ACTION                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 sm:py-28 bg-slate-950 text-white relative overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-red/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-brand-blue/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-white/10 text-white border border-white/20 mb-6">
        <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
        Our Brand Promise
      </div>

      <blockquote class="font-display text-2xl sm:text-4xl lg:text-5xl font-black leading-tight text-white mb-6">
        &ldquo;At Asutext Fashion Design, we don&rsquo;t just sell products.<br/>
        <span class="text-brand-red">We sell confidence.</span><br/>
        When you wear us, you wear quality luxury.&rdquo;
      </blockquote>

      <p class="text-gray-300 text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
        Ready to refresh your wardrobe or customize signature apparel for your group or company? Our fashion consultants are ready to assist you.
      </p>

      <div class="flex flex-wrap items-center justify-center gap-4">
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%20Asutext%20Fashion%2C%20I%20am%20ready%20to%20order%20from%20your%20collection."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp text-base"
        >
          <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
          Chat with Fashion Stylist
        </a>
        <a href="{{ route('contact') }}" class="btn-outline text-base">
          Contact Our Office
        </a>
      </div>

    </div>
  </section>

</div>

<!-- ═══════════════════════════════════════════════════════════ -->
<!--  LIGHTBOX MODAL                                            -->
<!-- ═══════════════════════════════════════════════════════════ -->
<div
  id="fashion-lightbox"
  class="fixed inset-0 hidden items-center justify-center p-4 bg-black/95 transition-opacity duration-300"
  style="z-index: 999999;"
  onclick="closeFashionLightboxOnBackdrop(event)"
>
  <div class="relative w-full max-w-4xl max-h-[92vh] flex flex-col items-center">
    <!-- Top sticky bar -->
    <div class="w-full flex items-center justify-between pb-3 text-white border-b border-white/20 mb-3 px-2">
      <span id="fashion-lightbox-caption" class="text-sm font-semibold truncate max-w-[70vw]">Preview</span>
      <button
        onclick="closeFashionLightbox()"
        class="px-3.5 py-1.5 rounded-full bg-brand-red hover:bg-red-700 text-white font-bold text-xs flex items-center gap-1 shadow-lg cursor-pointer transition-all"
      >
        <i class="bi bi-x-lg text-xs"></i> Close
      </button>
    </div>

    <!-- Media Container -->
    <div class="relative w-full flex items-center justify-center overflow-hidden rounded-xl bg-black">
      <img
        id="fashion-lightbox-img"
        src=""
        alt=""
        class="max-h-[75vh] max-w-[92vw] object-contain rounded-lg shadow-2xl"
      />
    </div>
  </div>
</div>

<script>
  // Collection Category Filter Pills
  document.addEventListener('DOMContentLoaded', function () {
    const colTabs = document.querySelectorAll('.cat-tab-trigger');
    const colCards = document.querySelectorAll('.collection-card');

    colTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        colTabs.forEach(t => {
          t.classList.remove('bg-brand-dark', 'text-white', 'border-brand-dark');
          t.classList.add('bg-white', 'text-gray-700', 'border-gray-200');
        });
        tab.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
        tab.classList.add('bg-brand-dark', 'text-white', 'border-brand-dark');

        const target = tab.getAttribute('data-target');
        colCards.forEach(card => {
          if (target === 'all' || card.getAttribute('data-collection') === target) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // Lookbook theme filter
    const lbTabs = document.querySelectorAll('.lookbook-tab-btn');
    const lbCards = document.querySelectorAll('.lookbook-card-item');

    lbTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        lbTabs.forEach(t => {
          t.classList.remove('bg-brand-red', 'text-white', 'border-brand-red', 'shadow');
          t.classList.add('border-gray-200', 'text-gray-600');
        });
        tab.classList.remove('border-gray-200', 'text-gray-600');
        tab.classList.add('bg-brand-red', 'text-white', 'border-brand-red', 'shadow');

        const theme = tab.getAttribute('data-theme');
        lbCards.forEach(card => {
          if (theme === 'all' || card.getAttribute('data-theme') === theme) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // ESC to close modal
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeFashionLightbox();
    });
  });

  function openFashionLightbox(url, caption) {
    const modal = document.getElementById('fashion-lightbox');
    const img = document.getElementById('fashion-lightbox-img');
    const cap = document.getElementById('fashion-lightbox-caption');

    img.src = url;
    cap.textContent = caption || 'Lookbook Preview';

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeFashionLightbox() {
    const modal = document.getElementById('fashion-lightbox');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function closeFashionLightboxOnBackdrop(e) {
    if (e.target.id === 'fashion-lightbox') {
      closeFashionLightbox();
    }
  }
</script>
@endsection
