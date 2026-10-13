@extends('layouts.app')

@section('title', 'Fast Food & Catering Services — Asutext Group | Delicious, Fresh & Hygienic')
@section('meta_description', 'Fresh gourmet meals, smoky jollof, small chops, finger foods, and full-service event buffet catering in Lagos, Calabar and nationwide. Hygiene certified.')

@section('content')
<div class="bg-white min-h-screen">

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="relative bg-brand-dark text-white pt-28 pb-20 sm:pt-36 sm:pb-28 overflow-hidden">
    <!-- Ambient Gradients -->
    <div class="absolute inset-0 bg-gradient-to-br from-amber-950/40 via-slate-900 to-black opacity-95 z-0"></div>
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-red/25 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs text-gray-400 mb-8" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>/</span>
        <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
        <span>/</span>
        <span class="text-brand-red font-medium">Fast Food &amp; Catering</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Hero Copy -->
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-red/20 text-brand-red border border-brand-red/30 mb-5">
            <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
            Asutext Fresh Food &amp; Event Catering
          </div>

          <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-tight mb-5">
            Flavour That Leaves a <span class="text-brand-red">Statement.</span>
          </h1>

          <p class="text-lg sm:text-xl text-gray-300 font-light leading-relaxed mb-6 max-w-2xl">
            Freshly prepared gourmet meals, smoky party jollof, crispy finger foods, and full-service event buffet catering. <strong class="text-white font-semibold">Hygiene, Freshness &amp; Pure Taste.</strong>
          </p>

          <p class="text-sm sm:text-base text-gray-400 leading-relaxed mb-8 max-w-2xl">
            Whether it's an executive office lunch subscription, VIP wedding reception buffet, birthday cocktail platter, or daily gourmet takeout—Asutext delivers culinary excellence with spotless hygiene and chef artistry.
          </p>

          <!-- Quick Trust Points -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-10 max-w-xl">
            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-red/20 text-brand-red flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-egg-fried"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Fresh Daily Prep</p>
                <p class="text-gray-400 text-[11px]">Farm-fresh local ingredients</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Certified Hygiene</p>
                <p class="text-gray-400 text-[11px]">Strict food safety standards</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                <i class="bi bi-clock-history"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Punctual Hot Delivery</p>
                <p class="text-gray-400 text-[11px]">Thermal insulated dispatch</p>
              </div>
            </div>
          </div>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4">
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20order%20from%20Asutext%20Fast%20Food%20%26%20Catering."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              <span>Order Food on WhatsApp</span>
            </a>
            <a href="#menu-categories" class="btn-outline text-base">
              Explore Menu &amp; Catering <i class="bi bi-arrow-down ml-1"></i>
            </a>
          </div>

        </div>

        <!-- Right Hero Visual Showcase -->
        <div class="lg:col-span-5">
          <div class="relative">
            
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-slate-900 group">
              <div
                class="relative aspect-[4/5] overflow-hidden cursor-pointer"
                onclick="openFoodLightbox('{{ asset('images/fast-food/PHOTO-2026-07-15-23-40-49.jpg') }}', 'Asutext Chef Special Gourmet Platter')"
              >
                <img
                  src="{{ asset('images/fast-food/PHOTO-2026-07-15-23-40-49.jpg') }}"
                  alt="Asutext Fast Food Gourmet Meal"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />

                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                <!-- Floating tags -->
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-black/75 text-white backdrop-blur-md border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
                    Chef Special
                  </span>
                  <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-[11px] font-semibold bg-black/75 text-amber-400 backdrop-blur-md border border-white/20">
                    ★ 100% Fresh
                  </span>
                </div>

                <!-- Bottom overlay label -->
                <div class="absolute bottom-0 inset-x-0 p-6 z-10">
                  <p class="text-xs uppercase tracking-widest text-brand-red font-bold mb-1">Daily Restaurant &amp; Takeaway</p>
                  <h3 class="text-white font-display font-black text-xl leading-snug">
                    Freshly Prepared Gourmet Platter
                  </h3>
                  <p class="text-gray-300 text-xs mt-1">Tap to inspect culinary presentation</p>
                </div>
              </div>
            </div>

            <!-- Floating Badge Behind -->
            <div class="absolute -bottom-6 -right-4 bg-brand-red text-white px-5 py-3 rounded-2xl shadow-xl border-2 border-white/20 hidden sm:flex items-center gap-3 z-20">
              <span class="text-2xl">🍲</span>
              <div>
                <p class="text-[11px] uppercase tracking-wider font-extrabold text-red-100">Live Catering</p>
                <p class="text-sm font-black">50 - 2,500+ Guests</p>
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
  <section class="bg-brand-red py-8 text-white border-y border-red-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">100%</p>
          <p class="text-xs uppercase tracking-wider text-red-100 mt-1 font-semibold">Fresh Daily Prep</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">500+</p>
          <p class="text-xs uppercase tracking-wider text-red-100 mt-1 font-semibold">Events Catered</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">50 - 2.5k</p>
          <p class="text-xs uppercase tracking-wider text-red-100 mt-1 font-semibold">Guest Capacity</p>
        </div>
        <div>
          <p class="font-display text-3xl sm:text-4xl font-black">4.9 ★</p>
          <p class="text-xs uppercase tracking-wider text-red-100 mt-1 font-semibold">Client Taste Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  MENU CATEGORIES & DIVISIONS                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="menu-categories" class="py-20 sm:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-16">
        <p class="section-label section-label--red mb-3 justify-center">Culinary Divisions</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Everything You Crave. Perfectly Made.
        </h2>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
          From everyday restaurant meals and office lunch boxes to lavish wedding buffets and sizzling outdoor barbecue stations.
        </p>
      </div>

      <!-- Filter Buttons -->
      <div class="flex flex-wrap justify-center gap-2 mb-12">
        <button
          type="button"
          class="food-filter-tab px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border transition-all bg-brand-dark text-white border-brand-dark"
          data-target="all"
        >
          All Divisions (6)
        </button>
        @foreach($categories as $cat)
          <button
            type="button"
            class="food-filter-tab px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-700 hover:border-brand-red hover:text-brand-red transition-all"
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
            class="food-division-card bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group"
            data-category="{{ $cat['id'] }}"
          >
            <div>
              <!-- Image Banner with Lightbox Trigger -->
              <div
                class="relative aspect-[16/10] overflow-hidden bg-slate-100 cursor-pointer"
                onclick="openFoodLightbox('{{ $cat['image'] }}', '{{ $cat['title'] }}')"
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
                <p class="text-[11px] font-extrabold uppercase tracking-wider text-brand-red mb-1">
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
                    Highlights &amp; Menu Options:
                  </p>
                  <ul class="space-y-2">
                    @foreach($cat['items'] as $item)
                      <li class="flex items-start gap-2.5 text-xs text-gray-700">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-red flex-shrink-0 mt-1.5"></span>
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
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi, I am interested in ordering/inquiring about ' . $cat['title'] . ' from Asutext Fresh Food.') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-red hover:text-red-700 transition-colors"
              >
                <span>Enquire This Menu</span>
                <span>→</span>
              </a>

              <button
                type="button"
                onclick="openFoodLightbox('{{ $cat['image'] }}', '{{ addslashes($cat['title']) }}')"
                class="text-xs text-gray-500 hover:text-brand-dark font-medium underline cursor-pointer"
              >
                View Plating
              </button>
            </div>

          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  WHY ASUTEXT FRESH FOOD                                     -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 sm:py-28 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-16">
        <p class="section-label section-label--blue mb-3 justify-center">The Asutext Standard</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Why Clients Trust Our Kitchen
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Culinary artistry grounded in uncompromised hygiene, precision timing, and customer delight.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($whyAsutextFood as $why)
          <div class="p-6 rounded-2xl bg-brand-light border border-gray-100 flex flex-col justify-between hover:border-brand-red/40 transition-colors">
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
              <span class="text-[10px] font-black uppercase tracking-wider text-brand-red">Guaranteed</span>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  EVENT CATERING PACKAGES CALLOUT                           -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-gradient-to-br from-brand-dark via-slate-900 to-black text-white relative overflow-hidden">
    <div class="absolute -top-24 -right-24 w-80 h-80 bg-brand-red/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-8">
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-red text-white mb-4">
            🎉 Event Hosting &amp; Buffets
          </span>
          <h2 class="font-display text-3xl sm:text-5xl font-black text-white mb-4 leading-tight">
            Planning a Wedding, Birthday or Corporate Gala?
          </h2>
          <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 max-w-2xl">
            Let Asutext handle your food service stress-free. We bring executive chefs, live frying &amp; grilling booths, elegant chafing dish buffet tables, coordinated wait staff, and custom menus crafted precisely for your guests.
          </p>
          <div class="flex flex-wrap gap-4 text-xs sm:text-sm text-gray-300">
            <span class="flex items-center gap-1.5"><span class="text-brand-red font-bold">✓</span> Free Menu Consultation</span>
            <span class="flex items-center gap-1.5"><span class="text-brand-red font-bold">✓</span> Tasting Sessions Available</span>
            <span class="flex items-center gap-1.5"><span class="text-brand-red font-bold">✓</span> Transparent Per-Plate Pricing</span>
          </div>
        </div>

        <div class="lg:col-span-4 flex flex-col gap-3 justify-center items-start lg:items-end">
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20request%20a%20Custom%20Event%20Catering%20Quote%20from%20Asutext."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-whatsapp text-base w-full sm:w-auto text-center justify-center"
          >
            <span>Request Catering Quote</span>
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
        <p class="section-label section-label--red mb-3 justify-center">Visual Taste</p>
        <h2 class="font-display text-3xl sm:text-5xl font-black text-brand-dark mb-4">
          Culinary &amp; Event Showcase
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Real dishes, real event setups, and restaurant atmosphere. Click any photo below to inspect high-definition plating details.
        </p>
      </div>

      <!-- Theme Switcher Pills -->
      <div class="flex flex-wrap justify-center gap-2 mb-10">
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-brand-red bg-brand-red text-white shadow transition-all"
          data-theme="all"
        >
          All Photos ({{ count($foodPhotos) }})
        </button>
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-brand-red hover:text-brand-red transition-all"
          data-theme="mains"
        >
          Mains &amp; Rice
        </button>
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-brand-red hover:text-brand-red transition-all"
          data-theme="finger-foods"
        >
          Small Chops
        </button>
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-brand-red hover:text-brand-red transition-all"
          data-theme="events"
        >
          Buffet &amp; Banquets
        </button>
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-brand-red hover:text-brand-red transition-all"
          data-theme="packaging"
        >
          Packaging
        </button>
        <button
          type="button"
          class="gallery-filter-btn px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-gray-200 bg-white text-gray-600 hover:border-brand-red hover:text-brand-red transition-all"
          data-theme="ambiance"
        >
          Restaurant Ambiance
        </button>
      </div>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
        @foreach($foodPhotos as $photo)
          <div
            class="gallery-item-card group relative aspect-[4/5] rounded-2xl overflow-hidden bg-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer border border-gray-200/80"
            data-theme="{{ $photo['theme'] }}"
            onclick="openFoodLightbox('{{ $photo['url'] }}', '{{ addslashes($photo['title']) }}')"
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
              <p class="text-[10px] uppercase tracking-wider text-brand-red font-extrabold mb-0.5">
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
  <!--  HYGIENE & PREPARATION PROTOCOL                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-brand-light rounded-3xl p-8 sm:p-12 border border-gray-100">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          
          <div class="lg:col-span-8">
            <span class="text-xs font-black uppercase tracking-wider text-brand-red">Strict Safety Compliance</span>
            <h3 class="font-display text-2xl sm:text-3xl font-black text-brand-dark mt-2 mb-4">
              Our 4-Point Kitchen Hygiene Pledge
            </h3>
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-6">
              In food preparation, trust is earned through rigor. Every Asutext kitchen workstation follows certified sanitation guidelines:
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-brand-red/10 text-brand-red font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Sterile Food Handling</h4>
                  <p class="text-gray-500 text-[11px]">All prep crew operate in hairnets, chef gloves, and sanitized aprons.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Fresh Farm Sourcing</h4>
                  <p class="text-gray-500 text-[11px]">Vegetables, poultry, and beef sourced daily from certified suppliers.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-amber-500/10 text-amber-600 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Tamper-Evident Packaging</h4>
                  <p class="text-gray-500 text-[11px]">Sealed delivery bowls and bento packs ensuring zero external contamination.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="w-6 h-6 rounded-full bg-emerald-500/10 text-emerald-600 font-bold text-xs flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
                <div>
                  <h4 class="font-bold text-xs text-brand-dark">Thermal Hot-Box Transport</h4>
                  <p class="text-gray-500 text-[11px]">Commercial food warmers retain oven temperatures right to your table.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="lg:col-span-4 text-center lg:text-right">
            <div class="inline-block p-6 rounded-2xl bg-white border border-gray-200/80 shadow-sm text-center">
              <span class="text-4xl">🍽️</span>
              <p class="font-display font-black text-brand-dark text-lg mt-2">Ready to Taste the Difference?</p>
              <p class="text-xs text-gray-500 mt-1 mb-4">Contact our food desk directly</p>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20want%20to%20place%20a%20food%20order%20or%20inquire%20about%20catering."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-primary text-xs w-full py-2.5 inline-flex justify-center"
              >
                Chat with Catering Desk
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
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-red/20 text-brand-red border border-brand-red/30 mb-6">
        Asutext Group Food Division
      </span>
      <h2 class="font-display text-3xl sm:text-5xl font-black mb-6 leading-tight">
        Great Events Are Remembered for <span class="text-brand-red">Great Food.</span>
      </h2>
      <p class="text-gray-300 text-base sm:text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
        Let our culinary team craft memorable dishes for your office, family, or gala event. Order a single takeaway or book a 2,000-guest banquet today.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20order%20food%20or%20book%20catering%20services."
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
  id="food-lightbox"
  class="fixed inset-0 bg-black/95 backdrop-blur-md hidden z-[999999] items-center justify-center p-4 sm:p-6"
  onclick="closeFoodLightboxOnBackdrop(event)"
>
  <div class="relative max-w-5xl w-full max-h-[92vh] flex flex-col items-center justify-center">
    
    <!-- Close button -->
    <button
      type="button"
      onclick="closeFoodLightbox()"
      class="absolute -top-12 right-0 sm:right-0 bg-white/20 hover:bg-white/40 text-white rounded-full p-2.5 transition-colors focus:outline-none z-20"
      aria-label="Close Lightbox"
    >
      <i class="bi bi-x-lg text-lg"></i>
    </button>

    <!-- Image Display -->
    <div class="relative w-full max-h-[80vh] flex items-center justify-center overflow-hidden rounded-2xl bg-black/50 border border-white/10">
      <img
        id="food-lightbox-img"
        src=""
        alt="Food & Catering Preview"
        class="max-w-full max-h-[80vh] object-contain select-none"
      />
    </div>

    <!-- Caption & WhatsApp Action Bar -->
    <div class="w-full mt-4 flex flex-col sm:flex-row items-center justify-between gap-3 px-2">
      <p id="food-lightbox-caption" class="text-white text-sm sm:text-base font-semibold text-center sm:text-left"></p>
      
      <a
        id="food-lightbox-wa-btn"
        href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20this%20dish%20or%20catering%20service."
        target="_blank"
        rel="noopener noreferrer"
        class="btn-whatsapp text-xs py-2 px-4 inline-flex items-center gap-1.5 flex-shrink-0"
      >
        <span>Enquire This Dish</span>
        <span>→</span>
      </a>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menu Category Division Tabs
    const filterTabs = document.querySelectorAll('.food-filter-tab');
    const divisionCards = document.querySelectorAll('.food-division-card');

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
    const galleryTabs = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item-card');

    galleryTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        galleryTabs.forEach(t => {
          t.classList.remove('bg-brand-red', 'text-white', 'border-brand-red', 'shadow');
          t.classList.add('border-gray-200', 'text-gray-600', 'bg-white');
        });
        tab.classList.remove('border-gray-200', 'text-gray-600', 'bg-white');
        tab.classList.add('bg-brand-red', 'text-white', 'border-brand-red', 'shadow');

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
      if (e.key === 'Escape') closeFoodLightbox();
    });
  });

  function openFoodLightbox(url, caption) {
    const modal = document.getElementById('food-lightbox');
    const img = document.getElementById('food-lightbox-img');
    const cap = document.getElementById('food-lightbox-caption');
    const waBtn = document.getElementById('food-lightbox-wa-btn');

    img.src = url;
    cap.textContent = caption || 'Food Preview';
    if (waBtn) {
      const baseWa = "{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}";
      waBtn.href = baseWa + "?text=" + encodeURIComponent("Hi, I saw this on your website and would like to enquire: " + (caption || "Food and Catering"));
    }

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeFoodLightbox() {
    const modal = document.getElementById('food-lightbox');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function closeFoodLightboxOnBackdrop(e) {
    if (e.target.id === 'food-lightbox') {
      closeFoodLightbox();
    }
  }
</script>
@endsection
