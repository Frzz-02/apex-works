<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SectionHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionHeroController extends Controller
{
    public function index()
    {
        $heroes = SectionHero::orderBy('panel_order')->get();
        return view('backend.section-hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('backend.section-hero.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mood_tag' => 'nullable|string|max:100',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:50',
            'cta_url' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'fallback_image_url' => 'nullable|string',
            'panel_order' => 'nullable|integer',
            'background_overlay_opacity' => 'nullable|numeric|between:0,1',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('hero_images', 'public');
        }

        // Set default values
        $validated['is_active'] = $request->has('is_active');

        SectionHero::create($validated);

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero panel created successfully.');
    }

    public function edit(SectionHero $sectionHero)
    {
        return view('backend.section-hero.edit', compact('sectionHero'));
    }

    public function update(Request $request, SectionHero $sectionHero)
    {
        $validated = $request->validate([
            'mood_tag' => 'nullable|string|max:100',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:50',
            'cta_url' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'fallback_image_url' => 'nullable|string',
            'panel_order' => 'nullable|integer',
            'background_overlay_opacity' => 'nullable|numeric|between:0,1',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image_path')) {
            // Delete old image
            if ($sectionHero->image_path && Storage::disk('public')->exists($sectionHero->image_path)) {
                Storage::disk('public')->delete($sectionHero->image_path);
            }
            $validated['image_path'] = $request->file('image_path')->store('hero_images', 'public');
        }

        // Set default values
        $validated['is_active'] = $request->has('is_active');

        $sectionHero->update($validated);

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero panel updated successfully.');
    }

    public function destroy(SectionHero $sectionHero)
    {
        // Delete image
        if ($sectionHero->image_path && Storage::disk('public')->exists($sectionHero->image_path)) {
            Storage::disk('public')->delete($sectionHero->image_path);
        }

        $sectionHero->delete();

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero panel deleted successfully.');
    }
}
