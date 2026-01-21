@extends('backend.app.layout')

@section('title', 'Edit Hero Panel')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('backend.section-hero.index') }}" class="text-slate-600 hover:text-slate-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-slate-800">Edit Hero Panel</h1>
                <p class="text-slate-600 mt-1">Update panel information</p>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form action="{{ route('backend.section-hero.update', $sectionHero) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-3 gap-6">
            <!-- Main Content - 2 Columns -->
            <div class="col-span-2 space-y-6">
                <!-- Panel Information -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-slate-800 mb-6">Panel Information</h2>
                    
                    <!-- Mood Tag -->
                    <div class="mb-6">
                        <label for="mood_tag" class="block text-sm font-medium text-slate-700 mb-2">
                            Mood Tag
                        </label>
                        <input type="text" 
                               name="mood_tag" 
                               id="mood_tag" 
                               value="{{ old('mood_tag', $sectionHero->mood_tag) }}"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="e.g., PREMIUM QUALITY">
                        @error('mood_tag')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Title -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-slate-700 mb-2">
                            Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $sectionHero->title) }}"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="e.g., Lanyard Berkualitas Tinggi" 
                               required>
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-slate-700 mb-2">
                            Description
                        </label>
                        <textarea name="description" 
                                  id="description" 
                                  rows="4"
                                  class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                  placeholder="Describe this panel...">{{ old('description', $sectionHero->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- CTA Button -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="cta_text" class="block text-sm font-medium text-slate-700 mb-2">
                                CTA Button Text
                            </label>
                            <input type="text" 
                                   name="cta_text" 
                                   id="cta_text" 
                                   value="{{ old('cta_text', $sectionHero->cta_text) }}"
                                   class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="e.g., Hubungi Kami">
                            @error('cta_text')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="cta_url" class="block text-sm font-medium text-slate-700 mb-2">
                                CTA Button URL
                            </label>
                            <input type="text" 
                                   name="cta_url" 
                                   id="cta_url" 
                                   value="{{ old('cta_url', $sectionHero->cta_url) }}"
                                   class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="https://wa.me/62...">
                            @error('cta_url')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-slate-800 mb-6">Panel Image</h2>
                    
                    <!-- Current Image -->
                    @if($sectionHero->image_path || $sectionHero->fallback_image_url)
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-slate-700 mb-2">Current Image</label>
                            @php
                                $imageUrl = null;
                                if ($sectionHero->image_path && Storage::exists($sectionHero->image_path)) {
                                    $imageUrl = Storage::url($sectionHero->image_path);
                                } elseif ($sectionHero->fallback_image_url) {
                                    $imageUrl = $sectionHero->fallback_image_url;
                                }
                            @endphp
                            @if($imageUrl)
                                <img src="{{ $imageUrl }}" 
                                     alt="{{ $sectionHero->image_alt }}" 
                                     class="w-full h-64 object-cover rounded-lg"
                                     onerror="this.src='{{ $sectionHero->fallback_image_url ?? 'https://via.placeholder.com/1920x1080?text=No+Image' }}'">
                                @if(!Storage::exists($sectionHero->image_path) && $sectionHero->fallback_image_url)
                                    <p class="mt-2 text-sm text-amber-600">
                                        <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        Using fallback image (local file not found)
                                    </p>
                                @endif
                            @endif
                        </div>
                    @endif
                    
                    <!-- Image Upload -->
                    <div class="mb-6">
                        <label for="image_path" class="block text-sm font-medium text-slate-700 mb-2">
                            {{ $sectionHero->image_path ? 'Replace Image' : 'Upload Image' }}
                        </label>
                        <input type="file" 
                               name="image_path" 
                               id="image_path" 
                               accept="image/*"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               onchange="previewImage(event)">
                        <p class="mt-2 text-sm text-slate-500">Recommended size: 1920x1080px. Max: 2MB</p>
                        @error('image_path')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        
                        <!-- Image Preview -->
                        <div id="imagePreview" class="mt-4 hidden">
                            <img src="" alt="Preview" class="w-full h-64 object-cover rounded-lg">
                        </div>
                    </div>

                    <!-- Image Alt Text -->
                    <div class="mb-6">
                        <label for="image_alt" class="block text-sm font-medium text-slate-700 mb-2">
                            Image Alt Text (SEO)
                        </label>
                        <input type="text" 
                               name="image_alt" 
                               id="image_alt" 
                               value="{{ old('image_alt', $sectionHero->image_alt) }}"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Describe the image for accessibility">
                        @error('image_alt')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Fallback Image URL -->
                    <div>
                        <label for="fallback_image_url" class="block text-sm font-medium text-slate-700 mb-2">
                            Fallback Image URL (Optional)
                        </label>
                        <input type="text" 
                               name="fallback_image_url" 
                               id="fallback_image_url" 
                               value="{{ old('fallback_image_url', $sectionHero->fallback_image_url) }}"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="https://images.unsplash.com/...">
                        <p class="mt-2 text-sm text-slate-500">URL to use if uploaded image fails to load</p>
                        @error('fallback_image_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Sidebar - 1 Column -->
            <div class="space-y-6">
                <!-- Display Settings -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-slate-800 mb-6">Display Settings</h2>
                    
                    <!-- Panel Order -->
                    <div class="mb-6">
                        <label for="panel_order" class="block text-sm font-medium text-slate-700 mb-2">
                            Panel Order
                        </label>
                        <input type="number" 
                               name="panel_order" 
                               id="panel_order" 
                               value="{{ old('panel_order', $sectionHero->panel_order) }}"
                               min="0"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="mt-2 text-sm text-slate-500">Lower numbers appear first</p>
                        @error('panel_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Overlay Opacity -->
                    <div class="mb-6">
                        <label for="background_overlay_opacity" class="block text-sm font-medium text-slate-700 mb-2">
                            Background Overlay Opacity
                        </label>
                        <input type="number" 
                               name="background_overlay_opacity" 
                               id="background_overlay_opacity" 
                               value="{{ old('background_overlay_opacity', $sectionHero->background_overlay_opacity) }}"
                               step="0.01"
                               min="0"
                               max="1"
                               class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="mt-2 text-sm text-slate-500">Value between 0 (transparent) and 1 (opaque)</p>
                        @error('background_overlay_opacity')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status Toggle -->
                    <div>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" 
                                   name="is_active" 
                                   value="1" 
                                   {{ old('is_active', $sectionHero->is_active) ? 'checked' : '' }}
                                   class="w-5 h-5 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                            <span class="ml-3 text-sm font-medium text-slate-700">Active Panel</span>
                        </label>
                        <p class="mt-2 text-sm text-slate-500">Only active panels will be displayed</p>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold shadow-lg hover:shadow-xl">
                        Update Hero Panel
                    </button>
                    <a href="{{ route('backend.section-hero.index') }}" 
                       class="block w-full text-center mt-3 px-4 py-2 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function previewImage(event) {
        const preview = document.getElementById('imagePreview');
        const img = preview.querySelector('img');
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
        }
    }
</script>
@endpush
@endsection
