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
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.services', compact('services'));
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
}
