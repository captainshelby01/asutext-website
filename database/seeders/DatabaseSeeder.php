<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
            Service::create($srv);
        }

        // 2. Seed Team Members
        TeamMember::create([
            'name' => 'Jackson Jackson Iwara',
            'role' => 'Founder / Managing Director',
            'bio' => "Visionary entrepreneur directing the overall operations and scaling of Asutext Group's multi-service divisions.",
            'image_path' => 'team/team-jackson-iwara.jpeg',
            'sort_order' => 1,
        ]);
        TeamMember::create([
            'name' => 'Maryann Iwara',
            'role' => 'Executive Director / Co-Founder',
            'bio' => "Co-directing corporate strategies, human resources, and high-level client relations across all service sectors.",
            'image_path' => 'team/team-maryann-iwara.jpeg',
            'sort_order' => 2,
        ]);
        TeamMember::create([
            'name' => 'Wilcox Wilson',
            'role' => 'Compliance Director',
            'bio' => "Managing legal compliance, regulatory standards, and operational risk management for nationwide logistics.",
            'image_path' => 'team/team-wilcox-wilson.jpeg',
            'sort_order' => 3,
        ]);

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
            Testimonial::create($tst);
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
            Setting::create([
                'key' => $key,
                'value' => $val,
            ]);
        }

        // 5. Seed Portfolio Items
        $srvCleaning = Service::where('name', 'Cleaning Services')->first();
        $srvTransport = Service::where('name', 'Transport & Logistics')->first();
        $srvCatering = Service::where('name', 'Fast Food & Catering')->first();
        $srvBranding = Service::where('name', 'Branding & Printing')->first();

        if ($srvCleaning) {
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCleaning->id,
                'title' => 'Floor Polishing & Cleaning',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning-floor-polishing.jpg',
                'sort_order' => 1,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCleaning->id,
                'title' => 'Corporate Dusting & Vacuuming',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning-dusting-vacuuming.jpg',
                'sort_order' => 2,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCleaning->id,
                'title' => 'Detail Janitorial Cleaning',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning-detail-janitorial.jpg',
                'sort_order' => 3,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCleaning->id,
                'title' => 'Outdoor Deck Cleaning',
                'media_type' => 'video',
                'media_path' => 'portfolio/cleaning-outdoor-deck-video.mp4',
                'sort_order' => 4,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCleaning->id,
                'title' => 'Deck Refurbishing',
                'media_type' => 'image',
                'media_path' => 'portfolio/cleaning-deck-refurbishing.jpg',
                'sort_order' => 5,
            ]);
        }

        if ($srvTransport) {
            \App\Models\PortfolioItem::create([
                'service_id' => $srvTransport->id,
                'title' => 'Freight Cargo Haulage',
                'media_type' => 'image',
                'media_path' => 'portfolio/transport-freight-cargo.jpg',
                'sort_order' => 1,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvTransport->id,
                'title' => 'Interstate Logistics',
                'media_type' => 'image',
                'media_path' => 'portfolio/transport-multimodal-logistics.jpg',
                'sort_order' => 2,
            ]);
        }

        if ($srvCatering) {
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCatering->id,
                'title' => 'Restaurant Interior Styling',
                'media_type' => 'image',
                'media_path' => 'portfolio/catering-restaurant-interior.jpg',
                'sort_order' => 1,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvCatering->id,
                'title' => 'Small Chops Platter Catering',
                'media_type' => 'image',
                'media_path' => 'portfolio/catering-small-chops.jpg',
                'sort_order' => 2,
            ]);
        }

        if ($srvBranding) {
            \App\Models\PortfolioItem::create([
                'service_id' => $srvBranding->id,
                'title' => 'Custom Caps Production',
                'media_type' => 'image',
                'media_path' => 'portfolio/branding-custom-caps.jpg',
                'sort_order' => 1,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvBranding->id,
                'title' => 'Quality Merchandise Boxed',
                'media_type' => 'image',
                'media_path' => 'portfolio/branding-merchandise-boxed.jpg',
                'sort_order' => 2,
            ]);
            \App\Models\PortfolioItem::create([
                'service_id' => $srvBranding->id,
                'title' => 'Embroidery & Patch Design',
                'media_type' => 'image',
                'media_path' => 'portfolio/branding-embroidery-patch.jpg',
                'sort_order' => 3,
            ]);
        }
    }
}
