<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::latest()->get();
        return view('backend.footer.index', compact('footers'));
    }

    public function create()
    {
        return view('backend.footer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_1' => 'nullable|string|max:255',
            'title_2' => 'nullable|string|max:255',
            'title_3' => 'nullable|string|max:255',
            'title_4' => 'nullable|string|max:255',
            'description_1' => 'nullable|string',
            'description_2' => 'nullable|string',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'linkname1' => 'nullable|string|max:255',
            'linkname2' => 'nullable|string|max:255',
            'linkname3' => 'nullable|string|max:255',
            'linkname4' => 'nullable|string|max:255',
            'linkname5' => 'nullable|string|max:255',
            'linkname6' => 'nullable|string|max:255',
            'linkname7' => 'nullable|string|max:255',
            'linkname8' => 'nullable|string|max:255',
            'linkname9' => 'nullable|string|max:255',
            'linkname10' => 'nullable|string|max:255',
            'link1' => 'nullable|string|max:255',
            'link2' => 'nullable|string|max:255',
            'link3' => 'nullable|string|max:255',
            'link4' => 'nullable|string|max:255',
            'link5' => 'nullable|string|max:255',
            'link6' => 'nullable|string|max:255',
            'link7' => 'nullable|string|max:255',
            'link8' => 'nullable|string|max:255',
            'link9' => 'nullable|string|max:255',
            'link10' => 'nullable|string|max:255',
            'linkaddress' => 'nullable|string|max:255',
            'background_color' => 'nullable|string|max:255',
            'title_color' => 'nullable|string|max:255',
            'text_color' => 'nullable|string|max:255',
        ]);

        Footer::create($validated);

        return redirect()->route('backend.footer.index')
            ->with('success', 'Footer created successfully.');
    }

    public function edit(Footer $footer)
    {
        return view('backend.footer.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $validated = $request->validate([
            'title_1' => 'nullable|string|max:255',
            'title_2' => 'nullable|string|max:255',
            'title_3' => 'nullable|string|max:255',
            'title_4' => 'nullable|string|max:255',
            'description_1' => 'nullable|string',
            'description_2' => 'nullable|string',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'linkname1' => 'nullable|string|max:255',
            'linkname2' => 'nullable|string|max:255',
            'linkname3' => 'nullable|string|max:255',
            'linkname4' => 'nullable|string|max:255',
            'linkname5' => 'nullable|string|max:255',
            'linkname6' => 'nullable|string|max:255',
            'linkname7' => 'nullable|string|max:255',
            'linkname8' => 'nullable|string|max:255',
            'linkname9' => 'nullable|string|max:255',
            'linkname10' => 'nullable|string|max:255',
            'link1' => 'nullable|string|max:255',
            'link2' => 'nullable|string|max:255',
            'link3' => 'nullable|string|max:255',
            'link4' => 'nullable|string|max:255',
            'link5' => 'nullable|string|max:255',
            'link6' => 'nullable|string|max:255',
            'link7' => 'nullable|string|max:255',
            'link8' => 'nullable|string|max:255',
            'link9' => 'nullable|string|max:255',
            'link10' => 'nullable|string|max:255',
            'linkaddress' => 'nullable|string|max:255',
            'background_color' => 'nullable|string|max:255',
            'title_color' => 'nullable|string|max:255',
            'text_color' => 'nullable|string|max:255',
        ]);

        $footer->update($validated);

        return redirect()->route('backend.footer.index')
            ->with('success', 'Footer updated successfully.');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('backend.footer.index')
            ->with('success', 'Footer deleted successfully.');
    }
}
