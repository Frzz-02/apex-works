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
        $hero = SectionHero::first();
        return view('backend.section-hero.index', compact('hero'));
    }

    public function create()
    {
        // Check if data already exists
        if (SectionHero::count() > 0) {
            return redirect()->route('backend.section-hero.index')
                ->with('error', 'Hero section already exists. Please delete the existing data first.');
        }

        return view('backend.section-hero.create');
    }

    public function store(Request $request)
    {
        // Check if data already exists
        if (SectionHero::count() > 0) {
            return redirect()->route('backend.section-hero.index')
                ->with('error', 'Hero section already exists. Please delete the existing data first.');
        }

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'title_2' => 'nullable|string|max:255',
            'title_3' => 'nullable|string|max:255',
            'subtitle_1' => 'nullable|string|max:255',
            'subtitle_2' => 'nullable|string|max:255',
            'subtitle_3' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_2' => 'nullable|string',
            'description_3' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_6' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_7' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_8' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_9' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_10' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_11' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_12' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_13' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_14' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_15' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_16' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_17' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_18' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'action_label' => 'nullable|string|max:255',
            'action_label_2' => 'nullable|string|max:255',
            'action_label_3' => 'nullable|string|max:255',
            'action_url' => 'nullable|string|max:255',
            'action_url_2' => 'nullable|string|max:255',
            'action_url_3' => 'nullable|string|max:255',
            'video_url' => 'nullable|string|max:255',
        ]);

        // Handle image uploads
        foreach (range(1, 18) as $i) {
            $field = $i === 1 ? 'image' : 'image_' . $i;
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('hero_images', 'public');
            }
        }

        // Handle background images
        foreach (['image_background', 'image_background_2', 'image_background_3'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('hero_images', 'public');
            }
        }

        SectionHero::create($validated);

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero section created successfully.');
    }

    public function edit(SectionHero $sectionHero)
    {
        return view('backend.section-hero.edit', compact('sectionHero'));
    }

    public function update(Request $request, SectionHero $sectionHero)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'title_2' => 'nullable|string|max:255',
            'title_3' => 'nullable|string|max:255',
            'subtitle_1' => 'nullable|string|max:255',
            'subtitle_2' => 'nullable|string|max:255',
            'subtitle_3' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_2' => 'nullable|string',
            'description_3' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_6' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_7' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_8' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_9' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_10' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_11' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_12' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_13' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_14' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_15' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_16' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_17' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_18' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'action_label' => 'nullable|string|max:255',
            'action_label_2' => 'nullable|string|max:255',
            'action_label_3' => 'nullable|string|max:255',
            'action_url' => 'nullable|string|max:255',
            'action_url_2' => 'nullable|string|max:255',
            'action_url_3' => 'nullable|string|max:255',
            'video_url' => 'nullable|string|max:255',
        ]);

        // Handle image uploads
        foreach (range(1, 18) as $i) {
            $field = $i === 1 ? 'image' : 'image_' . $i;
            if ($request->hasFile($field)) {
                // Delete old image
                if ($sectionHero->$field && Storage::disk('public')->exists($sectionHero->$field)) {
                    Storage::disk('public')->delete($sectionHero->$field);
                }
                $validated[$field] = $request->file($field)->store('hero_images', 'public');
            }
        }

        // Handle background images
        foreach (['image_background', 'image_background_2', 'image_background_3'] as $field) {
            if ($request->hasFile($field)) {
                // Delete old image
                if ($sectionHero->$field && Storage::disk('public')->exists($sectionHero->$field)) {
                    Storage::disk('public')->delete($sectionHero->$field);
                }
                $validated[$field] = $request->file($field)->store('hero_images', 'public');
            }
        }

        $sectionHero->update($validated);

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero section updated successfully.');
    }

    public function destroy(SectionHero $sectionHero)
    {
        // Delete all images
        $imageFields = array_merge(
            array_map(fn($i) => $i === 1 ? 'image' : 'image_' . $i, range(1, 18)),
            ['image_background', 'image_background_2', 'image_background_3']
        );

        foreach ($imageFields as $field) {
            if ($sectionHero->$field && Storage::disk('public')->exists($sectionHero->$field)) {
                Storage::disk('public')->delete($sectionHero->$field);
            }
        }

        $sectionHero->delete();

        return redirect()->route('backend.section-hero.index')
            ->with('success', 'Hero section deleted successfully.');
    }
}
