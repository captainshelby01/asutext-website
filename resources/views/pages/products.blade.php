@extends('layouts.app')

@section('title', 'Products Catalogue | Branding, Accessories & Merchandise | Asutext Group')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-12 sm:py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Catalogue</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        Products Catalogue
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Explore our physical products including custom branding &amp; printing, mobile accessories, bespoke fashion, and packaged food items. Order instantly via WhatsApp.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PRODUCTS & CATEGORY FILTER                                -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Search & Category Filter Section -->
      <div class="mb-12 sm:mb-16 space-y-6">
        <!-- Live Instant Search Bar -->
        <div class="max-w-xl mx-auto relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
            <i class="bi bi-search text-base"></i>
          </div>
          <input
            type="text"
            id="product-search-input"
            placeholder="Search products (e.g. caps, t-shirts, power bank, small chops)..."
            class="w-full pl-11 pr-10 py-3.5 bg-white text-gray-900 placeholder-gray-400 rounded-full border border-gray-200 shadow-sm focus:outline-none focus:border-brand-red focus:ring-2 focus:ring-brand-red/20 transition-all text-sm sm:text-base font-medium"
          />
          <button
            type="button"
            id="clear-search-btn"
            class="hidden absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-brand-red"
            title="Clear search"
          >
            <i class="bi bi-x-lg text-base"></i>
          </button>
        </div>

        <!-- Category Filter Pills -->
        <div class="mobile-scroll-tabs">
          <a 
            href="{{ route('products') }}" 
            class="px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-200 border {{ empty($selectedCategory) ? 'bg-brand-red text-white border-brand-red shadow-md' : 'bg-white text-gray-700 border-gray-200 hover:border-brand-red hover:text-brand-red' }}"
          >
            All Products
          </a>
          @foreach($categories as $cat)
            <a 
              href="{{ route('products', ['category' => $cat]) }}" 
              class="px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-200 border {{ $selectedCategory === $cat ? 'bg-brand-red text-white border-brand-red shadow-md' : 'bg-white text-gray-700 border-gray-200 hover:border-brand-red hover:text-brand-red' }}"
            >
              {{ $cat }}
            </a>
          @endforeach
        </div>
      </div>

      <!-- Products Grid -->
      @if($products->count() > 0)
        <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach($products as $product)
            <div 
              class="product-card-item group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200/80 flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5"
              data-name="{{ strtolower($product->name) }}"
              data-category="{{ strtolower($product->category) }}"
              data-description="{{ strtolower($product->description) }}"
            >
              
              <!-- Product Image Container -->
              <div>
                <div class="relative h-64 sm:h-72 overflow-hidden bg-gray-900">
                  <img 
                    src="{{ $product->image_url }}" 
                    alt="{{ $product->name }}" 
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                  />
                  <!-- Category Pill -->
                  <div class="absolute top-4 left-4 bg-brand-dark/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                    {{ $product->category }}
                  </div>
                  <!-- Price Pill -->
                  @if($product->price)
                    <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-black px-3 py-1.5 rounded-full shadow-sm">
                      {{ $product->price }}
                    </div>
                  @endif
                </div>

                <!-- Product Body -->
                <div class="p-6 sm:p-7">
                  <h3 class="font-display font-black text-brand-dark text-xl sm:text-2xl leading-snug mb-3">
                    {{ $product->name }}
                  </h3>
                  @if($product->description)
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                      {{ $product->description }}
                    </p>
                  @endif
                </div>
              </div>

              <!-- Product Footer CTA -->
              <div class="p-6 sm:p-7 pt-0">
                <a
                  href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode($product->whatsapp_cta_text ?? ('Hi Asutext! I am interested in purchasing "' . $product->name . '" from your Products Catalogue.')) }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn-whatsapp w-full justify-center text-sm font-bold shadow-md hover:shadow-lg"
                >
                  <i class="bi bi-whatsapp text-base flex-shrink-0" aria-hidden="true"></i>
                  Order on WhatsApp
                </a>
              </div>

            </div>
          @endforeach
        </div>

        <!-- No Search Results Empty State -->
        <div id="no-search-results" class="hidden text-center py-16 bg-white rounded-3xl border border-gray-200/80 shadow-sm">
          <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-brand-red/10 text-brand-red mb-4">
            <i class="bi bi-search text-2xl"></i>
          </div>
          <h4 class="font-display font-bold text-xl text-brand-dark mb-2">No Matching Products Found</h4>
          <p class="text-gray-500 text-sm max-w-md mx-auto mb-6">We couldn't find any products matching your search term. Try searching for another keyword or browse by category.</p>
          <button type="button" id="reset-search-btn" class="btn-primary inline-flex text-sm">
            Clear Search
          </button>
        </div>
      @else
        <div class="text-center py-16 bg-white rounded-3xl border border-gray-200">
          <p class="text-gray-500 font-medium">No products found in this category.</p>
          <a href="{{ route('products') }}" class="btn-primary mt-4 inline-flex">View All Products</a>
        </div>
      @endif

      <!-- Custom Bulk Order Banner -->
      <div class="mt-16 sm:mt-20 p-8 sm:p-10 rounded-3xl bg-brand-dark text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-8">
        <div>
          <p class="section-label section-label--red mb-2">Custom Orders &amp; Wholesale</p>
          <h3 class="font-display font-black text-2xl sm:text-3xl text-white">Need Custom Branded Items or Bulk Supply?</h3>
          <p class="text-gray-300 text-sm sm:text-base mt-2 max-w-2xl">
            We specialize in tailored corporate gifts, custom apparel embroidery, branded merchandise, and bulk gadget procurement with fast delivery across Nigeria.
          </p>
        </div>
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%20Asutext!%20I%20would%20like%20to%20request%20a%20custom%20bulk%20product%20order."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp text-base flex-shrink-0"
        >
          Request Custom Order
        </a>
      </div>

    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('product-search-input');
      const clearBtn = document.getElementById('clear-search-btn');
      const resetSearchBtn = document.getElementById('reset-search-btn');
      const productCards = document.querySelectorAll('.product-card-item');
      const noResultsState = document.getElementById('no-search-results');

      if (!searchInput) return;

      function performSearch() {
        const query = searchInput.value.trim().toLowerCase();

        if (query.length > 0) {
          clearBtn.classList.remove('hidden');
        } else {
          clearBtn.classList.add('hidden');
        }

        let visibleCount = 0;

        productCards.forEach(card => {
          const name = card.getAttribute('data-name') || '';
          const category = card.getAttribute('data-category') || '';
          const description = card.getAttribute('data-description') || '';

          if (name.includes(query) || category.includes(query) || description.includes(query)) {
            card.style.display = '';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        if (visibleCount === 0 && productCards.length > 0) {
          if (noResultsState) noResultsState.classList.remove('hidden');
        } else {
          if (noResultsState) noResultsState.classList.add('hidden');
        }
      }

      searchInput.addEventListener('input', performSearch);

      function clearSearch() {
        searchInput.value = '';
        performSearch();
        searchInput.focus();
      }

      if (clearBtn) clearBtn.addEventListener('click', clearSearch);
      if (resetSearchBtn) resetSearchBtn.addEventListener('click', clearSearch);
    });
  </script>
@endsection
