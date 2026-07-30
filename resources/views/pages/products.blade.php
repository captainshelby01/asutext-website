@extends('layouts.app')

@section('title', 'Products Catalogue | Branding, Accessories & Merchandise | Asutext Group')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
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
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Category Filter Pills -->
        <div class="flex flex-wrap items-center justify-center gap-2.5">
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
                  </svg>
                  Order on WhatsApp
                </a>
              </div>

            </div>
          @endforeach
        </div>

        <!-- No Search Results Empty State -->
        <div id="no-search-results" class="hidden text-center py-16 bg-white rounded-3xl border border-gray-200/80 shadow-sm">
          <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-brand-red/10 text-brand-red mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
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
