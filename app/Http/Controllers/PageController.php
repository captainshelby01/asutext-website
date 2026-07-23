<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\PortfolioItem;
use App\Models\TeamMember;
use App\Models\Testimonial;
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
        return view('pages.about');
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
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('pages.team', compact('teamMembers'));
    }

    public function coverage()
    {
        return view('pages.coverage');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
