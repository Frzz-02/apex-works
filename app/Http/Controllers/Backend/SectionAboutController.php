<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SectionAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionAboutController extends Controller
{
    public function index()
    {
        $about = SectionAbout::first();
        return view('backend.section-about.index', compact('about'));
    }

    public function create()
    {
        // Check if data already exists
        if (SectionAbout::count() > 0) {
            return redirect()->route('backend.section-about.index')
                ->with('error', 'About section already exists. Please delete the existing data first.');
        }

        return view('backend.section-about.create');
    }

    public function store(Request $request)
    {
        // Check if data already exists
        if (SectionAbout::count() > 0) {
            return redirect()->route('backend.section-about.index')
                ->with('error', 'About section already exists. Please delete the existing data first.');
        }

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'blockquote' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'checklist_1' => 'nullable|string|max:255',
            'checklist_2' => 'nullable|string|max:255',
            'checklist_3' => 'nullable|string|max:255',
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
            'video_url' => 'nullable|string|max:255',
        ]);

        // Handle image uploads
        foreach (range(1, 18) as $i) {
            $field = $i === 1 ? 'image' : 'image_' . $i;
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('about_images', 'public');
            }
        }

        SectionAbout::create($validated);

        return redirect()->route('backend.section-about.index')
            ->with('success', 'About section created successfully.');
    }

    public function edit(SectionAbout $sectionAbout)
    {
        return view('backend.section-about.edit', compact('sectionAbout'));
    }

    public function update(Request $request, SectionAbout $sectionAbout)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'blockquote' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'checklist_1' => 'nullable|string|max:255',
            'checklist_2' => 'nullable|string|max:255',
            'checklist_3' => 'nullable|string|max:255',
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
            'video_url' => 'nullable|string|max:255',
        ]);

        // Handle image uploads
        foreach (range(1, 18) as $i) {
            $field = $i === 1 ? 'image' : 'image_' . $i;
            if ($request->hasFile($field)) {
                // Delete old image
                if ($sectionAbout->$field && Storage::disk('public')->exists($sectionAbout->$field)) {
                    Storage::disk('public')->delete($sectionAbout->$field);
                }
                $validated[$field] = $request->file($field)->store('about_images', 'public');
            }
        }

        $sectionAbout->update($validated);

        return redirect()->route('backend.section-about.index')
            ->with('success', 'About section updated successfully.');
    }

    public function destroy(SectionAbout $sectionAbout)
    {
        // Delete all images
        foreach (range(1, 18) as $i) {
            $field = $i === 1 ? 'image' : 'image_' . $i;
            if ($sectionAbout->$field && Storage::disk('public')->exists($sectionAbout->$field)) {
                Storage::disk('public')->delete($sectionAbout->$field);
            }
        }

        $sectionAbout->delete();

        return redirect()->route('backend.section-about.index')
            ->with('success', 'About section deleted successfully.');
    }
}
