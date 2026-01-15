<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::latest()->get();
        return view('backend.social-links.index', compact('socialLinks'));
    }

    public function create()
    {
        return view('backend.social-links.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        SocialLink::create($validated);

        return redirect()->route('backend.social-links.index')
            ->with('success', 'Social Link created successfully.');
    }

    public function edit(SocialLink $socialLink)
    {
        return view('backend.social-links.edit', compact('socialLink'));
    }

    public function update(Request $request, SocialLink $socialLink)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        $socialLink->update($validated);

        return redirect()->route('backend.social-links.index')
            ->with('success', 'Social Link updated successfully.');
    }

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();

        return redirect()->route('backend.social-links.index')
            ->with('success', 'Social Link deleted successfully.');
    }
}
