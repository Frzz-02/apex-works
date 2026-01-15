@extends('backend.app.layout')

@section('title', 'Add New Counter')

@section('content')
<div class="p-8">
    <div class="mb-6">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="{{ route('backend.complete-count.index') }}" class="hover:text-gray-900">Complete Count</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">Add New</span>
        </div>
        <h1 class="text-3xl font-bold text-gray-900">Add New Counter</h1>
        <p class="text-gray-600 text-sm mt-1">Fill the form below to create a new counter</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('backend.complete-count.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="col-span-2">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Title <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        value="{{ old('title') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title') border-red-500 @enderror"
                        placeholder="Enter counter title"
                        required
                    >
                    @error('title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Icon -->
                <div class="col-span-2">
                    <label for="icon" class="block text-sm font-semibold text-gray-700 mb-2">
                        Icon Class
                    </label>
                    <input 
                        type="text" 
                        id="icon" 
                        name="icon" 
                        value="{{ old('icon') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('icon') border-red-500 @enderror"
                        placeholder="fas fa-trophy"
                    >
                    @error('icon')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Enter FontAwesome or other icon class (e.g., fas fa-trophy, fa-solid fa-users)</p>
                </div>

                <!-- Amount -->
                <div class="col-span-2">
                    <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">
                        Amount <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="number" 
                        id="amount" 
                        name="amount" 
                        value="{{ old('amount') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('amount') border-red-500 @enderror"
                        placeholder="1000"
                        required
                    >
                    @error('amount')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div class="col-span-2">
                    <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="status" 
                        name="status" 
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('status') border-red-500 @enderror"
                        required
                    >
                        <option value="active" @selected(old('status') == 'active')>Active</option>
                        <option value="inactive" @selected(old('status') == 'inactive')>Inactive</option>
                    </select>
                    @error('status')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-8 flex items-center space-x-4">
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold rounded-lg shadow-md transition-all duration-300"
                >
                    Create Counter
                </button>
                <a 
                    href="{{ route('backend.complete-count.index') }}" 
                    class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-colors"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
