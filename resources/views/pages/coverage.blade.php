@extends('layouts.app')

@section('title', 'Service Coverage Areas | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Reach</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        Service Coverage Areas
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Based in Lagos and Calabar, we operate across major municipal areas and provide logistics services nationwide.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  COVERAGE AREAS LIST                                       -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <div class="area-card reveal reveal-delay-1">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Banana Island &amp; Ikoyi</p>
            <p class="area-desc">Premium residential estates &amp; corporate offices, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-2">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lagos Island &amp; Victoria Island</p>
            <p class="area-desc">CBD, Marina, commercial &amp; hospitality zones, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-3">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lagos Mainland &amp; Surulere</p>
            <p class="area-desc">Residential, industrial &amp; business districts, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-4">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lekki &amp; Ajah</p>
            <p class="area-desc">Growing residential &amp; commercial corridors, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-5">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Calabar, Cross-River State</p>
            <p class="area-desc">Home operational base, full service coverage</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-6">
          <div class="area-pin" style="font-size:1.1rem;">🌍</div>
          <div>
            <p class="area-name">Nationwide Nigeria</p>
            <p class="area-desc">Transport, haulage, logistics &amp; specialist branding projects delivered nationally</p>
          </div>
        </div>

      </div>

      <!-- Out-of-area Banner -->
      <div class="mt-12 p-8 rounded-2xl bg-brand-light border border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-6 reveal">
        <div>
          <h3 class="font-display font-bold text-brand-dark text-lg">Not in the list above?</h3>
          <p class="text-gray-500 text-sm mt-1">We serve clients nationwide. For transport and logistics we reach all 36 states.</p>
        </div>
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27d%20like%20to%20know%20if%20you%20cover%20my%20area."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-primary flex-shrink-0"
        >Check Your Area</a>
      </div>

    </div>
  </section>
@endsection
