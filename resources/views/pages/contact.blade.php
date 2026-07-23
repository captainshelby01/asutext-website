@extends('layouts.app')

@section('title', 'Contact Us - Get a Free Quote | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Support</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        Contact Our Offices
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Get in touch with us today. For the fastest response, send us an enquiry directly on WhatsApp.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CONTACT CONTENT                                           -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20">

        <!-- Left: Contact Details -->
        <div class="reveal-left">
          <p class="section-label mb-4">Find Us</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-6 leading-tight">
            Ready to Start<br/>Your Project?
          </h2>
          <p class="text-gray-500 mb-8 max-w-md leading-relaxed">
            Have a unique project in mind, or need a recurring corporate facility cleaning contract? Reach out via any of our channels below.
          </p>

          <div class="space-y-6">
            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">WhatsApp / Phone</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Email Address</p>
                <a href="mailto:{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}" class="text-brand-dark font-semibold hover:text-brand-red transition-colors">{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}</a>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Lagos HQ Office</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['address_lagos'] ?? '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Cross-River Branch Office</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['address_calabar'] ?? '10 Federal Housing Road, Calabar, Cross-River State' }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Interactive WhatsApp Form -->
        <div class="reveal-right">
          <div class="bg-brand-light border border-gray-200 rounded-3xl p-8 shadow-sm">
            <h3 class="font-display font-bold text-brand-dark text-xl mb-2">WhatsApp Instant Enquiry</h3>
            <p class="text-gray-500 text-sm mb-6">Fill in the fields below to format your message, and submit to launch an instant chat with our operations desk.</p>

            <form id="whatsapp-inquiry-form" class="space-y-4">
              @csrf
              <div>
                <label for="name" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="e.g. John Doe" />
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="email" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Email Address</label>
                  <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="john@example.com" />
                </div>
                <div>
                  <label for="phone" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Phone Number</label>
                  <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="+234..." />
                </div>
              </div>

              <div>
                <label for="service" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Select Service</label>
                <select id="service" name="service" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm">
                  <option value="Cleaning Services">Cleaning Services</option>
                  <option value="Fumigation & Pest Control">Fumigation & Pest Control</option>
                  <option value="Laundry & Dry Cleaning">Laundry & Dry Cleaning</option>
                  <option value="Gardening & Landscaping">Gardening & Landscaping</option>
                  <option value="Transport & Logistics">Transport & Logistics</option>
                  <option value="Fast Food & Catering">Fast Food & Catering</option>
                  <option value="Branding & Printing">Branding & Printing</option>
                  <option value="Mobile Accessories & Gadgets">Mobile Accessories & Gadgets</option>
                  <option value="Fashion Design & Alterations">Fashion Design & Alterations</option>
                  <option value="Other Project">Other Enquiry</option>
                </select>
              </div>

              <div>
                <label for="message" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Message details</label>
                <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="Describe your requirement, location, and timeline..."></textarea>
              </div>

              <button type="submit" id="submit-inquiry-btn" class="w-full btn-whatsapp justify-center text-sm mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                  <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
                </svg>
                Send Inquiry via WhatsApp
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- JS to submit lead via AJAX & launch WhatsApp -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('whatsapp-inquiry-form');
      if (!form) return;

      // Toast function definition
      function showToast(message) {
        let toast = document.getElementById('premium-toast');
        if (toast) toast.remove();

        toast = document.createElement('div');
        toast.id = 'premium-toast';
        toast.className = 'premium-toast-container';
        toast.innerHTML = `
          <div class="premium-toast-content">
            <div class="premium-toast-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="premium-toast-text">${message}</div>
          </div>
        `;
        document.body.appendChild(toast);

        // Trigger reflow for slide-in animation
        toast.offsetHeight;
        toast.classList.add('show');

        // Auto remove
        setTimeout(() => {
          toast.classList.remove('show');
          setTimeout(() => toast.remove(), 400);
        }, 3500);
      }

      form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const btn = document.getElementById('submit-inquiry-btn');
        const originalHtml = btn.innerHTML;
        
        // Activate loading state
        btn.disabled = true;
        btn.innerHTML = `<span class="loading-spinner"></span> Saving Enquiry...`;

        const name = document.getElementById('name').value;
        const email = document.getElementById('email')?.value || '';
        const phone = document.getElementById('phone')?.value || '';
        const service = document.getElementById('service').value;
        const message = document.getElementById('message').value;
        const csrfToken = document.querySelector('input[name="_token"]')?.value || '';

        // Save lead in database
        try {
          const response = await fetch('/contact/inquiry', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ name, email, phone, service, message })
          });
          const result = await response.json();
          if (result.success) {
            showToast("Inquiry saved successfully! Redirecting to WhatsApp...");
          } else {
            showToast("Redirecting to WhatsApp...");
          }
        } catch (err) {
          console.error('Inquiry save log:', err);
          showToast("Redirecting to WhatsApp...");
        }

        // Open WhatsApp and reset form after 1.8 seconds
        setTimeout(() => {
          const baseWhatsAppUrl = "{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}";
          const text = `Hi Asutext! My name is ${name}. I am enquiring about ${service}.${phone ? ' My phone: ' + phone + '.' : ''} Details: ${message}`;
          const targetUrl = `${baseWhatsAppUrl}?text=${encodeURIComponent(text)}`;
          window.open(targetUrl, '_blank');

          form.reset();
          btn.disabled = false;
          btn.innerHTML = originalHtml;
        }, 1800);
      });
    });
  </script>
@endsection
