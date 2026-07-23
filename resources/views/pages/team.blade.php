@extends('layouts.app')

@section('title', 'Executive Board & Leadership | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Leadership</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        Executive Board & Directors
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Meet the founders, directors, and compliance officers driving the strategic operations of Asutext Group Nigeria Limited.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  LEADERSHIP GRID                                           -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($teamMembers as $member)
          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 flex flex-col reveal reveal-delay-{{ ($loop->index % 3) + 1 }} transition-all duration-300 hover:shadow-lg">
            
            <!-- Portrait Container -->
            <div class="relative aspect-[4/5] overflow-hidden bg-brand-dark">
              <img 
                src="{{ asset('storage/' . $member->image_path) }}" 
                alt="{{ $member->name }}" 
                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" 
              />
              <!-- Elegant Bottom Gradient -->
              <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/20 to-transparent"></div>
              
              <!-- Core details overlaid at the bottom of portrait -->
              <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                <p class="text-brand-red font-bold text-xs uppercase tracking-widest mb-1.5">{{ $member->role }}</p>
                <h2 class="font-display font-black text-white text-xl sm:text-2xl leading-tight">{{ $member->name }}</h2>
              </div>
            </div>
            
            <!-- Bio / Detail Card Body -->
            @if($member->bio)
              <div class="p-6 flex-grow flex flex-col justify-between border-t border-gray-50">
                <p class="text-gray-600 text-sm leading-relaxed italic">
                  "{{ $member->bio }}"
                </p>
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400 font-semibold">
                  <span>Asutext Group Board Member</span>
                  <span class="text-brand-blue">Verified</span>
                </div>
              </div>
            @endif

          </div>
        @empty
          <!-- Static Leadership Fallbacks if DB is empty -->
          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 flex flex-col reveal reveal-delay-1 transition-all duration-300 hover:shadow-lg">
            <div class="relative aspect-[4/5] overflow-hidden bg-brand-dark">
              <img 
                src="/Images/team-jackson-iwara.jpeg" 
                alt="Jackson Jackson Iwara" 
                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" 
              />
              <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/20 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                <p class="text-brand-red font-bold text-xs uppercase tracking-widest mb-1.5">Founder / Managing Director</p>
                <h2 class="font-display font-black text-white text-xl sm:text-2xl leading-tight">Jackson Jackson Iwara</h2>
              </div>
            </div>
            <div class="p-6 flex-grow flex flex-col justify-between border-t border-gray-50">
              <p class="text-gray-600 text-sm leading-relaxed italic">
                "Visionary entrepreneur directing the overall operations and scaling of Asutext Group's multi-service divisions."
              </p>
              <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400 font-semibold">
                <span>Asutext Group Board Member</span>
                <span class="text-brand-blue">Verified</span>
              </div>
            </div>
          </div>
        @endforelse
      </div>

    </div>
  </section>
@endsection
