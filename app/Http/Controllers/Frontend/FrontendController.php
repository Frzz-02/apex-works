<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\SectionHero;
use App\Models\SectionBrand;
use App\Models\SectionAbout;
use App\Models\Navbar;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $footer = Footer::where('is_active', true)->first();
        $heroPanels = SectionHero::where('is_active', true)
                                ->orderBy('panel_order')
                                ->get();
        $brands = SectionBrand::where('status', 'active')->get();
        $about = SectionAbout::where('is_active', true)->first();
        
        // Get navbar items (top navigation)
        $navbarItems = Navbar::where('is_active', true)
                            ->where('show_in_navbar', true)
                            ->whereNull('parent_id')
                            ->orderBy('menu_order')
                            ->with('children')
                            ->get();
        
        // Get sidebar items
        $sidebarItems = Navbar::where('is_active', true)
                             ->where('show_in_sidebar', true)
                             ->whereNull('parent_id')
                             ->orderBy('menu_order')
                             ->with('children')
                             ->get();
        
        return view('frontend.pages.show', compact('footer', 'heroPanels', 'brands', 'about', 'navbarItems', 'sidebarItems'));
    }
}
