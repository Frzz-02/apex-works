<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SectionBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = SectionBrand::latest()->get();
        return view('backend.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('backend.brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('brand_images', 'public');
        }

        SectionBrand::create($validated);

        return redirect()->route('backend.brands.index')
            ->with('success', 'Brand created successfully.');
    }

    public function edit(SectionBrand $brand)
    {
        return view('backend.brands.edit', compact('brand'));
    }

    public function update(Request $request, SectionBrand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
                Storage::disk('public')->delete($brand->logo);
            }
            $validated['logo'] = $request->file('logo')->store('brand_images', 'public');
        }
// Delete logo file if exists
        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        
        $brand->update($validated);

        return redirect()->route('backend.brands.index')
            ->with('success', 'Brand updated successfully.');
    }

    public function destroy(SectionBrand $brand)
    {
        $brand->delete();

        return redirect()->route('backend.brands.index')
            ->with('success', 'Brand deleted successfully.');
    }
}
