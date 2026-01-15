<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SectionCompletecount;
use Illuminate\Http\Request;

class CompleteCountController extends Controller
{
    public function index()
    {
        $completeCounts = SectionCompletecount::latest()->get();
        return view('backend.complete-count.index', compact('completeCounts'));
    }

    public function create()
    {
        return view('backend.complete-count.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'amount' => 'nullable|integer',
            'status' => 'nullable|string|max:255',
        ]);

        SectionCompletecount::create($validated);

        return redirect()->route('backend.complete-count.index')
            ->with('success', 'Complete Count created successfully.');
    }

    public function edit(SectionCompletecount $completeCount)
    {
        return view('backend.complete-count.edit', compact('completeCount'));
    }

    public function update(Request $request, SectionCompletecount $completeCount)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'amount' => 'nullable|integer',
            'status' => 'nullable|string|max:255',
        ]);

        $completeCount->update($validated);

        return redirect()->route('backend.complete-count.index')
            ->with('success', 'Complete Count updated successfully.');
    }

    public function destroy(SectionCompletecount $completeCount)
    {
        $completeCount->delete();

        return redirect()->route('backend.complete-count.index')
            ->with('success', 'Complete Count deleted successfully.');
    }
}
