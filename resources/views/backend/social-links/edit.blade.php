@extends('backend.app.layout')

@section('title', 'Edit Social Link')

@section('content')
<div class="p-8">
    <div class="mb-6">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="{{ route('backend.social-links.index') }}" class="hover:text-gray-900">Social Links</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">Edit</span>
        </div>
        <h1 class="text-3xl font-bold text-gray-900">Edit Social Link</h1>
        <p class="text-gray-600 text-sm mt-1">Update the social link information</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('backend.social-links.update', $socialLink) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div class="col-span-2">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Name <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name', $socialLink->name) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('name') border-red-500 @enderror"
                        placeholder="Enter social link name (e.g., Facebook, Twitter)"
                        required
                    >
                    @error('name')
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
                        value="{{ old('icon', $socialLink->icon) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('icon') border-red-500 @enderror"
                        placeholder="fab fa-facebook"
                    >
                    @error('icon')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Enter FontAwesome or other icon class (e.g., fab fa-facebook, fa-brands fa-twitter)</p>
                    @if($socialLink->icon)
                        <div class="mt-3 flex items-center">
                            <p class="text-xs text-gray-600 mr-2">Preview:</p>
                            <i class="{{ $socialLink->icon }} text-2xl text-indigo-600"></i>
                        </div>
                    @endif
                </div>

                <!-- URL -->
                <div class="col-span-2">
                    <label for="url" class="block text-sm font-semibold text-gray-700 mb-2">
                        URL <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="url" 
                        id="url" 
                        name="url" 
                        value="{{ old('url', $socialLink->url) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('url') border-red-500 @enderror"
                        placeholder="https://facebook.com/yourpage"
                        required
                    >
                    @error('url')
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
                        <option value="active" @selected(old('status', $socialLink->status) == 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $socialLink->status) == 'inactive')>Inactive</option>
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
                    Update Social Link
                </button>
                <a 
                    href="{{ route('backend.social-links.index') }}" 
                    class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-colors"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
