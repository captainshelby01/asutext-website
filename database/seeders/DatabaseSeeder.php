<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // -1. Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@asutext.com'],
            [
                'name' => 'Asutext Administrator',
                'password' => Hash::make('password123'),
            ]
        );
        // 0. Set up storage directories and copy assets
        $storagePublicPath = storage_path('app/public');
        if (!file_exists($storagePublicPath . '/team')) {
            mkdir($storagePublicPath . '/team', 0755, true);
        }
        if (!file_exists($storagePublicPath . '/portfolio')) {
            mkdir($storagePublicPath . '/portfolio', 0755, true);
        }

        $teamImages = [
            'team-jackson-iwara.jpeg',
            'team-maryann-iwara.jpeg',
            'team-wilcox-wilson.jpeg'
        ];
        foreach ($teamImages as $img) {
            $src = public_path('Images/' . $img);
            $dest = $storagePublicPath . '/team/' . $img;
            if (file_exists($src)) {
                copy($src, $dest);
            }
        }

        $portfolioFiles = [
            'cleaning-floor-polishing.jpg',
            'cleaning-dusting-vacuuming.jpg',
            'cleaning-detail-janitorial.jpg',
            'cleaning-outdoor-deck-video.mp4',
            'cleaning-deck-refurbishing.jpg',
            'transport-freight-cargo.jpg',
            'transport-multimodal-logistics.jpg',
            'catering-restaurant-interior.jpg',
            'catering-small-chops.jpg',
            'branding-custom-caps.jpg',
            'branding-merchandise-boxed.jpg',
            'branding-embroidery-patch.jpg'
        ];
        foreach ($portfolioFiles as $file) {
            $src = public_path('Images/' . $file);
            $dest = $storagePublicPath . '/portfolio/' . $file;
            if (file_exists($src)) {
                copy($src, $dest);
            }
        }

        // 1. Seed Services
        $services = [
            [
                'name' => 'Cleaning Services',
                'description' => 'Home, office, and post-construction cleaning across Lagos. Thorough, professional, and reliable.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Cleaning Services.",
                'sort_order' => 1,
            ],
            [
                'name' => 'Fumigation & Pest Control',
                'description' => 'Safe, effective treatment for homes and businesses. We eliminate pests so you can breathe easy.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Fumigation and Pest Control service.",
                'sort_order' => 2,
            ],
            [
                'name' => 'Laundry & Dry Cleaning',
                'description' => 'Wash, iron, and delivery for individuals and offices. Fresh clothes, zero stress.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Laundry and Dry Cleaning service.",
                'sort_order' => 3,
            ],
            [
                'name' => 'Gardening & Landscaping',
                'description' => 'Professional garden maintenance, lawn care, and landscaping for homes and commercial premises.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Gardening and Landscaping service.",
                'sort_order' => 4,
            ],
            [
                'name' => 'Transport & Logistics',
                'description' => 'Local delivery and haulage. We move your goods safely and on time, anywhere in Nigeria.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Transport and Logistics service.",
                'sort_order' => 5,
            ],
            [
                'name' => 'Fast Food & Catering',
                'description' => 'Meals, small chops, and full event catering. Fresh food, great taste, delivered with care.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Fast Food and Catering service.",
                'sort_order' => 6,
            ],
            [
                'name' => 'Branding & Printing',
                'description' => 'Logo design, banners, business cards, caps, and all promotional materials. Make your brand stand out.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Branding and Printing service.",
                'sort_order' => 7,
            ],
            [
                'name' => 'Mobile Accessories & Gadgets',
                'description' => 'Sales of phones, laptops, TVs, accessories, and repairs. Quality gadgets at competitive prices.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Mobile Accessories and Gadgets.",
                'sort_order' => 8,
            ],
            [
                'name' => 'Fashion Design & Tailoring',
                'description' => 'Custom clothing and alterations for men and women. Style that fits your body, your culture, and your budget. Corporate uniforms welcome.',
                'whatsapp_cta_text' => "Hi, I'm interested in your Fashion Design and Tailoring service.",
                'sort_order' => 9,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['name' => $srv['name']], $srv);
        }

        // 2. Seed Team Members
        $teamMembers = [
            [
                'name' => 'Jackson Jackson Iwara',
                'role' => 'Founder / Managing Director',
                'bio' => "Visionary entrepreneur directing the overall operations and scaling of Asutext Group's multi-service divisions.",
                'image_path' => 'team/team-jackson-iwara.jpeg',
                'sort_order' => 1,
            ],
            [
                'name' => 'Maryann Iwara',
                'role' => 'Executive Director / Co-Founder',
                'bio' => "Co-directing corporate strategies, human resources, and high-level client relations across all service sectors.",
                'image_path' => 'team/team-maryann-iwara.jpeg',
                'sort_order' => 2,
            ],
            [
                'name' => 'Wilcox Wilson',
                'role' => 'Compliance Director',
                'bio' => "Managing legal compliance, regulatory standards, and operational risk management for nationwide logistics.",
                'image_path' => 'team/team-wilcox-wilson.jpeg',
                'sort_order' => 3,
            ],
        ];

        foreach ($teamMembers as $tm) {
            TeamMember::updateOrCreate(['name' => $tm['name']], $tm);
        }

        // 3. Seed Testimonials
        $testimonials = [
            [
                'client_name' => 'Wokcity',
                'client_role' => 'Corporate Client, Lagos',
                'feedback' => 'Asutext delivered an exceptionally thorough cleaning job at our facility. Professional, punctual, and the results spoke for themselves. We continue to use them regularly.',
                'stars' => 5,
            ],
            [
                'client_name' => 'Lamb Court',
                'client_role' => 'Property Management, Lagos',
                'feedback' => 'We engaged Asutext for facility services and were impressed by their attention to detail and dedication to quality. Highly recommended for any corporate environment.',
                'stars' => 5,
            ],
            [
                'client_name' => 'CED Africa',
                'client_role' => 'Corporate Client, Nigeria',
                'feedback' => 'Reliable, professional, and easy to work with. Asutext understands what businesses need and delivers without cutting corners. A trusted partner for us.',
                'stars' => 5,
            ],
        ];

        foreach ($testimonials as $tst) {
            Testimonial::updateOrCreate(['client_name' => $tst['client_name']], $tst);
        }

        // 4. Seed Settings
        $settings = [
            'phone' => '+234 903 766 6399',
            'whatsapp_url' => 'https://wa.me/2349037666399',
            'email' => 'asutextgnigltd@gmail.com',
            'address_lagos' => '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island',
            'address_calabar' => '10 Federal Housing Road, Calabar, Cross-River State',
            'facebook_url' => 'https://www.facebook.com/asutext',
            'youtube_url' => 'https://www.youtube.com/@asutext',
            'twitter_url' => 'https://twitter.com/asutext',
            'seo_title' => 'Asutext Group Nigeria Limited | Cleaning, Laundry, Fumigation & More in Lagos',
            'seo_description' => 'Asutext Group Nigeria Limited, professional cleaning, fumigation, laundry, transport, catering, branding, fashion design and mobile accessories across Lagos Island, Banana Island, and Cross-River State. Call or WhatsApp us today.',
            'seo_keywords' => 'cleaning services Lagos, fumigation Lagos, laundry Lagos, pest control Lagos, cleaning company Nigeria, Asutext Nigeria, branding Lagos, transport logistics Nigeria',
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $val]
            );
        }

                        // 5. Seed Portfolio Items (Work Gallery)
        $srvCleaning   = Service::where('name', 'Cleaning Services')->first();
        $srvFumigation = Service::where('name', 'Fumigation & Pest Control')->first();
        $srvLaundry    = Service::where('name', 'Laundry & Dry Cleaning')->first();
        $srvGardening  = Service::where('name', 'Gardening & Landscaping')->first();
        $srvTransport  = Service::where('name', 'Transport & Logistics')->first();
        $srvCatering   = Service::where('name', 'Fast Food & Catering')->first();
        $srvBranding   = Service::where('name', 'Branding & Printing')->first();
        $srvGadgets    = Service::where('name', 'Mobile Accessories & Gadgets')->first();
        $srvFashion    = Service::where('name', 'Fashion Design & Tailoring')->first();

        $galleryItems = [
            // Branding & Printing
            [
                'service' => $srvBranding,
                'title' => 'Custom 3D Embroidered Baseball Caps',
                'media_type' => 'image',
                'media_path' => 'products/images_PHOTO_2026_06_22_15_21_40.jpg',
            ],
            [
                'service' => $srvBranding,
                'title' => 'Rigid Branded Merchandise Box Sets',
                'media_type' => 'image',
                'media_path' => 'products/images_WhatsApp_Image_2026_06_22_at_15_19_17.jpeg',
            ],
            [
                'service' => $srvBranding,
                'title' => 'High-Density Embroidered Uniform Patches',
                'media_type' => 'image',
                'media_path' => 'products/images_WhatsApp_Image_2026_06_22_at_15_18_59.jpeg',
            ],
            [
                'service' => $srvBranding,
                'title' => 'Custom Screen Printed & Embroidered T-Shirts',
                'media_type' => 'image',
                'media_path' => 'products/images_PHOTO_2026_06_22_15_21_43.jpg',
            ],
            [
                'service' => $srvBranding,
                'title' => 'Metallic Badges & Silver Brand Pendants',
                'media_type' => 'image',
                'media_path' => 'products/images_PHOTO_2026_06_22_15_21_46_2_.jpg',
            ],
            [
                'service' => $srvBranding,
                'title' => 'Branded Silk Scarves & Cravats',
                'media_type' => 'image',
                'media_path' => 'products/images_PHOTO_2026_06_22_15_21_46_1_.jpg',
            ],

            // Fast Food & Catering
            [
                'service' => $srvCatering,
                'title' => 'Fresh Party Small Chops & Pastry Platters',
                'media_type' => 'image',
                'media_path' => 'products/fast food_PHOTO_2026_07_15_23_40_49.jpg',
            ],
            [
                'service' => $srvCatering,
                'title' => 'Gourmet Event Packaged Lunch Boxes',
                'media_type' => 'image',
                'media_path' => 'products/fast food_PHOTO_2026_07_15_23_41_18.jpg',
            ],
            [
                'service' => $srvCatering,
                'title' => 'Executive Buffet & Banquet Catering Setup',
                'media_type' => 'image',
                'media_path' => 'products/fast food_PHOTO_2026_07_15_23_43_29.jpg',
            ],
            [
                'service' => $srvCatering,
                'title' => 'Spicy Peppered Chicken & Gizzard Trays',
                'media_type' => 'image',
                'media_path' => 'products/fast food_PHOTO_2026_07_15_23_42_04.jpg',
            ],

            // Fashion Design & Tailoring
            [
                'service' => $srvFashion,
                'title' => 'Custom Tailored Executive Suit Blazer',
                'media_type' => 'image',
                'media_path' => 'products/fashion_PHOTO_2026_07_15_23_49_54.jpg',
            ],
            [
                'service' => $srvFashion,
                'title' => 'Tailored Traditional & Senator Native Attire',
                'media_type' => 'image',
                'media_path' => 'products/fashion_PHOTO_2026_07_15_23_52_52.jpg',
            ],
            [
                'service' => $srvFashion,
                'title' => 'Custom Branded Polo Uniform Shirts',
                'media_type' => 'image',
                'media_path' => 'products/fashion_PHOTO_2026_07_15_23_52_54.jpg',
            ],
            [
                'service' => $srvFashion,
                'title' => 'Custom Branded Hand-Painted Sneakers',
                'media_type' => 'image',
                'media_path' => 'products/fashion_PHOTO_2026_07_15_23_53_01.jpg',
            ],

            // Cleaning Services
            [
                'service' => $srvCleaning,
                'title' => 'Deep Janitorial & Commercial Floor Cleaning',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_photo_2026_07_15_23_29_04.jpg',
            ],
            [
                'service' => $srvCleaning,
                'title' => 'Commercial Building Cleaning Operations',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_photo_2026_07_15_23_29_08.jpg',
            ],
            [
                'service' => $srvCleaning,
                'title' => 'Office Carpet Vacuuming & Maintenance',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_photo_2026_07_15_23_29_12.jpg',
            ],
            [
                'service' => $srvCleaning,
                'title' => 'High-Speed Floor Buffing & Polishing',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_services_photo_2026_06_22_15_22_06.jpg',
            ],

            // Fumigation & Pest Control
            [
                'service' => $srvFumigation,
                'title' => 'Industrial Fumigation & Disinfection Service',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_photo_2026_07_15_23_53_10.jpg',
            ],
            [
                'service' => $srvFumigation,
                'title' => 'Full PPE Pest Control Specialist Treatment',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning_services_photo_2026_06_22_15_22_07.jpg',
            ],

            // Transport & Logistics
            [
                'service' => $srvTransport,
                'title' => 'Interstate Logistics & Delivery Freight Truck',
                'media_type' => 'image',
                'media_path' => 'portfolio/transport_photo_2026_07_15_23_31_59.jpg',
            ],
            [
                'service' => $srvTransport,
                'title' => 'Heavy Duty Freight Cargo Transport Haulage',
                'media_type' => 'image',
                'media_path' => 'portfolio/transport_photo_2026_07_15_23_32_01.jpg',
            ],
            [
                'service' => $srvTransport,
                'title' => 'Fleet Haulage & Distribution Transit Hub',
                'media_type' => 'image',
                'media_path' => 'portfolio/transport_photo_2026_07_15_23_32_04.jpg',
            ],

            // Mobile Accessories & Gadgets
            [
                'service' => $srvGadgets,
                'title' => 'Smart 4K Ultra-HD TV & Boardroom Display',
                'media_type' => 'image',
                'media_path' => 'products/electronics_PHOTO_2026_07_15_23_42_17.jpg',
            ],
            [
                'service' => $srvGadgets,
                'title' => 'Heavy-Duty 30,000mAh Fast Charge Power Bank',
                'media_type' => 'image',
                'media_path' => 'products/electronics_PHOTO_2026_07_15_23_42_39.jpg',
            ],
        ];

        $orderCount = 1;
        foreach ($galleryItems as $gi) {
            if (!empty($gi['service'])) {
                \App\Models\PortfolioItem::updateOrCreate([
                    'title' => $gi['title'],
                ], [
                    'service_id' => $gi['service']->id,
                    'title' => $gi['title'],
                    'media_type' => $gi['media_type'],
                    'media_path' => $gi['media_path'],
                    'sort_order' => $orderCount++,
                ]);
            }
        }

// 6. Seed Products
        if (!file_exists($storagePublicPath . '/products')) {
            mkdir($storagePublicPath . '/products', 0755, true);
        }

        $products = array (
  0 => 
  array (
    'name' => 'Custom 3D Embroidered Wolf Snapback Cap',
    'category' => 'Branding & Printing',
    'description' => 'Structured 6-panel snapback cap featuring a high-density 3D embroidered Asutext Wolf mascot emblem, contrasting blue visor, and adjustable rear strap.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom 3D Embroidered Wolf Snapback Cap".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_40.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 1,
  ),
  1 => 
  array (
    'name' => 'Branded Army-Green Crewneck T-Shirt',
    'category' => 'Branding & Printing',
    'description' => 'Premium 100% combed cotton crewneck t-shirt in army green with custom chest embroidery and sleeve brand prints.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Branded Army-Green Crewneck T-Shirt".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_42.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 2,
  ),
  2 => 
  array (
    'name' => 'Custom Printed Ocean Blue T-Shirt',
    'category' => 'Branding & Printing',
    'description' => 'Vibrant ocean-blue cotton t-shirt featuring high-definition full-color chest print and comfortable casual fit.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Printed Ocean Blue T-Shirt".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_43.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 3,
  ),
  3 => 
  array (
    'name' => 'Flatbed Printed Matte Black T-Shirt',
    'category' => 'Branding & Printing',
    'description' => 'Sleek matte-black short-sleeved tee with soft-touch screen printed graphics and reinforced neck collar.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Flatbed Printed Matte Black T-Shirt".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_44.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 4,
  ),
  4 => 
  array (
    'name' => 'Charcoal Grey Branded Graphic Tee',
    'category' => 'Branding & Printing',
    'description' => 'Durable charcoal-grey crewneck tee styled with multi-color corporate logo artwork across the front chest.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Charcoal Grey Branded Graphic Tee".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_45_1_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 5,
  ),
  5 => 
  array (
    'name' => 'Branded Summer Poolside Graphic Tee',
    'category' => 'Branding & Printing',
    'description' => 'Breathable lightweight cotton t-shirt tailored for promotional events, sports teams, and beach/pool wear.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Branded Summer Poolside Graphic Tee".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_45.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 6,
  ),
  6 => 
  array (
    'name' => 'Custom Woven Silk Scarf & Cravat',
    'category' => 'Branding & Printing',
    'description' => 'Luxury silk-blend woven neck scarf featuring intricate brand patterns, ideal for corporate uniforms and formal fashion.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Woven Silk Scarf & Cravat".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_46_1_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 7,
  ),
  7 => 
  array (
    'name' => 'Silver Metallic Wolf Pendant Necklace',
    'category' => 'Branding & Printing',
    'description' => 'Custom 3D molded antique-silver metallic pendant with detailed wolf crest engraving on a heavy-duty chain.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Silver Metallic Wolf Pendant Necklace".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_46_2_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 8,
  ),
  8 => 
  array (
    'name' => 'Metallic Shield Badge & Lapel Pin',
    'category' => 'Branding & Printing',
    'description' => 'Polished metallic lapel pin and shield badge crafted with enamel fill for executive recognition and brand identity.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Metallic Shield Badge & Lapel Pin".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_47_1_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 9,
  ),
  9 => 
  array (
    'name' => 'Custom Engraved Jewelry Medallion',
    'category' => 'Branding & Printing',
    'description' => 'Precision-machined metal medallion and jewelry charm designed for brand promotions, awards, and commemorative gifts.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Engraved Jewelry Medallion".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_47.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 10,
  ),
  10 => 
  array (
    'name' => 'Blue & White Dual-Tone Snapback Cap',
    'category' => 'Branding & Printing',
    'description' => 'Two-tone blue and white trucker cap with prominent front patch embroidery and breathable rear mesh panels.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Blue & White Dual-Tone Snapback Cap".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_49_1_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 11,
  ),
  11 => 
  array (
    'name' => 'Custom Branded Gift Box & Cap Set',
    'category' => 'Branding & Printing',
    'description' => 'Deluxe gift package containing custom embroidered caps inside a custom-printed matte black presentation box.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Branded Gift Box & Cap Set".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_49_2_.jpg',
    'is_featured' => true,
    'is_active' => true,
    'sort_order' => 12,
  ),
  12 => 
  array (
    'name' => 'Monochrome Black Embroidered Baseball Cap',
    'category' => 'Branding & Printing',
    'description' => 'All-black structured baseball cap with raised black-on-black logo embroidery for a subtle, high-end look.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Monochrome Black Embroidered Baseball Cap".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_49_3_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 13,
  ),
  13 => 
  array (
    'name' => 'Corporate Promotional Cap Collection Box',
    'category' => 'Branding & Printing',
    'description' => 'Bulk set of multi-colored branded snapback caps supplied in custom branded cardboard storage and display boxes.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Corporate Promotional Cap Collection Box".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_49.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 14,
  ),
  14 => 
  array (
    'name' => 'Smart 4K Ultra-HD TV & Boardroom Display',
    'category' => 'Mobile Accessories & Gadgets',
    'description' => 'Ultra-slim 4K Smart LED TV with built-in Wi-Fi, HDMI/USB ports, and screen mirror capability for home and office boardrooms.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Smart 4K Ultra-HD TV & Boardroom Display".',
    'image_path' => 'products/electronics_PHOTO_2026_07_15_23_42_17.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 15,
  ),
  15 => 
  array (
    'name' => 'Heavy-Duty 30,000mAh Fast Charge Power Bank',
    'category' => 'Mobile Accessories & Gadgets',
    'description' => 'High-capacity power bank with dual USB-C Power Delivery ports, digital LED battery display, and multi-device fast charging.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Heavy-Duty 30,000mAh Fast Charge Power Bank".',
    'image_path' => 'products/electronics_PHOTO_2026_07_15_23_42_39.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 16,
  ),
  16 => 
  array (
    'name' => 'Active Noise-Canceling Wireless Earbuds',
    'category' => 'Mobile Accessories & Gadgets',
    'description' => 'True wireless Bluetooth 5.3 earbuds featuring active noise cancellation, deep bass drivers, and 24-hour battery case.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Active Noise-Canceling Wireless Earbuds".',
    'image_path' => 'products/electronics_PHOTO_2026_07_15_23_43_14.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 17,
  ),
  17 => 
  array (
    'name' => 'Original Brand Mobile Phones & Accessories',
    'category' => 'Mobile Accessories & Gadgets',
    'description' => 'Brand-new sealed smartphones with high-resolution camera systems, fast processors, and original manufacturer accessories.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Original Brand Mobile Phones & Accessories".',
    'image_path' => 'products/electronics_PHOTO_2026_07_15_23_43_17.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 18,
  ),
  18 => 
  array (
    'name' => 'Custom Tailored Executive Suit Blazer',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Single-breasted 2-piece corporate suit blazer tailored with Italian wool fabric, silk lining, and precise slim fit.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Tailored Executive Suit Blazer".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_49_54.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 19,
  ),
  19 => 
  array (
    'name' => 'Bespoke Tailored Underwear & Boxers',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Premium breathable cotton boxers with custom jacquard elastic waistbands designed for maximum day-long comfort.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Bespoke Tailored Underwear & Boxers".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_52_50.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 20,
  ),
  20 => 
  array (
    'name' => 'Senator Native Attire & Kaftan Set',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Refined men\'s Senator native suit crafted with soft cashmere cotton, geometric chest piping, and matching trousers.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Senator Native Attire & Kaftan Set".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_52_52.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 21,
  ),
  21 => 
  array (
    'name' => 'Custom Embroidered Staff Polo Shirts',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Durable pique cotton polo shirt featuring embroidered corporate chest logos and rib-knit sleeve cuffs.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Embroidered Staff Polo Shirts".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_52_54.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 22,
  ),
  22 => 
  array (
    'name' => 'Custom Branded Hand-Painted Sneakers',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Customized leather sneakers featuring custom artwork, branded tongue tags, and durable rubber soles.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Branded Hand-Painted Sneakers".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_01.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 23,
  ),
  23 => 
  array (
    'name' => 'Corporate & Security Field Guard Uniform',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Heavy-duty tactical work shirt and trousers designed for security officers, field staff, and logistics personnel.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Corporate & Security Field Guard Uniform".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_02.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 24,
  ),
  24 => 
  array (
    'name' => 'Corporate Branded Staff Polo Wear',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Professional button-down casual shirt with embroidered chest insignia for corporate field representatives.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Corporate Branded Staff Polo Wear".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_03.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 25,
  ),
  25 => 
  array (
    'name' => 'Traditional African Cultural Outfit',
    'category' => 'Fashion & Bespoke Wear',
    'description' => '3-piece ceremonial Agbada attire detailed with intricate embroidery across the wide sleeves and chest collar.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Traditional African Cultural Outfit".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_04_1_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 26,
  ),
  26 => 
  array (
    'name' => 'Bespoke Genuine Leather Belt',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Handcrafted genuine leather belt with polished alloy buckle, suitable for formal suit trousers and native attire.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Bespoke Genuine Leather Belt".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_04.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 27,
  ),
  27 => 
  array (
    'name' => 'Embroidered Native Agbada Attire',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Rich navy-blue native Kaftan featuring hand-stitched neck embroidery and comfortable tailored trousers.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Embroidered Native Agbada Attire".',
    'image_path' => 'products/fashion_PHOTO_2026_07_15_23_53_08.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 28,
  ),
  28 => 
  array (
    'name' => 'Bespoke Tailored Branded Elastic Boxers',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Comfortable stretch-cotton underwear with custom jacquard-woven elastic waistband featuring your company name.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Bespoke Tailored Branded Elastic Boxers".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_46.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 29,
  ),
  29 => 
  array (
    'name' => 'Custom Branded Low-Top Sneakers',
    'category' => 'Fashion & Bespoke Wear',
    'description' => 'Bespoke printed low-top leather sneakers customized with corporate colors, heel logos, and custom shoelaces.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Custom Branded Low-Top Sneakers".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_21_48.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 30,
  ),
  30 => 
  array (
    'name' => 'Party Small Chops & Fresh Pastry Platter',
    'category' => 'Fast Food & Catering',
    'description' => 'Freshly fried party small chops featuring samosas, spring rolls, mini peppered beef, and puff-puff.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Party Small Chops & Fresh Pastry Platter".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_40_49.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 31,
  ),
  31 => 
  array (
    'name' => 'Gourmet Packaged Event Lunch Box',
    'category' => 'Fast Food & Catering',
    'description' => 'Individual lunch box packed with smokey Jollof rice, fried plantain, grilled chicken, and fresh coleslaw.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Gourmet Packaged Event Lunch Box".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_41_18.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 32,
  ),
  32 => 
  array (
    'name' => 'Spicy Peppered Chicken & Gizzard Tray',
    'category' => 'Fast Food & Catering',
    'description' => 'Sizzling hot tray of peppered chicken wings, gizzard, and spicy plantain dodo for party appetizers.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Spicy Peppered Chicken & Gizzard Tray".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_42_04.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 33,
  ),
  33 => 
  array (
    'name' => 'Executive Event Catering Buffet Tray',
    'category' => 'Fast Food & Catering',
    'description' => 'Full-service buffet chafing dish setup with professional servers for corporate seminars, weddings, and parties.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Executive Event Catering Buffet Tray".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_43_29.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 34,
  ),
  34 => 
  array (
    'name' => 'Crispy Samosa & Spring Roll Party Pack',
    'category' => 'Fast Food & Catering',
    'description' => 'Crispy fried meat samosas and vegetable spring rolls served with spicy chili dipping sauce.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Crispy Samosa & Spring Roll Party Pack".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_43_35.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 35,
  ),
  35 => 
  array (
    'name' => 'Jollof & Fried Rice Catering Combo Box',
    'category' => 'Fast Food & Catering',
    'description' => 'Signature party Jollof rice paired with savory fried rice, fried plantain, and fried turkey or chicken.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Jollof & Fried Rice Catering Combo Box".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_43_44.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 36,
  ),
  36 => 
  array (
    'name' => 'Event Pastry & Refreshment Catering Combo',
    'category' => 'Fast Food & Catering',
    'description' => 'Deluxe refreshment tray loaded with meat pies, sausage rolls, donuts, and chilled fruit drinks.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Event Pastry & Refreshment Catering Combo".',
    'image_path' => 'products/fast food_PHOTO_2026_07_15_23_53_06.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 37,
  ),
  37 => 
  array (
    'name' => 'Partitioned Bento Event Catering Lunch Box',
    'category' => 'Fast Food & Catering',
    'description' => 'Multi-compartment food box packed with a balanced meal including fried rice, plantain, protein, and salad for corporate events.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Partitioned Bento Event Catering Lunch Box".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_05.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 38,
  ),
  38 => 
  array (
    'name' => 'Banquet Hall Event Dining & Catering Package',
    'category' => 'Fast Food & Catering',
    'description' => 'Full event hall dining setup, table settings, buffet stations, and food service staff for large celebrations.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Banquet Hall Event Dining & Catering Package".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_06_1_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 39,
  ),
  39 => 
  array (
    'name' => 'Indoor Restaurant & Cafe Catering Service',
    'category' => 'Fast Food & Catering',
    'description' => 'On-site restaurant dining setup and catered buffet meal packages for corporate lunches and private parties.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Indoor Restaurant & Cafe Catering Service".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_06.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 40,
  ),
  40 => 
  array (
    'name' => 'Gourmet Event Buffet Food Platter',
    'category' => 'Fast Food & Catering',
    'description' => 'Lavish buffet platter consisting of peppered chicken, grilled fish, fried plantain, samosas, and assorted delicacies.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Gourmet Event Buffet Food Platter".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_07_1_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 41,
  ),
  41 => 
  array (
    'name' => 'Party Small Chops & Pastry Combo Pack',
    'category' => 'Fast Food & Catering',
    'description' => 'Bite-sized party small chops including mini spring rolls, samosas, puff-puff, and spicy chicken wings in takeaway boxes.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Party Small Chops & Pastry Combo Pack".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_07_2_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 42,
  ),
  42 => 
  array (
    'name' => 'Executive Plated Gourmet Dinner Meal',
    'category' => 'Fast Food & Catering',
    'description' => 'Chef-prepared plated dinner featuring seasoned grilled protein, specialty rice, and garnishes for VIP dining.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Executive Plated Gourmet Dinner Meal".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_07_3_.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 43,
  ),
  43 => 
  array (
    'name' => 'Wokcity Quick Service Restaurant & Catering',
    'category' => 'Fast Food & Catering',
    'description' => 'Fast-food restaurant storefront and express takeaway catering services for daily office and outdoor meals.',
    'price' => 'Inquire for Quote',
    'whatsapp_cta_text' => 'Hi Asutext! I am interested in purchasing "Wokcity Quick Service Restaurant & Catering".',
    'image_path' => 'products/images_PHOTO_2026_06_22_15_23_07.jpg',
    'is_featured' => false,
    'is_active' => true,
    'sort_order' => 44,
  ),
);
        foreach ($products as $prod) {
            Product::updateOrCreate(['name' => $prod['name']], $prod);
        }
    }
}
