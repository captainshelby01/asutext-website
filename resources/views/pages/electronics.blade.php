@extends('layouts.app')

@section('title', 'Mobile Accessories & Tech Gadgets — Asutext Group | Authentic Electronics')
@section('meta_description', 'Original smartphones, Apple iPhones, MacBooks, laptops, audio wearables, power banks, and technical diagnostics in Lagos, Calabar and nationwide.')

@section('content')
<div class="bg-white min-h-screen">

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="relative bg-brand-dark text-white pt-28 pb-20 sm:pt-36 sm:pb-28 overflow-hidden">
    <!-- Ambient Gradients -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-slate-900 to-black opacity-95 z-0"></div>
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-purple-600/25 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-brand-blue/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs text-gray-400 mb-8" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>/</span>
        <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
        <span>/</span>
        <span class="text-purple-400 font-medium">Electronics &amp; Gadgets</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Hero Copy -->
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-purple-600/20 text-purple-300 border border-purple-500/30 mb-5">
            <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
            Asutext Tech &amp; Gadgets Division
          </div>

          <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-tight mb-5">
            Engineered for <span class="text-purple-400">Power &amp; Performance.</span>
          </h1>

          <p class="text-lg sm:text-xl text-gray-300 font-light leading-relaxed mb-6 max-w-2xl">
            100% authentic smartphones, MacBooks, high-performance computing, smart wearables, and reliable power accessories. <strong class="text-white font-semibold">Genuine Gear. Certified Warranty.</strong>
          </p>

          <p class="text-sm sm:text-base text-gray-400 leading-relaxed mb-8 max-w-2xl">
            From the latest iPhones and Samsung flagships to corporate workstation laptops, noise-cancelling audio, high-capacity GaN power stations, and expert hardware diagnostics—Asutext powers your personal and professional tech life.
          </p>

          <!-- Quick Trust Points -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-10 max-w-xl">
            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-purple-600/20 text-purple-300 flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">100% Authentic</p>
                <p class="text-gray-400 text-[11px]">Factory sealed &amp; verified</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/20 text-brand-blue flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Store Warranty</p>
                <p class="text-gray-400 text-[11px]">Full post-sales support</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-lightning-charge-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Express Delivery</p>
                <p class="text-gray-400 text-[11px]">Same-day dispatch available</p>
              </div>
            </div>
          </div>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4">
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20purchasing%20or%20enquiring%20about%20Gadgets%20from%20Asutext."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              <span>Order Gadgets on WhatsApp</span>
            </a>
            <a href="#electronics-categories" class="btn-outline text-base">
              Explore Catalogue <i class="bi bi-arrow-down ml-1"></i>
            </a>
          </div>

        </div>

        <!-- Right Hero Visual Showcase -->
        <div class="lg:col-span-5">
          <div class="relative">
            
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-slate-900 group">
              <div
                class="relative aspect-[4/5] overflow-hidden cursor-pointer"
                onclick="openTechLightbox('{{ asset('images/electronics/PHOTO-2026-07-15-23-42-17.jpg') }}', 'Asutext Premium Flagship Smartphones & Displays')"
              >
                <img
                  src="{{ asset('images/electronics/PHOTO-2026-07-15-23-42-17.jpg') }}"
                  alt="Asutext Flagship Mobile Electronics"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />

                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                <!-- Floating tags -->
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-black/75 text-white backdrop-blur-md border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
                    Verified Stock
                  </span>
                  <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[11px] font-semibold bg-black/75 text-purple-300 backdrop-blur-md border border-white/20">
                    ★ 100% Genuine
                  </span>
                </div>

                <!-- Bottom overlay label -->
                <div class="absolute bottom-0 inset-x-0 p-6 z-10">
                  <p class="text-xs uppercase tracking-widest text-purple-400 font-bold mb-1">Smartphones &amp; Hardware</p>
                  <h3 class="text-white font-display font-black text-xl leading-snug">
                    Flagship Mobile &amp; Smart Displays
                  </h3>
                  <p class="text-gray-300 text-xs mt-1">Tap to inspect authentic tech specs</p>
                </div>
              </div>
            </div>

            <!-- Floating Badge Behind -->
            <div class="absolute -bottom-6 -right-4 bg-purple-700 text-white px-5 py-3 rounded-2xl shadow-xl border-2 border-white/20 hidden sm:flex items-center gap-3 z-20">
              <span class="text-2xl">📱</span>
              <div>
                <p class="text-[11px] uppercase tracking-wider font-extrabold text-purple-200">Device Swap</p>
                <p class="text-sm font-black">Trade-In &amp; Upgrades</p>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  STATS STRIP                                                -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="bg-purple-700 py-8 text-white border-y border-purple-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">100%</p>
          <p class="text-xs uppercase tracking-wider text-purple-200 mt-1 font-semibold">Genuine Devices</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">1 Yr</p>
          <p class="text-xs uppercase tracking-wider text-purple-200 mt-1 font-semibold">Store Warranty</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">24/7</p>
          <p class="text-xs uppercase tracking-wider text-purple-200 mt-1 font-semibold">Technical Support</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">Same Day</p>
          <p class="text-xs uppercase tracking-wider text-purple-200 mt-1 font-semibold">Doorstep Dispatch</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CATEGORIES & DIVISIONS                                    -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="electronics-categories" class="py-20 sm:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="section-label section-label--blue mb-3 justify-center">Electronics &amp; Hardware</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Engineered for Lifestyle &amp; Productivity
        </h2>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
          From the latest handheld flagships and business MacBooks to high-power GaN charging stations and entertainment soundbars.
        </p>
      </div>

      <!-- Filter Buttons -->
      <div class="flex flex-wrap justify-center gap-2 mb-12">
        <button
          type="button"
          class="tech-filter-tab px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border transition-all bg-brand-dark text-white border-brand-dark"
          data-target="all"
        >
          All Categories (6)
        </button>
        @foreach($categories as $cat)
          <button
            type="button"
            class="tech-filter-tab px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-700 hover:border-purple-600 hover:text-purple-600 transition-all"
            data-target="{{ $cat['id'] }}"
          >
            {{ $cat['name'] }}
          </button>
        @endforeach
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($categories as $cat)
          <div
            class="tech-division-card bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group"
            data-category="{{ $cat['id'] }}"
          >
            <div>
              <!-- Image Banner with Lightbox Trigger -->
              <div
                class="relative aspect-[16/10] overflow-hidden bg-slate-100 cursor-pointer"
                onclick="openTechLightbox('{{ $cat['image'] }}', '{{ $cat['title'] }}')"
              >
                <img
                  src="{{ $cat['image'] }}"
                  alt="{{ $cat['title'] }}"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                
                <span class="absolute top-4 left-4 {{ $cat['badge_color'] }} text-[10px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow">
                  {{ $cat['tag'] }}
                </span>

                <span class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-1 rounded backdrop-blur-sm">
                  🔍 Tap to Inspect
                </span>
              </div>

              <!-- Content -->
              <div class="p-6 sm:p-7">
                <p class="text-[11px] font-extrabold uppercase tracking-wider text-purple-600 mb-1">
                  {{ $cat['name'] }}
                </p>
                <h3 class="font-display text-xl sm:text-2xl font-bold text-brand-dark mb-1 leading-snug">
                  {{ $cat['title'] }}
                </h3>
                <p class="text-xs text-gray-500 mb-4 font-medium">
                  {{ $cat['subtitle'] }}
                </p>
                <p class="text-sm text-gray-600 leading-relaxed mb-6">
                  {{ $cat['desc'] }}
                </p>

                <!-- Included Offerings -->
                <div class="border-t border-gray-100 pt-5">
                  <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">
                    Available Models &amp; Solutions:
                  </p>
                  <ul class="space-y-2">
                    @foreach($cat['items'] as $item)
                      <li class="flex items-start gap-2.5 text-xs text-gray-700">
                        <span class="w-1.5 h-1.5 rounded-full bg-purple-600 flex-shrink-0 mt-1.5"></span>
                        <span>{{ $item }}</span>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>

            <!-- Card Bottom Action -->
            <div class="p-6 pt-4 border-t border-gray-100 flex items-center justify-between gap-3 bg-slate-50/50">
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi, I am interested in inquiring about or purchasing ' . $cat['title'] . ' from Asutext Tech & Gadgets.') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-1.5 text-xs font-bold text-purple-600 hover:text-purple-800 transition-colors"
              >
                <span>Enquire Pricing</span>
                <span>→</span>
              </a>

              <button
                type="button"
                onclick="openTechLightbox('{{ $cat['image'] }}', '{{ addslashes($cat['title']) }}')"
                class="text-xs text-gray-500 hover:text-brand-dark font-medium underline cursor-pointer"
              >
                View Detail
              </button>
            </div>

          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  WHY ASUTEXT TECH & ELECTRONICS                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 sm:py-28 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-16">
        <p class="section-label section-label--red mb-3 justify-center">The Asutext Tech Advantage</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Why Tech Enthusiasts Trust Us
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Guaranteed hardware authenticity, certified warranties, and expert engineers for worry-free tech ownership.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($whyAsutextTech as $why)
          <div class="p-6 rounded-2xl bg-brand-light border border-gray-100 flex flex-col justify-between hover:border-purple-600/40 transition-colors">
            <div>
              <div class="text-3xl mb-4">{{ $why['icon'] }}</div>
              <h3 class="font-display font-bold text-brand-dark text-base mb-2">
                {{ $why['title'] }}
              </h3>
              <p class="text-gray-500 text-xs leading-relaxed">
                {{ $why['desc'] }}
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-gray-200/50">
              <span class="text-[10px] font-black uppercase tracking-wider text-purple-600">Guaranteed</span>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  DEVICE TRADE-IN & SWAP BANNER                             -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-gradient-to-br from-slate-950 via-purple-950/60 to-black text-white relative overflow-hidden">
    <div class="absolute -top-24 -right-24 w-80 h-80 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-8">
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-purple-600 text-white mb-4">
            🔄 Device Trade-In &amp; Swap Program
          </span>
          <h2 class="font-display text-3xl sm:text-5xl font-black text-white mb-4 leading-tight">
            Ready to Upgrade Your Phone or MacBook?
          </h2>
          <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 max-w-2xl">
            Don't let your old device lose value. Trade in your current smartphone or laptop at an honest market valuation and top up easily for the latest model with zero headaches.
          </p>
          <div class="flex flex-wrap gap-4 text-xs sm:text-sm text-gray-300">
            <span class="flex items-center gap-1.5"><i class="bi bi-check2 text-purple-400 font-bold"></i> Fast 15-Minute Diagnostics</span>
            <span class="flex items-center gap-1.5"><i class="bi bi-check2 text-purple-400 font-bold"></i> Secure Data Backup &amp; Wipe</span>
            <span class="flex items-center gap-1.5"><i class="bi bi-check2 text-purple-400 font-bold"></i> Instant Balance Top-Up</span>
          </div>
        </div>

        <div class="lg:col-span-4 flex flex-col gap-3 justify-center items-start lg:items-end">
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20request%20a%20Phone%20or%20Laptop%20Swap%20Valuation%20from%20Asutext."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-whatsapp text-base w-full sm:w-auto text-center justify-center"
          >
            <span>Request Swap Valuation</span>
            <span>→</span>
          </a>
          <p class="text-[11px] text-gray-400">Response usually within 1-2 hours</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PHOTO GALLERY & LIGHTBOX                                  -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="gallery" class="py-20 sm:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <p class="section-label section-label--blue mb-3 justify-center">Hardware Showcase</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Tech In Stock &amp; Client Setups
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Real product photos, client unboxings, and hardware configurations. Click any photo below to inspect high-definition details.
        </p>
      </div>

      <!-- Theme Switcher Pills -->
      <div class="flex flex-wrap justify-center gap-2 mb-10">
        <button
          type="button"
          class="tech-gallery-filter px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-purple-600 bg-purple-600 text-white shadow transition-all"
          data-theme="all"
        >
          All Hardware ({{ count($techPhotos) }})
        </button>
        <button
          type="button"
          class="tech-gallery-filter px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-purple-600 hover:text-purple-600 transition-all"
          data-theme="phones"
        >
          Smartphones
        </button>
        <button
          type="button"
          class="tech-gallery-filter px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-purple-600 hover:text-purple-600 transition-all"
          data-theme="laptops"
        >
          Laptops &amp; PCs
        </button>
        <button
          type="button"
          class="tech-gallery-filter px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-purple-600 hover:text-purple-600 transition-all"
          data-theme="audio"
        >
          Audio &amp; Wearables
        </button>
        <button
          type="button"
          class="tech-gallery-filter px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-purple-600 hover:text-purple-600 transition-all"
          data-theme="power"
        >
          Power &amp; Chargers
        </button>
      </div>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
        @foreach($techPhotos as $photo)
          <div
            class="tech-gallery-card group relative aspect-[4/5] rounded-2xl overflow-hidden bg-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer border border-gray-200/80"
            data-theme="{{ $photo['theme'] }}"
            onclick="openTechLightbox('{{ $photo['url'] }}', '{{ addslashes($photo['title']) }}')"
          >
            <img
              src="{{ $photo['url'] }}"
              alt="{{ $photo['title'] }}"
              class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700"
              loading="lazy"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>

            <!-- Top Tag -->
            <div class="absolute top-3 left-3 right-3 flex items-center justify-between">
              <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-black/60 text-white backdrop-blur-sm">
                {{ $photo['tag'] }}
              </span>
              <span class="w-6 h-6 rounded-full bg-white/20 backdrop-blur-sm text-white flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity">
                ⤢
              </span>
            </div>

            <!-- Bottom Content -->
            <div class="absolute bottom-3 inset-x-3 text-white">
              <p class="text-[10px] uppercase tracking-wider text-purple-400 font-extrabold mb-0.5">
                {{ $photo['category'] }}
              </p>
              <h4 class="font-display font-bold text-xs sm:text-sm line-clamp-2 leading-snug">
                {{ $photo['title'] }}
              </h4>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  AUTHENTICITY & WARRANTY PLEDGE                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-brand-light rounded-3xl p-8 sm:p-12 border border-gray-100">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          
          <div class="lg:col-span-8">
            <span class="text-xs font-black uppercase tracking-wider text-purple-600">Hardware Certification</span>
            <h3 class="font-display text-2xl sm:text-3xl font-black text-brand-dark mt-2 mb-4">
              Our 4-Point Electronics Quality Standard
            </h3>
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-6">
              When buying premium gadgets, peace of mind matters. Every unit sold across our branches undergoes standard evaluation:
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-purple-100 text-purple-600 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Serial &amp; IMEI Validation</h4>
                  <p class="text-gray-500 text-[11px]">Clean global database check to guarantee genuine unblacklisted hardware.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Battery &amp; Hardware Health</h4>
                  <p class="text-gray-500 text-[11px]">85%+ minimum capacity certified across all approved pre-owned units.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-amber-500/10 text-amber-600 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Store Guarantee Paperwork</h4>
                  <p class="text-gray-500 text-[11px]">Official stamped invoice with comprehensive warranty protection periods.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-emerald-500/10 text-emerald-600 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Shockproof Armored Packaging</h4>
                  <p class="text-gray-500 text-[11px]">Dispatched with padded shock cushions for safe transit across Nigeria.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="lg:col-span-4 text-center lg:text-right">
            <div class="inline-block p-6 rounded-2xl bg-white border border-gray-200/80 shadow-sm text-center">
              <span class="text-4xl">💻</span>
              <p class="font-display font-black text-brand-dark text-lg mt-2">Need a Specific Gadget?</p>
              <p class="text-xs text-gray-500 mt-1 mb-4">Request instant price &amp; availability</p>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20looking%20for%20a%20specific%20phone%2Flaptop%20model."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-primary text-xs w-full py-2.5 inline-flex justify-center"
              >
                Chat with Gadget Desk
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  FINAL CTA                                                  -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 sm:py-28 bg-brand-dark text-white text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-purple-600/20 text-purple-300 border border-purple-500/30 mb-6">
        Asutext Group Electronics
      </span>
      <h2 class="font-display text-3xl sm:text-5xl font-black mb-6 leading-tight">
        Elevate Your Digital Life With <span class="text-purple-400">Authentic Tech.</span>
      </h2>
      <p class="text-gray-300 text-base sm:text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
        From everyday smartphones and workstations to complete corporate tech provisioning, get authentic hardware backed by reliable warranties and expert support.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20order%20gadgets%20or%20mobile%20accessories."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp text-base px-8 py-4"
        >
          <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
          <span>Chat on WhatsApp: +234 903 766 6399</span>
        </a>
        <a href="{{ route('services') }}" class="btn-outline text-base px-8 py-4">
          View All Services
        </a>
      </div>
    </div>
  </section>

</div>

<!-- ═══════════════════════════════════════════════════════════ -->
<!--  FULLSCREEN LIGHTBOX MODAL                                 -->
<!-- ═══════════════════════════════════════════════════════════ -->
<div
  id="tech-lightbox"
  class="fixed inset-0 bg-black/95 backdrop-blur-md hidden z-[999999] items-center justify-center p-4 sm:p-6"
  onclick="closeTechLightboxOnBackdrop(event)"
>
  <div class="relative max-w-5xl w-full max-h-[92vh] flex flex-col items-center justify-center">
    
    <!-- Close button -->
    <button
      type="button"
      onclick="closeTechLightbox()"
      class="absolute -top-12 right-0 sm:right-0 bg-white/20 hover:bg-white/40 text-white rounded-full p-2.5 transition-colors focus:outline-none z-20"
      aria-label="Close Lightbox"
    >
      <i class="bi bi-x-lg text-lg"></i>
    </button>

    <!-- Image Display -->
    <div class="relative w-full max-h-[80vh] flex items-center justify-center overflow-hidden rounded-2xl bg-black/50 border border-white/10">
      <img
        id="tech-lightbox-img"
        src=""
        alt="Electronics & Gadgets Preview"
        class="max-w-full max-h-[80vh] object-contain select-none"
      />
    </div>

    <!-- Caption & WhatsApp Action Bar -->
    <div class="w-full mt-4 flex flex-col sm:flex-row items-center justify-between gap-3 px-2">
      <p id="tech-lightbox-caption" class="text-white text-sm sm:text-base font-semibold text-center sm:text-left"></p>
      
      <a
        id="tech-lightbox-wa-btn"
        href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20this%20gadget%20or%20electronic%20device."
        target="_blank"
        rel="noopener noreferrer"
        class="btn-whatsapp text-xs py-2 px-4 inline-flex items-center gap-1.5 flex-shrink-0"
      >
        <span>Enquire Pricing</span>
        <span>→</span>
      </a>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Electronics Category Division Tabs
    const filterTabs = document.querySelectorAll('.tech-filter-tab');
    const divisionCards = document.querySelectorAll('.tech-division-card');

    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        filterTabs.forEach(t => {
          t.classList.remove('bg-brand-dark', 'text-white', 'border-brand-dark');
          t.classList.add('bg-white', 'text-gray-700', 'border-gray-200');
        });
        tab.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
        tab.classList.add('bg-brand-dark', 'text-white', 'border-brand-dark');

        const target = tab.getAttribute('data-target');
        divisionCards.forEach(card => {
          if (target === 'all' || card.getAttribute('data-category') === target) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // Gallery Theme Filter Tabs
    const galleryTabs = document.querySelectorAll('.tech-gallery-filter');
    const galleryItems = document.querySelectorAll('.tech-gallery-card');

    galleryTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        galleryTabs.forEach(t => {
          t.classList.remove('bg-purple-600', 'text-white', 'border-purple-600', 'shadow');
          t.classList.add('border-gray-200', 'text-gray-600', 'bg-white');
        });
        tab.classList.remove('border-gray-200', 'text-gray-600', 'bg-white');
        tab.classList.add('bg-purple-600', 'text-white', 'border-purple-600', 'shadow');

        const theme = tab.getAttribute('data-theme');
        galleryItems.forEach(item => {
          if (theme === 'all' || item.getAttribute('data-theme') === theme) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });

    // ESC key listener for lightbox
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeTechLightbox();
    });
  });

  function openTechLightbox(url, caption) {
    const modal = document.getElementById('tech-lightbox');
    const img = document.getElementById('tech-lightbox-img');
    const cap = document.getElementById('tech-lightbox-caption');
    const waBtn = document.getElementById('tech-lightbox-wa-btn');

    img.src = url;
    cap.textContent = caption || 'Electronics Preview';
    if (waBtn) {
      const baseWa = "{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}";
      waBtn.href = baseWa + "?text=" + encodeURIComponent("Hi, I saw this on your website and would like to enquire about pricing: " + (caption || "Gadgets & Electronics"));
    }

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeTechLightbox() {
    const modal = document.getElementById('tech-lightbox');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function closeTechLightboxOnBackdrop(e) {
    if (e.target.id === 'tech-lightbox') {
      closeTechLightbox();
    }
  }
</script>
@endsection
