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
          <div class="hero-trust-grid mb-8 max-w-xl">
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
              href="#quote-form"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              <span>Order &amp; Catering Quote</span>
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
      <div class="mobile-scroll-tabs mb-12">
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
            <div class="p-5 pt-3.5 border-t border-gray-100 flex items-center gap-2.5 bg-slate-50/70">
              <a
                href="#quote-form"
                onclick="selectFoodDivisionForQuote('{{ $cat['id'] }}')"
                class="btn-card-quote flex-1"
                style="background-color: #CC0000 !important; color: #ffffff !important;"
              >
                <span style="color: #ffffff !important;">Select for Quote</span>
                <i class="bi bi-arrow-down text-[11px]" style="color: #ffffff !important;"></i>
              </a>

              <button
                type="button"
                onclick="openFoodLightbox('{{ $cat['image'] }}', '{{ addslashes($cat['title']) }}')"
                class="btn-card-detail"
                title="View Plating"
              >
                <i class="bi bi-eye"></i>
                <span>Plating</span>
              </button>
            </div>

          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  INTERACTIVE FAST FOOD & CATERING QUOTE FORM (WHATSAPP)     -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="quote-form" class="py-16 sm:py-24 bg-white border-t border-b border-gray-200 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto mb-10">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-red-50 text-brand-red border border-red-200 mb-3">
          <i class="bi bi-egg-fried"></i>
          Fresh Food &amp; Catering Order in 60 Seconds
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Order Gourmet Meals or Book Event Catering
        </h2>
        <p class="text-gray-500 mt-3 text-sm sm:text-base leading-relaxed">
          Select your culinary category and dishes below. We will format a clear menu specification and connect you directly with our kitchen dispatch on WhatsApp.
        </p>
      </div>

      <!-- Main Form Card -->
      <div class="bg-brand-light rounded-3xl p-6 sm:p-10 border border-gray-200/90 shadow-xl relative overflow-hidden">
        <form id="foodQuoteForm" onsubmit="handleFoodFormSubmit(event)" novalidate>
          
          <!-- STEP 1: Select Main Category/Division -->
          <div class="mb-8">
            <div class="flex items-center justify-between mb-3">
              <label class="block font-display font-bold text-slate-900 text-sm sm:text-base">
                1. Select Food or Catering Division <span class="text-brand-red">*</span>
              </label>
              <span class="text-xs text-gray-400 font-medium">Choose menu type</span>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5" id="food-division-options">
              @foreach($categories as $cat)
                <button
                  type="button"
                  class="food-division-btn p-3 rounded-xl border text-left transition-all duration-200 flex flex-col justify-between group cursor-pointer {{ $loop->first ? 'border-brand-red bg-white ring-2 ring-brand-red/20 shadow-sm' : 'border-gray-200 bg-white/70 hover:bg-white hover:border-gray-300' }}"
                  data-cat-id="{{ $cat['id'] }}"
                  data-cat-title="{{ $cat['title'] }}"
                  onclick="setFoodFormDivision('{{ $cat['id'] }}')"
                >
                  <div class="flex items-center justify-between w-full mb-1.5">
                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold {{ $cat['badge_color'] }}">
                      @if($cat['id'] === 'daily-specials') <i class="bi bi-fire"></i>
                      @elseif($cat['id'] === 'small-chops') <i class="bi bi-pie-chart-fill"></i>
                      @elseif($cat['id'] === 'event-catering') <i class="bi bi-people-fill"></i>
                      @elseif($cat['id'] === 'outdoor-bbq') <i class="bi bi-cloud-haze-fill"></i>
                      @elseif($cat['id'] === 'corporate-lunch') <i class="bi bi-briefcase-fill"></i>
                      @else <i class="bi bi-cup-straw"></i>
                      @endif
                    </span>
                    <span class="food-division-radio w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center {{ $loop->first ? 'border-brand-red' : '' }}">
                      <span class="food-division-dot w-2 h-2 rounded-full bg-brand-red {{ $loop->first ? 'block' : 'hidden' }}"></span>
                    </span>
                  </div>
                  <span class="font-display font-bold text-xs sm:text-sm text-slate-800 leading-tight">
                    {{ $cat['name'] }}
                  </span>
                </button>
              @endforeach
            </div>
            <input type="hidden" id="selectedFoodDivisionInput" name="division" value="{{ $categories[0]['id'] ?? 'daily-specials' }}">
            <input type="hidden" id="selectedFoodDivisionTitle" value="{{ $categories[0]['name'] ?? 'Daily Specials' }}">
          </div>

          <!-- STEP 2: Sub-services Dynamic Multi-Select Chips -->
          <div class="mb-8 p-5 bg-white rounded-2xl border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-3">
              <label class="block font-display font-bold text-slate-900 text-sm sm:text-base">
                2. Select Specific Dishes &amp; Offerings <span class="text-brand-red">*</span>
              </label>
              <span class="text-xs text-brand-red font-semibold">Select all that apply</span>
            </div>
            <p class="text-xs text-gray-500 mb-4">
              Tap the items you would like included in your order or catering plan:
            </p>

            @foreach($categories as $cat)
              <div
                id="food-subservices-for-{{ $cat['id'] }}"
                class="food-subservices-group {{ $loop->first ? 'flex' : 'hidden' }} flex-wrap gap-2"
              >
                @foreach($cat['items'] as $item)
                  <button
                    type="button"
                    class="food-subservice-chip px-3.5 py-2 rounded-xl border border-gray-200 bg-brand-light text-slate-700 text-xs sm:text-sm font-semibold hover:border-brand-red/60 transition-all flex items-center gap-2 cursor-pointer"
                    data-service-name="{{ $item }}"
                    onclick="toggleFoodSubserviceChip(this)"
                  >
                    <span class="chip-check w-4 h-4 rounded-md border border-gray-300 flex items-center justify-center bg-white text-[10px] text-white">
                      <i class="bi bi-check-lg hidden"></i>
                    </span>
                    <span>{{ $item }}</span>
                  </button>
                @endforeach
              </div>
            @endforeach
            <p id="foodSubservicesError" class="text-brand-red text-xs mt-2 hidden font-medium">
              Please select at least one menu item.
            </p>
          </div>

          <!-- STEP 3: Event / Order Details -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-8">
            
            <!-- Order / Event Type -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                3. Order or Event Type <span class="text-brand-red">*</span>
              </label>
              <select
                id="formFoodType"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
                required
              >
                <option value="" disabled selected>Select order category...</option>
                <option value="Takeaway / Personal Dining Pack">Takeaway / Personal Dining Pack</option>
                <option value="Executive Office Lunch Delivery">Executive Office Lunch Delivery</option>
                <option value="Cocktail Party / Finger Foods Platter">Cocktail Party / Finger Foods Platter</option>
                <option value="Wedding / Engagement Reception Buffet">Wedding / Engagement Reception Buffet</option>
                <option value="Birthday / Anniversary Celebration">Birthday / Anniversary Celebration</option>
                <option value="Corporate Seminar / Conference Catering">Corporate Seminar / Conference Catering</option>
                <option value="Live BBQ & Pop-Up Grill Setup">Live BBQ & Pop-Up Grill Setup</option>
                <option value="Other Custom Catering Event">Other Custom Catering Event</option>
              </select>
            </div>

            <!-- Number of Guests / Packs -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                4. Number of Guests / Meal Packs <span class="text-brand-red">*</span>
              </label>
              <select
                id="formFoodScale"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
                required
              >
                <option value="" disabled selected>Select estimated headcount...</option>
                <option value="1 to 5 Persons (Personal / Duo)">1 to 5 Persons (Personal / Duo)</option>
                <option value="6 to 20 Persons (Office / Small Gathering)">6 to 20 Persons (Office / Small Gathering)</option>
                <option value="20 to 50 Guests">20 to 50 Guests</option>
                <option value="50 to 150 Guests">50 to 150 Guests</option>
                <option value="150 to 350 Guests">150 to 350 Guests</option>
                <option value="350+ Guests (Large Banquet / Fair)">350+ Guests (Large Banquet / Fair)</option>
              </select>
            </div>

            <!-- Delivery Date / Timing -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                5. When Do You Need It? <span class="text-brand-red">*</span>
              </label>
              <select
                id="formFoodSchedule"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
              >
                <option value="Today / ASAP (Immediate Lunch Prep)">Today / ASAP (Immediate Lunch Prep)</option>
                <option value="Tomorrow" selected>Tomorrow</option>
                <option value="This Weekend">This Weekend</option>
                <option value="Upcoming Specific Event Date">Upcoming Specific Event Date</option>
                <option value="Recurring Daily / Weekly Office Plan">Recurring Daily / Weekly Office Plan</option>
              </select>
            </div>

            <!-- Delivery Location / Venue -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                6. Delivery Address / Event Venue <span class="text-brand-red">*</span>
              </label>
              <input
                type="text"
                id="formFoodLocation"
                placeholder="e.g. Lekki Phase 1, Victoria Island, Ikeja, or Calabar"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
                required
              />
            </div>

          </div>

          <!-- STEP 4: Contact & Customization Notes -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-8">
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                7. Your Name <span class="text-brand-red">*</span>
              </label>
              <input
                type="text"
                id="formFoodName"
                placeholder="e.g. Babatunde Adeleke"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
                required
              />
            </div>

            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                8. WhatsApp / Phone Number <span class="text-brand-red">*</span>
              </label>
              <input
                type="tel"
                id="formFoodPhone"
                placeholder="e.g. 08012345678"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
                required
              />
            </div>

            <div class="sm:col-span-2">
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                9. Dietary Preferences, Protein Choices or Special Notes <span class="text-gray-400 font-normal">(Optional)</span>
              </label>
              <input
                type="text"
                id="formFoodNotes"
                placeholder="e.g. Extra peppered turkey, fish option for 10 guests, tamper-proof packaging, chafing warmers needed"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
              />
            </div>
          </div>

          <!-- Submit Button & Guarantee Note -->
          <div class="pt-4 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-xs text-gray-500 flex items-center gap-2">
              <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs flex-shrink-0">
                <i class="bi bi-shield-lock-fill"></i>
              </span>
              <span>Your order specification is recorded &amp; forwarded to our kitchen dispatch on WhatsApp.</span>
            </div>

            <button
              type="submit"
              id="foodSubmitBtn"
              class="group relative w-full sm:w-auto inline-flex items-center justify-between sm:justify-start gap-4 px-6 sm:px-8 py-3.5 sm:py-4 rounded-2xl bg-gradient-to-r from-[#25D366] via-[#20ba5a] to-[#128C7E] text-white shadow-[0_8px_24px_rgba(37,211,102,0.35)] hover:shadow-[0_12px_32px_rgba(37,211,102,0.5)] border border-emerald-300/40 hover:border-white/40 transition-all duration-300 cursor-pointer transform hover:-translate-y-1 active:translate-y-0 overflow-hidden"
            >
              <span class="absolute inset-0 w-full h-full bg-gradient-to-t from-black/5 to-white/20 pointer-events-none"></span>

              <div class="relative w-11 h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center flex-shrink-0 shadow-inner group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="bi bi-whatsapp text-2xl text-white"></i>
              </div>

              <div class="relative text-left flex-1 min-w-[190px]">
                <p id="foodSubmitText" class="font-display font-extrabold text-white text-base sm:text-lg leading-tight tracking-wide">
                  Send Catering Order
                </p>
                <p id="foodSubmitSub" class="text-white/85 text-xs font-medium flex items-center gap-1.5 mt-0.5">
                  <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                  Instant Dispatch to WhatsApp
                </p>
              </div>

              <div class="relative w-8 h-8 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 group-hover:bg-white group-hover:text-emerald-700 transition-all duration-300">
                <i class="bi bi-arrow-right text-sm group-hover:translate-x-0.5 transition-transform"></i>
              </div>
            </button>
          </div>

        </form>
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
            href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
            class="btn-white inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold shadow-md hover:shadow transition-all w-full sm:w-auto"
            style="color: #0f172a !important; background-color: #ffffff !important;"
          >
            <i class="bi bi-telephone-fill text-brand-red text-base flex-shrink-0"></i>
            <span style="color: #0f172a !important;" class="font-extrabold text-slate-900">Speak with Event Chef</span>
          </a>
          <a
            href="#quote-form"
            onclick="selectFoodDivisionForQuote('event-catering')"
            class="text-xs text-gray-300 hover:text-white underline font-medium"
          >
            Or customize catering quote in form ↑
          </a>
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
                href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
                class="btn-primary text-xs w-full py-2.5 inline-flex justify-center items-center gap-1.5 cursor-pointer"
              >
                <i class="bi bi-telephone-fill text-[11px]"></i>
                <span>Call Kitchen Desk</span>
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
          href="#quote-form"
          class="btn-primary text-base px-8 py-4 inline-flex items-center gap-2"
        >
          <span>Build Your Catering Menu</span>
          <i class="bi bi-arrow-up-right text-sm"></i>
        </a>
        <a
          href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
          class="btn-outline text-base px-8 py-4 inline-flex items-center gap-2"
        >
          <i class="bi bi-telephone text-sm"></i>
          <span>Call Us Direct</span>
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

  // Fast Food & Catering Interactive Quote Form Handling
  function setFoodFormDivision(divisionId) {
    const hiddenInput = document.getElementById('selectedFoodDivisionInput');
    const hiddenTitle = document.getElementById('selectedFoodDivisionTitle');
    const divisionButtons = document.querySelectorAll('.food-division-btn');

    divisionButtons.forEach(btn => {
      const catId = btn.getAttribute('data-cat-id');
      const catTitle = btn.getAttribute('data-cat-title');
      const radioBox = btn.querySelector('.food-division-radio');
      const radioDot = btn.querySelector('.food-division-dot');

      if (catId === divisionId) {
        btn.classList.add('border-brand-red', 'bg-white', 'ring-2', 'ring-brand-red/20', 'shadow-sm');
        btn.classList.remove('border-gray-200', 'bg-white/70');
        if (radioBox) radioBox.classList.add('border-brand-red');
        if (radioDot) radioDot.classList.remove('hidden');
        if (hiddenInput) hiddenInput.value = catId;
        if (hiddenTitle) hiddenTitle.value = catTitle || btn.innerText.trim();
      } else {
        btn.classList.remove('border-brand-red', 'bg-white', 'ring-2', 'ring-brand-red/20', 'shadow-sm');
        btn.classList.add('border-gray-200', 'bg-white/70');
        if (radioBox) radioBox.classList.remove('border-brand-red');
        if (radioDot) radioDot.classList.add('hidden');
      }
    });

    const allGroups = document.querySelectorAll('.food-subservices-group');
    allGroups.forEach(grp => {
      grp.classList.remove('flex');
      grp.classList.add('hidden');
    });

    const activeGroup = document.getElementById(`food-subservices-for-${divisionId}`);
    if (activeGroup) {
      activeGroup.classList.remove('hidden');
      activeGroup.classList.add('flex');
    }

    const errEl = document.getElementById('foodSubservicesError');
    if (errEl) errEl.classList.add('hidden');
  }

  function selectFoodDivisionForQuote(divisionId) {
    setFoodFormDivision(divisionId);
    const formSection = document.getElementById('quote-form');
    if (formSection) {
      formSection.scrollIntoView({ behavior: 'smooth' });
    }
  }

  function toggleFoodSubserviceChip(chip) {
    chip.classList.toggle('selected');
    const checkIcon = chip.querySelector('.chip-check i');
    const checkContainer = chip.querySelector('.chip-check');

    if (chip.classList.contains('selected')) {
      chip.classList.add('border-brand-red', 'bg-red-50/80', 'text-brand-red', 'font-bold');
      chip.classList.remove('border-gray-200', 'bg-brand-light', 'text-slate-700');
      if (checkContainer) {
        checkContainer.classList.add('bg-brand-red', 'border-brand-red');
        checkContainer.classList.remove('bg-white', 'border-gray-300');
      }
      if (checkIcon) checkIcon.classList.remove('hidden');
    } else {
      chip.classList.remove('border-brand-red', 'bg-red-50/80', 'text-brand-red', 'font-bold');
      chip.classList.add('border-gray-200', 'bg-brand-light', 'text-slate-700');
      if (checkContainer) {
        checkContainer.classList.remove('bg-brand-red', 'border-brand-red');
        checkContainer.classList.add('bg-white', 'border-gray-300');
      }
      if (checkIcon) checkIcon.classList.add('hidden');
    }

    const errEl = document.getElementById('foodSubservicesError');
    if (errEl) errEl.classList.add('hidden');
  }

  async function handleFoodFormSubmit(e) {
    e.preventDefault();

    const divisionId = document.getElementById('selectedFoodDivisionInput')?.value || 'daily-specials';
    const divisionTitle = document.getElementById('selectedFoodDivisionTitle')?.value || 'Daily Specials';

    const orderType = document.getElementById('formFoodType')?.value;
    const scale = document.getElementById('formFoodScale')?.value;
    const schedule = document.getElementById('formFoodSchedule')?.value;
    const location = document.getElementById('formFoodLocation')?.value.trim();
    const name = document.getElementById('formFoodName')?.value.trim();
    const phone = document.getElementById('formFoodPhone')?.value.trim();
    const notes = document.getElementById('formFoodNotes')?.value.trim();

    if (!orderType) {
      alert('Please select your order or event type.');
      document.getElementById('formFoodType')?.focus();
      return;
    }
    if (!scale) {
      alert('Please select the estimated number of guests or meal packs.');
      document.getElementById('formFoodScale')?.focus();
      return;
    }
    if (!location) {
      alert('Please enter your delivery address or event venue.');
      document.getElementById('formFoodLocation')?.focus();
      return;
    }
    if (!name) {
      alert('Please enter your full name.');
      document.getElementById('formFoodName')?.focus();
      return;
    }
    if (!phone) {
      alert('Please enter your WhatsApp or phone number.');
      document.getElementById('formFoodPhone')?.focus();
      return;
    }

    const activeGroup = document.getElementById(`food-subservices-for-${divisionId}`);
    const selectedChips = activeGroup ? activeGroup.querySelectorAll('.food-subservice-chip.selected') : [];
    const selectedItems = Array.from(selectedChips).map(c => c.getAttribute('data-service-name'));

    if (selectedItems.length === 0) {
      const errEl = document.getElementById('foodSubservicesError');
      if (errEl) errEl.classList.remove('hidden');
      if (activeGroup) activeGroup.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    const submitBtn = document.getElementById('foodSubmitBtn');
    const submitText = document.getElementById('foodSubmitText');
    const submitSub = document.getElementById('foodSubmitSub');
    const originalText = submitText?.textContent || 'Send Catering Order';
    const originalSub = submitSub?.innerHTML || '<span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> Instant Dispatch to WhatsApp';

    if (submitBtn) submitBtn.disabled = true;
    if (submitText) submitText.textContent = 'Formatting Culinary Order...';
    if (submitSub) submitSub.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span> Connecting to Kitchen...';

    const itemsListText = selectedItems.map(item => `• ${item}`).join('\n');
    const fullMessage = 
`*New Food & Catering Order — Asutext Group*
━━━━━━━━━━━━━━━━━━━━
👤 *Customer:* ${name}
📞 *Phone:* ${phone}
🍽️ *Division:* ${divisionTitle}
🏷️ *Order Type:* ${orderType}
👥 *Headcount / Packs:* ${scale}
📅 *Needed By:* ${schedule}
📍 *Delivery / Venue:* ${location}
🍲 *Selected Menu Items:*
${itemsListText}
📝 *Preferences / Notes:* ${notes ? notes : 'None'}
━━━━━━━━━━━━━━━━━━━━
_Sent via asutext.com/services/fast-food quote funnel_`;

    try {
      await fetch('{{ route("inquiry.store") }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          name: name,
          phone: phone,
          service: `Fast Food: ${divisionTitle}`,
          message: fullMessage
        })
      });
    } catch (err) {
      console.warn('Backend inquiry auto-save bypassed, launching WhatsApp directly', err);
    }

    const waBase = '{{ $globalSettings["whatsapp_url"] ?? "https://wa.me/2349037666399" }}'.split('?')[0];
    const targetUrl = `${waBase}?text=${encodeURIComponent(fullMessage)}`;

    const win = window.open(targetUrl, '_blank');
    if (!win || win.closed || typeof win.closed === 'undefined') {
      window.location.href = targetUrl;
    }

    setTimeout(() => {
      if (submitBtn) submitBtn.disabled = false;
      if (submitText) submitText.textContent = originalText;
      if (submitSub) submitSub.innerHTML = originalSub;
    }, 2000);
  }
</script>
@endsection
