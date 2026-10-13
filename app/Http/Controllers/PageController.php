<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\PortfolioItem;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::all();
        $portfolioItems = PortfolioItem::with('service')
            ->orderBy('sort_order')
            ->get();

        return view('pages.home', compact('services', 'testimonials', 'portfolioItems'));
    }

    public function about()
    {
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('pages.about', compact('teamMembers'));
    }

    public function services()
    {
        $services = [
            (object) [
                'id' => 1,
                'name' => 'Cleaning, Environmental & Facility Services',
                'description' => 'Comprehensive indoor and outdoor care: residential, commercial, industrial fumigation, deep carpet extraction, compound maintenance, laundry & dry cleaning, and professional gardening & landscaping.',
                'whatsapp_cta_text' => 'Hi, I would like to enquire about your Cleaning, Gardening & Facility Services.',
                'route' => route('services.cleaning'),
                'route_label' => 'Explore Scope & Media Gallery',
                'route_color' => 'text-brand-red',
                'type' => 'cleaning',
            ],
            (object) [
                'id' => 2,
                'name' => 'Branding, Printing & Fashion Design',
                'description' => 'Wear your identity. Timeless fashion essentials from signature brown caps, premium tees, and tipped polos to corporate merchandising, logo branding, and bespoke tailoring.',
                'whatsapp_cta_text' => 'Hi, I would like to enquire about your Fashion, Branding & Printing Services.',
                'route' => route('services.fashion'),
                'route_label' => 'Explore Collection & Lookbook',
                'route_color' => 'text-brand-blue',
                'type' => 'fashion',
            ],
            (object) [
                'id' => 3,
                'name' => 'Transport & Logistics',
                'description' => 'Reliable door-to-door transit, airport transfers, corporate fleet rentals, group bus charters, and multi-modal haulage across Lagos, Calabar, Abuja, and nationwide.',
                'whatsapp_cta_text' => 'Hi, I would like to enquire about your Transport & Logistics services.',
                'route' => route('services.transport'),
                'route_label' => 'Explore Fleet & Transit Services',
                'route_color' => 'text-amber-600',
                'type' => 'transport',
            ],
            (object) [
                'id' => 4,
                'name' => 'Fast Food & Catering Services',
                'description' => 'Asutext Fresh Food: freshly prepared gourmet meals, small chops, corporate buffet catering, and event food delivery crafted with hygiene and great taste.',
                'whatsapp_cta_text' => 'Hi, I would like to enquire about your Fast Food & Event Catering.',
                'route' => route('services.fastfood'),
                'route_label' => 'Explore Menu & Catering Services',
                'route_color' => 'text-brand-red',
                'type' => 'catering',
            ],
            (object) [
                'id' => 5,
                'name' => 'Mobile Accessories & Tech Gadgets',
                'description' => 'Smartphones, laptops, home entertainment displays, authentic power accessories, gadget sales, and professional technical diagnostics.',
                'whatsapp_cta_text' => 'Hi, I would like to enquire about your Mobile Accessories & Gadgets.',
                'route' => route('services.electronics'),
                'route_label' => 'Explore Gadgets & Electronics',
                'route_color' => 'text-purple-600',
                'type' => 'gadgets',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function cleaning()
    {
        $serviceCategories = [
            [
                'id' => 'residential',
                'title' => 'Residential Cleaning',
                'tag' => 'Homes & Apartments',
                'badge_color' => 'bg-brand-red text-white',
                'border_accent' => 'border-brand-red',
                'summary' => 'Comprehensive residential cleaning for apartments, duplexes, estates, and private residences across Lagos and beyond.',
                'services' => [
                    ['name' => 'Regular House Cleaning', 'desc' => 'Routine sweeping, mopping, dusting, surface wipe-downs, and room freshening for daily comfort.'],
                    ['name' => 'Deep Cleaning', 'desc' => 'Intensive top-to-bottom scrub-down under furniture, appliance exteriors, tile grout, and hard-to-reach areas.'],
                    ['name' => 'Move-in / Move-out Cleaning', 'desc' => 'Total sanitation and handover preparation ensuring vacant residences are immaculate for new occupants.'],
                    ['name' => 'Post-Construction Cleaning', 'desc' => 'Scraping paint drips, mortar residues, tile film, sawdust evacuation, and heavy construction debris clearing.'],
                ],
            ],
            [
                'id' => 'commercial',
                'title' => 'Commercial / Office Cleaning',
                'tag' => 'Workplaces & Retail',
                'badge_color' => 'bg-brand-blue text-white',
                'border_accent' => 'border-brand-blue',
                'summary' => 'Professional hygiene standards for corporate headquarters, open-plan offices, boardrooms, and customer-facing retail spaces.',
                'services' => [
                    ['name' => 'Daily Office Cleaning', 'desc' => 'Scheduled early morning or evening cleaning cycles to maintain an inspiring, dust-free business atmosphere.'],
                    ['name' => 'Janitorial Services', 'desc' => 'Dedicated on-site janitorial staff managing continuous hygiene, common hallways, pantries, and trash bins.'],
                    ['name' => 'Desk, Floor & Window Cleaning', 'desc' => 'Sanitizing desktop workstations, keyboard areas, internal glass dividers, and polishing floor spaces.'],
                    ['name' => 'Toilet / Washroom Cleaning', 'desc' => 'High-level restroom disinfection, urinal descaling, mirror polishing, and continuous odor eradication.'],
                ],
            ],
            [
                'id' => 'specialized',
                'title' => 'Specialized Cleaning',
                'tag' => 'High-Detail Restoration',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'summary' => 'Targeted treatments using heavy-duty equipment, industrial extractors, degreasers, and specialist chemistry.',
                'services' => [
                    ['name' => 'Bathroom & Toilet Deep Cleaning', 'desc' => 'Deep descaling of hard water stains, grout mold removal, acid-wash detailing, and toilet bowl sanitizing.'],
                    ['name' => 'Kitchen & Degreasing Cleaning', 'desc' => 'Aggressive grease removal from industrial hoods, exhaust fans, cooktop burners, ovens, and backsplashes.'],
                    ['name' => 'Window & Glass Cleaning', 'desc' => 'Streak-free window squeegeeing for high-reach glass panels, showroom vitrines, and facade glazing.'],
                    ['name' => 'Floor Mopping & Polishing', 'desc' => 'Rotary buffing, waxing, and diamond crystalline polishing for terrazzo, ceramic, and marble flooring.'],
                    ['name' => 'Carpet & Rug Cleaning', 'desc' => 'Heavy-duty suction extraction removing embedded grime, pet dander, coffee stains, and deep allergens.'],
                    ['name' => 'Upholstery & Sofa Cleaning', 'desc' => 'Shampooing and steam extraction for fabric sofas, suede recliners, executive chairs, and headboards.'],
                    ['name' => 'Laundry & Professional Dry Cleaning', 'desc' => 'Premium garment wash, stain treatment, gentle fabric care, steam pressing, and scheduled pickup/delivery for residences and corporate staff.'],
                    ['name' => 'Curtain Cleaning', 'desc' => 'On-rail dry vacuuming, dust removal, and fabric refreshing for delicate drapes and heavy blackout curtains.'],
                    ['name' => 'Wall Cleaning', 'desc' => 'Gentle washing of painted walls, scuff-mark eradication, and stain lifting without stripping wall finishes.'],
                ],
            ],
            [
                'id' => 'industrial',
                'title' => 'Industrial Cleaning',
                'tag' => 'Plants & Warehouses',
                'badge_color' => 'bg-amber-600 text-white',
                'border_accent' => 'border-amber-600',
                'summary' => 'Heavy industrial facilities, logistics hubs, and manufacturing sites requiring robust equipment and strict safety compliance.',
                'services' => [
                    ['name' => 'Factory Cleaning', 'desc' => 'Production floor scrub-downs, industrial oil spill degreasing, machinery perimeter sanitation, and dust abatement.'],
                    ['name' => 'Warehouse Cleaning', 'desc' => 'Racking system dusting, broad floor sweeping, loading dock washdowns, and pallet bay clearing.'],
                    ['name' => 'Fumigation & Disinfection', 'desc' => 'Government-approved, non-toxic chemical and non-chemical pest elimination, thermal fogging, and rodent proofing.'],
                ],
            ],
            [
                'id' => 'environmental',
                'title' => 'Environmental Cleaning, Gardening & Landscaping',
                'tag' => 'Gardens, Grounds & Compounds',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'summary' => 'Complete exterior premises maintenance, professional lawn care, landscape design, drainage de-silting, and compound hygiene for private estates and corporate facilities.',
                'services' => [
                    ['name' => 'Lawn Mowing & Edge Trimming', 'desc' => 'Precision grass mowing, curb edge detailing, and seasonal lawn health rejuvenation.'],
                    ['name' => 'Plant Care, Hedge Trimming & Pruning', 'desc' => 'Pruning ornamental shrubs, shaping boundary hedges, tree maintenance, and deadhead removal.'],
                    ['name' => 'Weeding, Mulching & Flowerbed Care', 'desc' => 'Manual weed eradication, soil aerating, nutrient enrichment, and fresh mulch installation.'],
                    ['name' => 'Garden Design & Landscape Beautification', 'desc' => 'Bespoke garden planning, decorative sod laying, stone border integration, and green area enhancement.'],
                    ['name' => 'Compound / Surrounding Cleaning', 'desc' => 'Interlocking paver pressure washing, driveway sweeping, curb cleaning, and perimeter clearing.'],
                    ['name' => 'Dustbin & Waste Disposal Cleaning', 'desc' => 'Dumpster bin pressure cleaning, wheelie bin disinfection, green waste evacuation, and odor neutralisation.'],
                    ['name' => 'Drainage Cleaning & De-Silting', 'desc' => 'Unblocking silted open/covered gutters, sludge evacuation, and flushing to prevent stagnant water.'],
                ],
            ],
            [
                'id' => 'frequency',
                'title' => 'Other Types & Sanitizing Standards',
                'tag' => 'Flexible Schedules & Disinfectants',
                'badge_color' => 'bg-indigo-600 text-white',
                'border_accent' => 'border-indigo-600',
                'summary' => 'Customized recurring service schedules, rapid event cleanups, and hospital-grade sanitization treatments.',
                'services' => [
                    ['name' => 'Daily Cleaning', 'desc' => 'Continuous everyday upkeep ensuring your premises remain perpetually spotless and presentable.'],
                    ['name' => 'Weekly Cleaning', 'desc' => 'Thorough weekly reset that covers all main rooms, kitchens, washrooms, and high-touch areas.'],
                    ['name' => 'Monthly Deep Cleaning', 'desc' => 'Complete monthly overhaul reaching behind heavy appliances, ceiling corners, and neglected areas.'],
                    ['name' => 'One-Time General Cleaning', 'desc' => 'Flexible on-demand single session tailored to your exact scope without long-term commitment.'],
                    ['name' => 'Event / After-Party Cleaning', 'desc' => 'Rapid pre-event venue prep and prompt morning-after trash clearing, bottle disposal, and floor recovery.'],
                    ['name' => 'Sanitizing & Disinfecting (with Zoflora, Bleach)', 'desc' => 'Medical-grade surface disinfection targeting viruses, bacteria, and germs using trusted hospital disinfectants.'],
                ],
            ],
        ];

        $cleaningPhotos = [
            [
                'title' => 'Commercial Vacuuming & Deep Carpet Extraction',
                'category' => 'carpet',
                'category_label' => 'Carpet & Upholstery',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/PHOTO-2026-10-02-13-10-22.jpg'),
                'description' => 'Two uniformed Asutext cleaning specialists deep-vacuuming carpet flooring with heavy-duty Kenwood suction equipment.',
                'badge' => 'Carpet Extraction'
            ],
            [
                'title' => 'Detail Edge & Baseboard Carpet Cleaning',
                'category' => 'carpet',
                'category_label' => 'Carpet & Upholstery',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/PHOTO-2026-10-02-13-10-25.jpg'),
                'description' => 'Precision nozzle suction on perimeter baseboards, corner joints, and under-bed carpet areas.',
                'badge' => 'Edge Detailing'
            ],
            [
                'title' => 'Residential Living Room & Salon Cleaning Team',
                'category' => 'residential',
                'category_label' => 'Residential Cleaning',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/PHOTO-2026-07-15-23-29-08.jpg'),
                'description' => 'Fully equipped Asutext residential crew with vacuum units, floor mops, and safety workwear.',
                'badge' => 'Residential Crew'
            ],
            [
                'title' => 'Commercial Floor Scrubbing & Window Cleaning',
                'category' => 'commercial',
                'category_label' => 'Commercial & Janitorial',
                'theme' => 'commercial',
                'url' => asset('images/Cleaning/PHOTO-2026-07-15-23-29-04.jpg'),
                'description' => 'High-power rotary scrubber for commercial showroom floors, plus professional window squeegee operations.',
                'badge' => 'Commercial & Janitorial'
            ],
            [
                'title' => 'Restroom Deep Sanitization & Industrial Vacuuming',
                'category' => 'specialized',
                'category_label' => 'Specialized Cleaning',
                'theme' => 'commercial',
                'url' => asset('images/Cleaning/PHOTO-2026-07-15-23-29-12.jpg'),
                'description' => 'Multi-technician washroom descaling, porcelain disinfecting, and backpack HEPA vacuuming.',
                'badge' => 'Restroom Sanitizing'
            ],
            [
                'title' => 'High-Speed Floor Buffing & Polishing',
                'category' => 'specialized',
                'category_label' => 'Specialized Cleaning',
                'theme' => 'commercial',
                'url' => asset('Images/cleaning-floor-polishing.jpg'),
                'description' => 'Rotary floor machine restoring brilliant gloss and protective seal to tiled surfaces.',
                'badge' => 'Floor Buffing'
            ],
            [
                'title' => 'Corporate Janitorial Dusting & Maintenance',
                'category' => 'commercial',
                'category_label' => 'Commercial Cleaning',
                'theme' => 'commercial',
                'url' => asset('Images/cleaning-dusting-vacuuming.jpg'),
                'description' => 'Executive office vacuuming, high dusting, and surface polishing.',
                'badge' => 'Office Janitorial'
            ],
            [
                'title' => 'Outdoor Deck & Compound Washdown',
                'category' => 'environmental',
                'category_label' => 'Environmental Cleaning',
                'theme' => 'commercial',
                'url' => asset('Images/cleaning-deck-refurbishing.jpg'),
                'description' => 'Compound washdown, algae removal, and outdoor timber/paver restoration.',
                'badge' => 'Compound Restoration'
            ],
            [
                'title' => 'Asutext Cleaning Division Corporate Profile',
                'category' => 'credentials',
                'category_label' => 'Company Profile',
                'theme' => 'credentials',
                'url' => asset('images/Cleaning/PHOTO-2026-07-15-23-29-15.jpg'),
                'description' => 'Official corporate credentials, registered under CAMA 2020 (RC 7139195) with Lagos & Calabar hubs.',
                'badge' => 'Corporate Credentials'
            ],
            [
                'title' => 'Official Cleaning & Fumigation Service Flyer',
                'category' => 'credentials',
                'category_label' => 'Service Scope',
                'theme' => 'credentials',
                'url' => asset('images/Cleaning/PHOTO-2026-07-15-23-53-10.jpg'),
                'description' => 'Asutext & G Nigeria Limited service breakdown and direct consultation contacts.',
                'badge' => 'Official Flyer'
            ],
        ];

        $cleaningVideos = [
            [
                'title' => 'On-Site Deep Cleaning Setup & Initial Suction',
                'phase' => 'phase-1',
                'phase_title' => 'Phase 1: Setup & Surface Prep',
                'category_label' => 'Surface Preparation',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-07-52.mp4'),
                'description' => 'Unpacking industrial Kenwood extractors, testing suction, and beginning perimeter sweep.',
            ],
            [
                'title' => 'Surface Preparation & Loose Dust Extraction',
                'phase' => 'phase-1',
                'phase_title' => 'Phase 1: Setup & Surface Prep',
                'category_label' => 'Debris Clearing',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-21(1).mp4'),
                'description' => 'Pre-vacuuming loose grit and fine particulates before intensive extraction.',
            ],
            [
                'title' => 'Complete Room Carpet Deep Extraction in Action',
                'phase' => 'phase-1',
                'phase_title' => 'Phase 1: Setup & Surface Prep',
                'category_label' => 'Full-Suite Sweep',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-21.mp4'),
                'description' => 'Full-width systematic extraction pass pulling embedded dirt from deep within fibers.',
            ],
            [
                'title' => 'Rapid High-Power Suction & Sediment Clearing',
                'phase' => 'phase-1',
                'phase_title' => 'Phase 1: Setup & Surface Prep',
                'category_label' => 'High-Airflow Suction',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-25.mp4'),
                'description' => 'Heavy motor suction removing heavy sediment and allergens without soaking.',
            ],
            [
                'title' => 'Dual Specialist Simultaneous Deep Detailing',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'Team Detailing',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-22.mp4'),
                'description' => 'Two uniformed technicians coordinating side-by-side to ensure zero blind spots.',
            ],
            [
                'title' => 'Precision Carpet Edge & Crevice Wand Detailing',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'Corner & Edge Care',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-08-16.mp4'),
                'description' => 'Specialized narrow crevice wand extracting trapped dust along skirting boards.',
            ],
            [
                'title' => 'Bed Frame & Furniture Perimeter Vacuuming',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'Furniture Joints',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-23.mp4'),
                'description' => 'Careful cleaning around headboards, bedframes, and dresser legs.',
            ],
            [
                'title' => 'Thorough Vacuuming Under Baseboards & Low Clearances',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'Low Clearance Areas',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-24.mp4'),
                'description' => 'Deep reach under beds and low fixtures where hidden dander settles.',
            ],
            [
                'title' => 'Targeted High-Traffic Footway Extraction',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'High-Traffic Pathways',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-24(1).mp4'),
                'description' => 'Targeted multi-pass suction rejuvenating compressed high-traffic zones.',
            ],
            [
                'title' => 'Full Bedroom Suite Deep Extraction Routine',
                'phase' => 'phase-2',
                'phase_title' => 'Phase 2: Precision Detailing',
                'category_label' => 'Full Suite Detailing',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-26(1).mp4'),
                'description' => 'Methodical grid-pattern extraction restoring fresh indoor air quality.',
            ],
            [
                'title' => 'Master Bedroom Skirting Board & Edge Sanitization',
                'phase' => 'phase-3',
                'phase_title' => 'Phase 3: Inspection & Finish',
                'category_label' => 'Edge Sanitization',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-26.mp4'),
                'description' => 'Final edge sanitizing pass with hospital-grade disinfectant solution.',
            ],
            [
                'title' => 'Corner Detailing Spot Check & Inspection',
                'phase' => 'phase-3',
                'phase_title' => 'Phase 3: Inspection & Finish',
                'category_label' => 'Quality Inspection',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-23(1).mp4'),
                'description' => 'Supervisor quality check confirming zero remaining dirt or dust rings.',
            ],
            [
                'title' => 'Final Walkthrough & Plush Fiber Quality Restoration',
                'phase' => 'phase-3',
                'phase_title' => 'Phase 3: Inspection & Finish',
                'category_label' => 'Fiber Restoration',
                'theme' => 'residential',
                'url' => asset('images/Cleaning/VIDEO-2026-10-02-13-10-27.mp4'),
                'description' => 'Complete room inspection with plush carpet texture and refreshed room ambiance.',
            ],
            [
                'title' => 'Deck Scrubbing & High-Pressure Washdown',
                'phase' => 'phase-3',
                'phase_title' => 'Phase 3: Inspection & Finish',
                'category_label' => 'Exterior Restoration',
                'theme' => 'commercial',
                'url' => asset('Images/cleaning-outdoor-deck-video.mp4'),
                'description' => 'Exterior compound washdown restoring wooden decking and outdoor patio surfaces.',
            ],
        ];

        return view('pages.cleaning', compact('serviceCategories', 'cleaningPhotos', 'cleaningVideos'));
    }

    public function portfolio()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $portfolioItems = PortfolioItem::with('service')->orderBy('sort_order')->get();
        return view('pages.portfolio', compact('services', 'portfolioItems'));
    }

    public function team()
    {
        return redirect()->to(route('about') . '#team');
    }

    public function coverage()
    {
        return redirect()->to(route('contact') . '#coverage');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products(Request $request)
    {
        $selectedCategory = $request->query('category');
        
        $preferredOrder = [
            'Branding & Printing',
            'Mobile Accessories & Gadgets',
            'Fashion & Bespoke Wear',
            'Fast Food & Catering',
        ];

        $existingCategories = Product::where('is_active', true)
            ->pluck('category')
            ->unique()
            ->toArray();

        $categories = array_values(array_unique(array_merge(
            array_intersect($preferredOrder, $existingCategories),
            array_diff($existingCategories, $preferredOrder)
        )));

        $query = Product::where('is_active', true)->orderBy('sort_order', 'asc');

        if ($selectedCategory) {
            $query->where('category', $selectedCategory);
        }

        $products = $query->get();

        return view('pages.products', compact('products', 'categories', 'selectedCategory'));
    }

    public function fashion()
    {
        $collections = [
            [
                'id' => 'headwear',
                'name' => 'HEADWEAR',
                'title' => 'Signature Caps & Face Caps',
                'subtitle' => 'Jackson 5 caps, classic snapbacks, bucket hats & custom headpieces',
                'tag' => 'Signature Style',
                'badge_color' => 'bg-amber-600 text-white',
                'border_accent' => 'border-amber-600',
                'desc' => 'Iconic headwear designed to complement any style. Featuring our famous signature brown caps, structured face caps, and custom embroidered pieces made from premium canvas and cotton twill.',
                'image' => asset('images/Fashion/PHOTO-2026-10-02-13-29-54.jpg'),
                'items' => [
                    'Signature Brown Jackson 5 Caps',
                    'Structured Flat-Brim & Curve Face Caps',
                    'Embroidered Monogram Snapbacks',
                    'Breathable Casual Streetwear Caps',
                ],
            ],
            [
                'id' => 'apparel',
                'name' => 'APPAREL',
                'title' => 'T-Shirts, Polos, Long Sleeves & Sweaters',
                'subtitle' => 'Everyday luxury cottons, graphic tees, tipped collar polos & knit sweaters',
                'tag' => 'Core Essentials',
                'badge_color' => 'bg-brand-red text-white',
                'border_accent' => 'border-brand-red',
                'desc' => 'Tailored comfort using 100% heavyweight comb-spun cotton and luxury pique knit. Bold statement graphics, clean typography, and timeless colorways engineered for all-day comfort and confidence.',
                'image' => asset('images/Fashion/PHOTO-2026-10-02-13-38-51.jpg'),
                'items' => [
                    'Graphic & Slogan Premium T-Shirts (Now or Never, Move On, Be Kind)',
                    'Classic Contrast-Tipped Pique Polo Shirts',
                    'Cozy Crewneck Sweaters & Fleeces',
                    'Premium Long-Sleeve Casual Tops',
                ],
            ],
            [
                'id' => 'footwear',
                'name' => 'FOOTWEAR',
                'title' => 'Premium Shoes & Sneakers',
                'subtitle' => 'Handcrafted loafers, luxury suede driving shoes & contemporary sneakers',
                'tag' => 'Step In Luxury',
                'badge_color' => 'bg-brand-blue text-white',
                'border_accent' => 'border-brand-blue',
                'desc' => 'Handcrafted footwear built with high-grade leathers, plush cushioned footbeds, and durable soles. From Italian-inspired tassel loafers to sharp formal lace-ups and streetwear kicks.',
                'image' => asset('images/Fashion/PHOTO-2026-07-15-23-52-50.jpg'),
                'items' => [
                    'Multi-Color Suede Moccasins & Loafers',
                    'Formal Bespoke Leather Oxford Shoes',
                    'Clean Minimalist White & Colorway Sneakers',
                    'Slip-On Driving Shoes with Cushioned Insoles',
                ],
            ],
            [
                'id' => 'innerwear',
                'name' => 'INNERWEAR',
                'title' => 'Quality Boxers & Essentials',
                'subtitle' => 'Breathable stretch organic cotton, seamless stitching & anti-chafe bands',
                'tag' => 'Everyday Comfort',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'desc' => 'The foundation of daily confidence. Crafted from ultra-breathable stretch modal and comb-spun cotton with stay-put waistbands that deliver pure comfort from morning till night.',
                'image' => asset('images/Fashion/PHOTO-2026-10-02-13-38-43(1).jpg'),
                'items' => [
                    'Premium Combed Cotton Boxers & Trunks',
                    'Moisture-Wicking Elastic Waistband Essentials',
                    'Multi-Pack Everyday Stretch Undershirts',
                    'Seamless Anti-Chafe Fit Lounge Shorts',
                ],
            ],
            [
                'id' => 'accessories',
                'name' => 'ACCESSORIES',
                'title' => 'Eyeglasses, Rings & Timepieces',
                'subtitle' => 'UV400 sunglasses, statement rings, luxury belts & luxury timepieces',
                'tag' => 'Refined Details',
                'badge_color' => 'bg-purple-600 text-white',
                'border_accent' => 'border-purple-600',
                'desc' => 'The finishing touch to your signature look. Premium polarized eyeglasses, designer sunglasses, iced-out and engraved signet rings, full-grain leather belts, and luxury timepieces.',
                'image' => asset('images/Fashion/PHOTO-2026-07-15-23-53-08.jpg'),
                'items' => [
                    'Designer UV-Protection Eyeglasses & Shades',
                    'Stainless Steel & Silver-Plated Statement Rings',
                    'Full-Grain Leather Belts with Custom Buckles',
                    'Luxury Chronograph & Casual Watches',
                ],
            ],
            [
                'id' => 'lifestyle',
                'name' => 'LIFESTYLE',
                'title' => 'Bedroom Sofas & Home Comfort',
                'subtitle' => 'Luxury accent chairs, lounge recliners, throw pillows & living aesthetic',
                'tag' => 'Home Aesthetic',
                'badge_color' => 'bg-slate-800 text-white',
                'border_accent' => 'border-slate-800',
                'desc' => 'Extending personal style into your personal space. Bespoke upholstered bedroom sofas, ergonomic lounge chairs, and cozy home accessories designed with the same obsessive eye for quality.',
                'image' => asset('images/Fashion/PHOTO-2026-07-15-23-49-54.jpg'),
                'items' => [
                    'Velvet & Linen Bedroom Accent Sofas',
                    'Ergonomic Reading Chairs & Ottomans',
                    'Designer Throw Pillows & Luxury Throws',
                    'Custom Upholstery Tailoring for Home Spaces',
                ],
            ],
        ];

        $whyAsutext = [
            [
                'title' => 'Original Designs',
                'desc' => 'Exclusive custom graphics, signature monograms, and distinctive silhouettes that make you stand out with authenticity.',
                'icon' => '🎨',
            ],
            [
                'title' => 'Premium Quality Fabric',
                'desc' => '100% heavyweight comb-spun cotton, pique knits, and premium leathers chosen for durability, softness, and vibrant longevity.',
                'icon' => '🧵',
            ],
            [
                'title' => 'Attention To Detail',
                'desc' => 'Precision stitching, reinforced seams, high-definition embroidery, and scratch-resistant hardware across every piece.',
                'icon' => '✨',
            ],
            [
                'title' => 'Comfort Meets Style',
                'desc' => 'Tailored cuts designed for effortless movement, all-day breathability, and versatile wear anywhere, anytime.',
                'icon' => '🌟',
            ],
            [
                'title' => 'Trusted By Hundreds',
                'desc' => 'Worn by hundreds of satisfied clients across Lagos, Calabar, and nationwide who value refined everyday luxury.',
                'icon' => '🤝',
            ],
        ];

        // Gather all fashion photo assets
        $fashionPhotos = [
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-51.jpg'), 'title' => 'Jesus The Way, The Truth, The Life Oversized Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Heavyweight Streetwear'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-47.jpg'), 'title' => 'Jesus Is King Cross Graphic Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Premium Cotton'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-18.jpg'), 'title' => 'Now Or Never Bold Statement Tee in Mustard', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Exclusive Drop'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-26-38.jpg'), 'title' => 'Move On Active Runner Silhouette Black Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Athleisure'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-24-22.jpg'), 'title' => "Don't Panic! Street Comic Graphic Tee", 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Urban Casual'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-35.jpg'), 'title' => "Don't Get Attached Character Art Tee", 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Graphic Pop'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-43(1).jpg'), 'title' => 'Relax Cursive Monogram Mustard Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Lounge Cut'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-41.jpg'), 'title' => 'Good Vibes Palm Sunset Graphic Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Summer Edition'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-40.jpg'), 'title' => 'WTF! Pop Culture Comic Splash Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Comic Art'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-33.jpg'), 'title' => 'I See Yu! Sneak Peek Face Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Statement Tee'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-55.jpg'), 'title' => 'Be Kind Bee Embroidery Style Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Artisan Tee'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-30-00.jpg'), 'title' => 'He! DJ Beat Performer Graphic Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Music Edition'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-30-10.jpg'), 'title' => 'Work Hard Dream Big Typography Tee', 'category' => 'Apparel', 'theme' => 'apparel', 'tag' => 'Inspirational'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-29-54.jpg'), 'title' => 'Bad Boys Baseball Collar Cream Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Signature Polo'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-56.jpg'), 'title' => 'Asutext Minimalist Chest Triangle Stripe Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Modern Cut'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-54(1).jpg'), 'title' => 'Dreams Do Not Work Unless You Do Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Contrast Collar'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-48.jpg'), 'title' => 'Dreams Do Not Work Two-Tone Polo (Black/White)', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Smart Casual'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-50.jpg'), 'title' => 'Stronger Than Your Excuses Bottle Green Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Athletic Polo'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-35-48.jpg'), 'title' => "Boys Don't Cry Bold Red/White Emerald Polo", 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Designer Polo'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-52.jpg'), 'title' => 'Born To Play Basketball Tri-Color Panel Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Sporty Luxe'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-57.jpg'), 'title' => 'Asutext Soccer Club White & Forest Green Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Club Edition'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-38-53.jpg'), 'title' => 'Open-Collar Black Textured V-Polo', 'category' => 'Headwear & Polos', 'theme' => 'headwear', 'tag' => 'Bespoke Knit'],
            ['url' => asset('images/Fashion/PHOTO-2026-10-02-13-30-04.jpg'), 'title' => 'Asutext Global Fashion Capitals Monogram', 'category' => 'Branding & Monogram', 'theme' => 'branding', 'tag' => 'Paris / Calabar / Lagos'],
            ['url' => asset('images/Fashion/PHOTO-2026-07-15-23-52-50.jpg'), 'title' => 'Suits, Evening Gowns, Suede Loafers & Denim Collection', 'category' => 'Full Wardrobe', 'theme' => 'footwear', 'tag' => 'Bespoke & Footwear'],
            ['url' => asset('images/Fashion/PHOTO-2026-07-15-23-53-08.jpg'), 'title' => 'Jewelry, Luxury Timepieces, Belts & Bespoke Tailoring', 'category' => 'Accessories', 'theme' => 'accessories', 'tag' => 'Fashion Week Services'],
            ['url' => asset('images/Fashion/PHOTO-2026-07-15-23-49-54.jpg'), 'title' => 'Elegance & Style Runway Fashion Project', 'category' => 'Runway & Proposal', 'theme' => 'lifestyle', 'tag' => 'Haute Couture'],
        ];

        return view('pages.fashion', compact('collections', 'whyAsutext', 'fashionPhotos'));
    }

    public function fastFood()
    {
        $categories = [
            [
                'id' => 'daily-specials',
                'name' => 'DAILY RESTAURANT & FAST FOOD',
                'title' => 'Signature Rice Dishes & Daily Chef Specials',
                'subtitle' => 'Smoky Jollof, Fried Rice, Chicken, Beef & Traditional Delicacies',
                'tag' => 'Daily Dining & Takeout',
                'badge_color' => 'bg-brand-red text-white',
                'border_accent' => 'border-brand-red',
                'desc' => 'Made fresh every single morning with authentic local spices, premium basmati & long-grain rice, and tender flame-grilled proteins. Available for eat-in, takeaway, and doorstep delivery.',
                'image' => asset('images/fast-food/PHOTO-2026-07-15-23-40-49.jpg'),
                'items' => [
                    'Party Smoky Jollof Rice with Fried Plantain (Dodo)',
                    'Special Oriental & Continental Fried Rice with Shrimps',
                    'Asun, Peppered Turkey, Grilled Crispy Chicken & Beef Suya',
                    'Traditional Soups (Egusi, Edikang Ikong, Afang & Oha) with Swallow',
                    'Executive Lunch Delivery Packs for Offices & Corporate Staff',
                ],
            ],
            [
                'id' => 'small-chops',
                'name' => 'FINGER FOODS & PLATTERS',
                'title' => 'Small Chops & Cocktail Bites',
                'subtitle' => 'Samosas, Spring Rolls, Puff-Puff, Gizzard & Barbecue Wings',
                'tag' => 'Finger Foods & Platters',
                'badge_color' => 'bg-amber-600 text-white',
                'border_accent' => 'border-amber-600',
                'desc' => 'Golden-fried pastries and succulent skewers tailored for board meetings, weekend gatherings, cocktail parties, birthdays, and VIP finger food lounges.',
                'image' => asset('images/catering-small-chops.jpg'),
                'items' => [
                    'Crispy Beef & Chicken Samosas with Sweet Chili Dip',
                    'Vegetable & Minced Meat Spring Rolls',
                    'Puff-Puff (Classic, Peppered & Cinnamon-Glazed)',
                    'Spicy Peppered Gizzard Skewers & Peppered Snails',
                    'Asun Platters (Spicy Chopped Goat Meat with Onions)',
                    'Assorted Cocktail Small Chops Boxes (Single, Duo & Party Packs)',
                ],
            ],
            [
                'id' => 'event-catering',
                'name' => 'EVENT & BUFFET CATERING',
                'title' => 'Weddings, Corporate & Milestone Catering',
                'subtitle' => 'Live cooking stations, outdoor buffet, uniformed servers & elegant banquet setup',
                'tag' => 'Banquet & Events',
                'badge_color' => 'bg-brand-blue text-white',
                'border_accent' => 'border-brand-blue',
                'desc' => 'Full-service catering for guest lists from 50 to 2,500+. We provide complete chafing dish setups, polished culinary presentation, synchronized serving staff, and menu customization.',
                'image' => asset('images/fast-food/PHOTO-2026-07-15-23-41-18.jpg'),
                'items' => [
                    'Lavish Wedding Receptions & Traditional Engagements',
                    'Annual Corporate General Meetings, Conferences & Retreats',
                    'Buffet Stations with Chafing Warmers & Custom Plating',
                    'Synchronized Wait Staff, Table Service & Beverage Attendants',
                    'Multi-Course VIP Plated Service for Executive Dinners',
                ],
            ],
            [
                'id' => 'outdoor-bbq',
                'name' => 'OUTDOOR GRILLS & BBQ',
                'title' => 'Live Grills, Shawarma & Smokehouse Delights',
                'subtitle' => 'Freshly grilled fish, suya skewers, loaded shawarmas & burger stations',
                'tag' => 'Grill Station',
                'badge_color' => 'bg-red-700 text-white',
                'border_accent' => 'border-red-700',
                'desc' => 'Bring the intoxicating aroma of sizzling hot grills directly to your venue. Our pitmasters grill live on-site with signature marinade recipes and spicy pepper rubs.',
                'image' => asset('images/fast-food/PHOTO-2026-07-15-23-42-04.jpg'),
                'items' => [
                    'Live Grilled Whole Croaker & Catfish with Yam Chips & Plantain',
                    'Signature Beef & Chicken Suya with Fresh Onions & Cabbage Slaw',
                    'Double-Sausage Jumbo Shawarma with Creamy Spiced Sauce',
                    'Smoked Pork Ribs, Grilled BBQ Chicken Quarters & Sausages',
                    'Custom Pop-Up Grill Booths for Festivals, Fairs & Private Parties',
                ],
            ],
            [
                'id' => 'corporate-lunch',
                'name' => 'CORPORATE PACKAGING & LUNCHES',
                'title' => 'Hygienic Bento Boxes & Scheduled Office Meals',
                'subtitle' => 'Tamper-evident meal bowls, customized branding & on-time pantry delivery',
                'tag' => 'Office Lunches',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'desc' => 'Keep your corporate workforce energized with our hygienic, scheduled office lunch delivery plans. Packaged in premium microwavable bento boxes with branded cutlery and sealed drinks.',
                'image' => asset('images/catering-food-packaging.jpg'),
                'items' => [
                    'Daily & Weekly Corporate Subscriptions with Invoicing',
                    'Leak-Proof, Food-Grade Microwavable Packaging',
                    'Customized Co-Branded Box Stickers for Corporate Retreats',
                    'Healthy Options: Stir-Fries, Steamed Vegetables & Fresh Juices',
                    'Dedicated Fleet Delivery with Guaranteed Lunch-Hour Timing',
                ],
            ],
            [
                'id' => 'drinks-desserts',
                'name' => 'REFRESHMENTS & DESSERTS',
                'title' => 'Cocktails, Mocktails & Sweet Treats',
                'subtitle' => 'Chilled zobo, Chapman, freshly pressed juices & dessert cups',
                'tag' => 'Bar & Sweet Treats',
                'badge_color' => 'bg-purple-600 text-white',
                'border_accent' => 'border-purple-600',
                'desc' => 'Complete your meal or event setup with artisanal thirst-quenchers, refreshing traditional brews, mocktail stations, and individual dessert shooters.',
                'image' => asset('images/fast-food/PHOTO-2026-07-15-23-43-29.jpg'),
                'items' => [
                    'Artisanal Zobo with Ginger, Pineapple & Mint Infusions',
                    'Signature Chapman & Fruity Virgin Mojitos',
                    'Freshly Squeezed Citrus, Tiger Nut Milk & Fruit Smoothies',
                    'Mini Cupcakes, Parfaits & Gourmet Fruit Skewers',
                    'Mobile Bartender & Beverage Cooling Station Setup',
                ],
            ],
        ];

        $whyAsutextFood = [
            [
                'title' => 'Strict Hygiene & Food Safety',
                'desc' => 'Our kitchens strictly observe international hygiene protocols, sterile food-grade packaging, and certified health standards from prep to delivery.',
                'icon' => '🛡️',
            ],
            [
                'title' => 'Chef-Crafted Flavours',
                'desc' => 'Prepared by seasoned executive chefs using premium spices, fresh farm-sourced vegetables, and top-grade proteins for unforgettable taste.',
                'icon' => '👨‍🍳',
            ],
            [
                'title' => 'Punctual Hot Delivery',
                'desc' => 'Equipped with thermal insulated food transport carriers to ensure meals arrive piping hot, fresh, and exactly on your event schedule.',
                'icon' => '⏱️',
            ],
            [
                'title' => 'Custom Menus for Any Budget',
                'desc' => 'From intimate 10-person private dinners to 2,000-guest carnival receptions, we tailor menus, portions, and pricing to match your event goals.',
                'icon' => '📋',
            ],
            [
                'title' => 'End-to-End Event Support',
                'desc' => 'We supply elegant chafing gear, melamine and porcelain tableware, custom buffet decor, and professionally dressed banquet servers.',
                'icon' => '✨',
            ],
        ];

        // Gather all fast food and catering photo assets
        $foodPhotos = [
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-40-49.jpg'),
                'title' => 'Fresh Gourmet Rice & Protein Platter',
                'category' => 'Rice & Main Meals',
                'theme' => 'mains',
                'tag' => 'Daily Special',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-41-18.jpg'),
                'title' => 'Executive Plated Dining & Banquet Service',
                'category' => 'Event Plating',
                'theme' => 'events',
                'tag' => 'Banquet Service',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-42-04.jpg'),
                'title' => 'Sizzling Peppered Delicacies & Flame Grills',
                'category' => 'Grills & Delicacies',
                'theme' => 'grills',
                'tag' => 'Signature Grill',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-43-29.jpg'),
                'title' => 'Artisanal Refreshments & Meal Pairings',
                'category' => 'Refreshments',
                'theme' => 'drinks',
                'tag' => 'Chilled Beverages',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-43-35.jpg'),
                'title' => 'Freshly Cooked Savoury Entrees & Sides',
                'category' => 'Rice & Main Meals',
                'theme' => 'mains',
                'tag' => 'Chef Entree',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-43-44.jpg'),
                'title' => 'Specialty Tasting Dish & Gourmet Plating',
                'category' => 'Event Plating',
                'theme' => 'events',
                'tag' => 'Gourmet Plating',
            ],
            [
                'url' => asset('images/fast-food/PHOTO-2026-07-15-23-53-06.jpg'),
                'title' => 'Asutext Fast Food & Catering Project Showcase',
                'category' => 'Catering Showcase',
                'theme' => 'events',
                'tag' => 'Full Service',
            ],
            [
                'url' => asset('images/catering-small-chops.jpg'),
                'title' => 'Golden Crispy Small Chops & Finger Foods',
                'category' => 'Finger Foods & Small Chops',
                'theme' => 'finger-foods',
                'tag' => 'Party Essential',
            ],
            [
                'url' => asset('images/catering-event-food.jpg'),
                'title' => 'Lavish Event Buffet Spread & Chafing Stations',
                'category' => 'Event Catering',
                'theme' => 'events',
                'tag' => 'Buffet Spread',
            ],
            [
                'url' => asset('images/catering-food-packaging.jpg'),
                'title' => 'Hygienic Tamper-Proof Bento Box Packaging',
                'category' => 'Corporate Packaging',
                'theme' => 'packaging',
                'tag' => 'Office Lunches',
            ],
            [
                'url' => asset('images/catering-interior-dining.jpg'),
                'title' => 'Comfortable Dining Space & Ambiance',
                'category' => 'Restaurant Ambiance',
                'theme' => 'ambiance',
                'tag' => 'Dine In',
            ],
            [
                'url' => asset('images/catering-premium-plating.jpg'),
                'title' => 'Chef Premium Plating & Presentation',
                'category' => 'Gourmet Plating',
                'theme' => 'events',
                'tag' => 'Fine Dining',
            ],
            [
                'url' => asset('images/catering-restaurant-frontage.jpg'),
                'title' => 'Asutext Fast Food & Restaurant Facility Frontage',
                'category' => 'Facility & Frontage',
                'theme' => 'ambiance',
                'tag' => 'Location',
            ],
            [
                'url' => asset('images/catering-restaurant-interior.jpg'),
                'title' => 'Welcoming Customer Dining Hall & Service Counter',
                'category' => 'Restaurant Ambiance',
                'theme' => 'ambiance',
                'tag' => 'Customer Hall',
            ],
        ];

        return view('pages.fast-food', compact('categories', 'whyAsutextFood', 'foodPhotos'));
    }

    public function electronics()
    {
        $categories = [
            [
                'id' => 'smartphones-tablets',
                'name' => 'SMARTPHONES & TABLETS',
                'title' => 'Flagship Phones, iPads & Mobile Tablets',
                'subtitle' => 'Apple iPhone, Samsung Galaxy, Google Pixel & Android Devices',
                'tag' => 'Mobile Phones',
                'badge_color' => 'bg-brand-red text-white',
                'border_accent' => 'border-brand-red',
                'desc' => 'Genuine, brand-new and certified pristine pre-owned smartphones and tablets. Factory unlocked, complete warranty backing, and IMEI verified.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-42-17.jpg'),
                'items' => [
                    'Latest Apple iPhones (Pro, Pro Max & Standard Models)',
                    'Samsung Galaxy S-Series, Z-Fold, Z-Flip & A-Series',
                    'Apple iPads (Pro M-Series, Air & Mini) & Android Tablets',
                    'Factory Unlocked Devices with Genuine Manufacturer Guarantee',
                    'Phone Swap & Upgrade Options with Honest Valuation',
                ],
            ],
            [
                'id' => 'laptops-computing',
                'name' => 'LAPTOPS & COMPUTING',
                'title' => 'MacBooks, Business Laptops & Workstations',
                'subtitle' => 'High-Performance Machines for Creatives, Developers & Executives',
                'tag' => 'Laptops & PCs',
                'badge_color' => 'bg-brand-blue text-white',
                'border_accent' => 'border-brand-blue',
                'desc' => 'Engineered for productivity, graphic rendering, coding, and heavy office workflows. MacBooks, Dell XPS, HP Spectre/EliteBook, and Lenovo ThinkPads.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-42-39.jpg'),
                'items' => [
                    'Apple MacBook Pro (M2/M3 Chips) & MacBook Air Series',
                    'Dell XPS, Latitude & Alienware Gaming/Workstation Laptops',
                    'HP Spectre, Envy, Pavilion & EliteBook Business Laptops',
                    'Lenovo ThinkPad & Legion High-Performance PCs',
                    'Pre-Configured SSD, RAM Upgrades & Operating System Setup',
                ],
            ],
            [
                'id' => 'audio-wearables',
                'name' => 'AUDIO & SMART WEARABLES',
                'title' => 'AirPods, Smartwatches & High-Fidelity Audio',
                'subtitle' => 'Active Noise-Cancelling Headphones, Fitness Trackers & Bluetooth Speakers',
                'tag' => 'Wearables & Audio',
                'badge_color' => 'bg-purple-600 text-white',
                'border_accent' => 'border-purple-600',
                'desc' => 'Immerse yourself in crystal-clear studio acoustics and stay connected on the move with premium wearables and portable sound systems.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-43-14.jpg'),
                'items' => [
                    'Apple AirPods Pro (USB-C), AirPods 3 & AirPods Max',
                    'Apple Watch Ultra 2, Series 9 & Samsung Galaxy Watches',
                    'JBL, Sony & Bose Wireless Extra-Bass Portable Speakers',
                    'Studio Over-Ear Noise-Cancelling Headphones (Sony WH & Beats)',
                    'Smart Fitness Trackers with Heart-Rate & Workout Monitoring',
                ],
            ],
            [
                'id' => 'power-cables',
                'name' => 'POWER & CHARGING ESSENTIALS',
                'title' => 'High-Capacity Power Banks & Fast GaN Chargers',
                'subtitle' => 'Original Anker, Apple & Baseus Multi-Port Power Solutions',
                'tag' => 'Power & Charging',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'desc' => 'Keep your critical gear charged 24/7. High-wattage GaN wall plugs, heavy-duty surge protectors, braided armored cables, and 20,000mAh–65,000mAh laptop power banks.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-43-17.jpg'),
                'items' => [
                    'Original 20W to 140W GaN Fast Chargers (Type-C PD)',
                    'High-Capacity 20,000mAh – 65,000mAh Laptop Power Banks',
                    'MFi-Certified Lightning & 100W Braided USB-C Data Cables',
                    'Qi & MagSafe Wireless Charging Stands for Desk & Bedside',
                    'Car Fast-Chargers with Dual USB-C / USB-A PD Ports',
                ],
            ],
            [
                'id' => 'displays-home',
                'name' => 'TVs & HOME ENTERTAINMENT',
                'title' => '4K/8K Smart TVs, Home Theaters & Displays',
                'subtitle' => 'LG OLED, Samsung QLED, Soundbars & Gaming Consoles',
                'tag' => 'Home Entertainment',
                'badge_color' => 'bg-amber-600 text-white',
                'border_accent' => 'border-amber-600',
                'desc' => 'Transform your living room and corporate boardroom with vibrant ultra-high-definition displays, cinema surround soundbars, and next-gen gaming consoles.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-42-17.jpg'),
                'items' => [
                    'LG OLED & NanoCell 4K UHD Smart Television Displays',
                    'Samsung QLED & Crystal UHD Screens (43" to 85")',
                    'Dolby Atmos Soundbars & Subwoofer Surround Systems',
                    'PlayStation 5 & Xbox Series X Consoles and Wireless Controllers',
                    'Wall Mount Brackets, Heavy-Duty Swivels & Professional Installation',
                ],
            ],
            [
                'id' => 'repairs-accessories',
                'name' => 'PROTECTION & DIAGNOSTICS',
                'title' => 'Armor Cases, Tempered Glass & Expert Repairs',
                'subtitle' => 'Screen Replacement, Battery Health Fixes & Protective Shields',
                'tag' => 'Repairs & Protection',
                'badge_color' => 'bg-slate-800 text-white',
                'border_accent' => 'border-slate-800',
                'desc' => 'Defend your investment against accidental drops and scratches. Plus, authorized diagnosis, screen restoration, and battery replacements by skilled technicians.',
                'image' => asset('images/electronics/PHOTO-2026-07-15-23-42-39.jpg'),
                'items' => [
                    'Military-Grade Drop Protection Cases & MagSafe Leather Sleeves',
                    'Edge-to-Edge 9H Tempered Glass & Privacy Screen Protectors',
                    'OEM Original Screen & Display Assembly Replacement',
                    'Battery Health Restoration & Charging Port Diagnostics',
                    'Comprehensive Data Backup, Transfer & Cloud Migration',
                ],
            ],
        ];

        $whyAsutextTech = [
            [
                'title' => '100% Authentic Guarantee',
                'desc' => 'Zero clones, refurbished fakes, or grey-market counterfeits. Every gadget is 100% original with genuine serials and factory warranty.',
                'icon' => '🛡️',
            ],
            [
                'title' => 'Warranty & Post-Sales Support',
                'desc' => 'We stand behind our devices with written store warranties and dedicated technical support ready to assist with troubleshooting.',
                'icon' => '📝',
            ],
            [
                'title' => 'Express Same-Day Delivery',
                'desc' => 'Order in Lagos or Calabar and receive your gadget safely packaged and hand-delivered right to your doorstep or office desk.',
                'icon' => '⚡',
            ],
            [
                'title' => 'Transparent Swap & Upgrade',
                'desc' => 'Upgrade seamlessly without hassle. Bring your current device for a straightforward valuation and pay the difference.',
                'icon' => '🔄',
            ],
            [
                'title' => 'Certified Tech Specialists',
                'desc' => 'Our technical engineers provide expert configuration, screen installations, and gadget setup free of charge upon purchase.',
                'icon' => '👨‍💻',
            ],
        ];

        // Gather electronics photo gallery
        $techPhotos = [
            [
                'url' => asset('images/electronics/PHOTO-2026-07-15-23-42-17.jpg'),
                'title' => 'Premium Smartphones & Handheld Gadgets',
                'category' => 'Smartphones & Displays',
                'theme' => 'phones',
                'tag' => 'Flagship Mobile',
            ],
            [
                'url' => asset('images/electronics/PHOTO-2026-07-15-23-42-39.jpg'),
                'title' => 'High-Performance Laptops & Computing Gear',
                'category' => 'Laptops & Workstations',
                'theme' => 'laptops',
                'tag' => 'Pro Computing',
            ],
            [
                'url' => asset('images/electronics/PHOTO-2026-07-15-23-43-14.jpg'),
                'title' => 'Smart Wearables, AirPods & Acoustic Audio',
                'category' => 'Audio & Wearables',
                'theme' => 'audio',
                'tag' => 'Smart Wearables',
            ],
            [
                'url' => asset('images/electronics/PHOTO-2026-07-15-23-43-17.jpg'),
                'title' => 'Power Banks, Fast GaN Plugs & Armored Cables',
                'category' => 'Power & Charging',
                'theme' => 'power',
                'tag' => 'Power Essentials',
            ],
        ];

        return view('pages.electronics', compact('categories', 'whyAsutextTech', 'techPhotos'));
    }

    public function transport()
    {
        $categories = [
            [
                'id' => 'door-to-door',
                'name' => 'DOOR-TO-DOOR & POINT-TO-POINT TRANSFERS',
                'title' => 'Seamless Doorstep Pickups & Direct Intercity Travel',
                'subtitle' => 'Zero park stress, doorstep morning collections & comfortable interstate connections',
                'tag' => 'Doorstep Convenience',
                'badge_color' => 'bg-brand-red text-white',
                'border_accent' => 'border-brand-red',
                'desc' => 'Say goodbye to motor park hassles, chaotic loading stations, and expensive connecting taxis. We pick you up right from your home or office doorstep in clean, air-conditioned vehicles and convey you smoothly to your final destination.',
                'image' => asset('Images/Transport/PHOTO-2026-07-15-23-31-59.jpg'),
                'items' => [
                    'Early Morning Doorstep Collection from your residence or office',
                    'Zero Extra Transportation Costs from your home to a motor park',
                    'Point-to-Point Intrastate Express Trips within Lagos and Cross River',
                    'Direct Interstate Routes linking Lagos, Abuja, Calabar & Port Harcourt',
                    'Personalized service with polite, experienced, and punctual drivers',
                ],
            ],
            [
                'id' => 'airport-transfers',
                'name' => 'AIRPORT TRANSFERS & FLIGHT CONNECTIONS',
                'title' => 'Punctual Terminal Pickups & Flight Booking Support',
                'subtitle' => 'Murtala Muhammed (Lagos), Margaret Ekpo (Calabar) & Nnamdi Azikiwe (Abuja)',
                'tag' => 'Airport & Aviation',
                'badge_color' => 'bg-brand-blue text-white',
                'border_accent' => 'border-brand-blue',
                'desc' => 'Guaranteed on-time terminal drop-offs and seamless airport arrivals. We track your flight schedules in real time, provide terminal meet-and-greet protocol, handle heavy luggage, and offer bundled flight ticket booking assistance.',
                'image' => asset('Images/Transport/PHOTO-2026-07-15-23-32-04.jpg'),
                'items' => [
                    'Punctual Domestic & International Airport Drop-offs with Zero Check-In Delays',
                    'Flight-Tracked Terminal Welcome & Chauffeur Waiting Service',
                    'VIP Protocol Assistance & Executive Vehicle Options (Land Cruiser, Prado, Sedans)',
                    'Direct Baggage Handling & Secure Vehicle Storage',
                    'Complimentary Domestic & International Airline Flight Ticket Booking Assistance',
                ],
            ],
            [
                'id' => 'corporate-logistics',
                'name' => 'CORPORATE FLEET & STAFF SHUTTLE',
                'title' => 'Staff Transportation & Executive Company Car Rentals',
                'subtitle' => 'Dedicated corporate shuttles, daily employee routes & executive car hire',
                'tag' => 'Corporate Fleets',
                'badge_color' => 'bg-slate-900 text-white',
                'border_accent' => 'border-slate-900',
                'desc' => 'Empower your workforce with dependable, air-conditioned daily staff busing. We supply background-checked, courteous drivers, scheduled route timetables, executive company rentals for official corporate duties, and monthly invoicing.',
                'image' => asset('Images/Transport/PHOTO-2026-07-15-23-53-09.jpg'),
                'items' => [
                    'Daily & Monthly Staff Bus Contracts with Timed Doorstep or Hub Pickups',
                    'Executive Land Cruiser, SUV & Sedan Rentals for Directors and Corporate Guests',
                    'Rigorously Vetted, Uniformed & Defensive-Driving Certified Chauffeurs',
                    'Standby Backup Vehicles to Guarantee Zero Operational Downtime',
                    'Consolidated Monthly Corporate Billing, Route Optimization & Duty Logs',
                ],
            ],
            [
                'id' => 'group-charters',
                'name' => 'GROUP TRAVEL & EVENT CHARTERS',
                'title' => 'Coaster Buses, HiAce Vans & Event Convoys',
                'subtitle' => 'Weddings, corporate summits, church retreats, conferences & family excursions',
                'tag' => 'Group Charters',
                'badge_color' => 'bg-amber-600 text-white',
                'border_accent' => 'border-amber-600',
                'desc' => 'Spacious, high-capacity passenger vehicles for all group sizes. From executive Toyota HiAce commuter vans to luxury multi-coach passenger buses equipped with tinted windows, plush reclining seats, and dual AC.',
                'image' => asset('Images/Transport/PHOTO-2026-07-15-23-32-08.jpg'),
                'items' => [
                    'Luxury 30-Seater Coaster Bus & 14-Seater HiAce Van Private Charters',
                    'Wedding Day Guest Shuttles & Coordinated Bridal Party Convoys',
                    'Church Conferences, Retreats, Sports Outings & Cultural Festivals',
                    'Inter-City Educational & Sightseeing Excursions',
                    'Personalized Route Scheduling & Full-Day Standby Service',
                ],
            ],
            [
                'id' => 'multimodal-haulage',
                'name' => 'MULTI-MODAL LOGISTICS & HAULAGE',
                'title' => 'Road Haulage, Coastal Waterways & Cargo Dispatch',
                'subtitle' => 'Heavy freight, interstate moving, inland waterways & express cargo networks',
                'tag' => 'Freight & Multi-Modal',
                'badge_color' => 'bg-emerald-600 text-white',
                'border_accent' => 'border-emerald-600',
                'desc' => 'Comprehensive freight and intermodal forwarding. Connecting major commercial hubs via road freight haulage, riverine and coastal water transport links, and air parcel dispatches across all 36 states.',
                'image' => asset('Images/Transport/PHOTO-2026-07-15-23-32-10.jpg'),
                'items' => [
                    'Interstate Cargo Haulage & Palletized Commercial Goods Dispatch',
                    'Full Home & Office Moving Services with Careful Loading and Padding',
                    'Safe Coastal Waterway Passenger & Freight Crossings',
                    'Express Small Parcel & Document Nationwide Courier Delivery',
                    'Real-Time Waybill Tracking & Direct Goods Handover',
                ],
            ],
            [
                'id' => 'customized-logistics',
                'name' => 'CUSTOMIZED LOGISTICS & PROTOCOL',
                'title' => 'Bespoke Travel Solutions & Fleet Management',
                'subtitle' => 'Tailored transport solutions designed around your exact schedules and operational needs',
                'tag' => 'Tailored Solutions',
                'badge_color' => 'bg-purple-600 text-white',
                'border_accent' => 'border-purple-600',
                'desc' => 'Every client’s logistical footprint is unique. We build bespoke transit solutions with custom timetables, dedicated vehicle allocations, security escort coordination, and round-the-clock priority dispatch.',
                'image' => asset('Images/transport-fleet-dispatch.jpg'),
                'items' => [
                    'Tailored Logistics Strategy Built Around Your Exact Schedule & Route Map',
                    'Protocol & Security Escort Coordination for VIP Delegations',
                    'Flexible Short, Medium & Long-Term Vehicle Lease Contracts',
                    'Transparent Pricing with Zero Hidden Surcharges or Toll Surprises',
                    '24/7 Dedicated Logistics Helpdesk & Fleet Dispatch Coordination',
                ],
            ],
        ];

        $whyAsutextTransport = [
            [
                'title' => 'Doorstep Pickup & Zero Park Hassle',
                'desc' => 'We pick you up right in front of your gate, completely eliminating the need and cost of transporting yourself to congested motor parks.',
                'icon' => 'bi bi-door-open-fill',
            ],
            [
                'title' => 'Safety & Professional Vetted Drivers',
                'desc' => 'Every chauffeur undergoes thorough background verification, defensive-driving certification, and regular medical fitness screenings.',
                'icon' => 'bi bi-shield-check',
            ],
            [
                'title' => 'Modern Air-Conditioned Fleet',
                'desc' => 'From executive Toyota Land Cruisers to clean HiAce vans and luxury coaster coaches, our fleet is rigorously maintained for maximum comfort.',
                'icon' => 'bi bi-bus-front-fill',
            ],
            [
                'title' => 'Complete Cost Transparency',
                'desc' => 'Clear upfront pricing with no surprise toll charges or hidden fees. Real-time travel communication keeps you fully informed throughout your trip.',
                'icon' => 'bi bi-cash-stack',
            ],
            [
                'title' => 'Multi-Modal & Nationwide Reach',
                'desc' => 'Seamless land, air flight booking, and water logistics connecting Lagos Island, Banana Island, Calabar, Abuja, Port Harcourt, and all Nigerian states.',
                'icon' => 'bi bi-geo-alt-fill',
            ],
        ];

        $transportPhotos = [
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-31-59.jpg'),
                'title' => 'Asutext Door-to-Door Transportation Solution (Corporate Proposal)',
                'category' => 'Door-to-Door Services',
                'theme' => 'door-to-door',
                'badge' => 'Door-to-Door Solution',
                'description' => 'Official proposal cover highlighting convenient door-to-door travel solutions, HiAce executive vans, and corporate introduction.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-32-01.jpg'),
                'title' => 'Corporate Contact Info, Banking Credentials & Leadership',
                'category' => 'Company Credentials',
                'theme' => 'credentials',
                'badge' => 'Corporate Credentials',
                'description' => 'Asutext & G Nigeria Limited corporate registration credentials, Stanbic IBTC banking details, Lagos Marina Head Office & Calabar branch.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-32-04.jpg'),
                'title' => 'Seamless Travel Experience, Luggage Care & Customer Quotes',
                'category' => 'Passenger Travel',
                'theme' => 'passenger',
                'badge' => 'Travel Experience',
                'description' => 'Stress-free door-to-door travel promise, airport luggage assistance, and transparent passenger customer satisfaction commitments.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-32-06.jpg'),
                'title' => 'Fleet Scope, Luxury Coaster Interior & Passenger Benefits',
                'category' => 'Fleet & Scope',
                'theme' => 'fleet',
                'badge' => 'Luxury Fleet & Benefits',
                'description' => 'Fleet lineup, plush interior seating standards, point-to-point transfers, airport shuttles, and corporate transportation solutions.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-32-08.jpg'),
                'title' => 'Multi-Coach Intercity Bus Fleet & Corporate Commitment',
                'category' => 'Fleet & Operations',
                'theme' => 'fleet',
                'badge' => 'Intercity Bus Fleet',
                'description' => 'Intercity coach bus lineup prioritizing passenger safety, absolute punctuality, pristine comfort, and friendly customer satisfaction.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-32-10.jpg'),
                'title' => 'Asutext Modern Intercity Transport Hub & Fleet Station',
                'category' => 'Transport Hubs',
                'theme' => 'hubs',
                'badge' => 'Transport Hub & Fleet',
                'description' => 'Asutext modern intercity transit hub illustrating operations linking Lagos, Abuja, Port Harcourt, Calabar, and nationwide terminals.',
            ],
            [
                'url' => asset('Images/Transport/PHOTO-2026-07-15-23-53-09.jpg'),
                'title' => 'Executive SUV Fleet, Corporate Solutions & Scope Flyer',
                'category' => 'Executive & Corporate',
                'theme' => 'executive',
                'badge' => 'Executive Fleet Scope',
                'description' => 'Official service flyer detailing Toyota Land Cruiser and Jaguar executive options, staff busing, company car rentals, and flight booking.',
            ],
            [
                'url' => asset('Images/transport-fleet-dispatch.jpg'),
                'title' => 'Fleet Operations, Vehicle Maintenance & Dispatch Center',
                'category' => 'Fleet Operations',
                'theme' => 'fleet',
                'badge' => 'Fleet Dispatch',
                'description' => 'Dedicated fleet coordination ensuring regular mechanical maintenance, GPS route tracking, and punctual departures.',
            ],
            [
                'url' => asset('Images/transport-freight-cargo.jpg'),
                'title' => 'Heavy Cargo Haulage & Nationwide Freight Delivery',
                'category' => 'Haulage & Logistics',
                'theme' => 'cargo',
                'badge' => 'Haulage & Freight',
                'description' => 'Heavy road haulage moving containerized freight and bulk industrial supplies safely across inter-state corridors.',
            ],
            [
                'url' => asset('Images/transport-multimodal-logistics.jpg'),
                'title' => 'Intermodal Logistics & Cross-Country Supply Corridors',
                'category' => 'Multi-Modal Logistics',
                'theme' => 'cargo',
                'badge' => 'Multi-Modal Corridors',
                'description' => 'Integrated logistics coordinating road trucks, coastal water links, and domestic air cargo for reliable business delivery.',
            ],
            [
                'url' => asset('Images/transport-transit-hubs.jpg'),
                'title' => 'Strategic Regional Transit Terminals & Warehousing Points',
                'category' => 'Transport Hubs',
                'theme' => 'hubs',
                'badge' => 'Transit Terminals',
                'description' => 'Regional transit nodes connecting key commercial arteries across Lagos, Cross River State, and surrounding regions.',
            ],
        ];

        return view('pages.transport', compact('categories', 'whyAsutextTransport', 'transportPhotos'));
    }
}


