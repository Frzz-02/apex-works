<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Page::first();
        return view('backend.header.index', compact('header'));
    }

    public function create()
    {
        // Check if data already exists
        if (Page::count() > 0) {
            return redirect()->route('backend.header.index')
                ->with('error', 'Header/Navbar already exists. Please delete the existing data first.');
        }

        return view('backend.header.create');
    }

    public function store(Request $request)
    {
        // Check if data already exists
        if (Page::count() > 0) {
            return redirect()->route('backend.header.index')
                ->with('error', 'Header/Navbar already exists. Please delete the existing data first.');
        }

        $validated = $request->validate([
            'slug' => 'nullable|string|unique:pages,slug|max:255',
            'status' => 'required|in:draft,published',
            'title' => 'required|string|max:255',
            'template' => 'required|string|max:255',
            'header_style' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        Page::create($validated);

        return redirect()->route('backend.header.index')
            ->with('success', 'Header/Navbar created successfully.');
    }

    public function edit(Page $header)
    {
        return view('backend.header.edit', compact('header'));
    }

    public function update(Request $request, Page $header)
    {
        $validated = $request->validate([
            'slug' => 'nullable|string|max:255|unique:pages,slug,' . $header->id,
            'status' => 'required|in:draft,published',
            'title' => 'required|string|max:255',
            'template' => 'required|string|max:255',
            'header_style' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $header->update($validated);

        return redirect()->route('backend.header.index')
            ->with('success', 'Header/Navbar updated successfully.');
    }

    public function destroy(Page $header)
    {
        $header->delete();

        return redirect()->route('backend.header.index')
            ->with('success', 'Header/Navbar deleted successfully.');
    }
}
