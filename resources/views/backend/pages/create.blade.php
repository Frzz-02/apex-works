@extends('backend.app.layout')

@section('title', 'Create New Page')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">
    <!-- Top Bar -->
    <div class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="{{ route('backend.pages.index') }}" 
                       class="text-slate-600 hover:text-slate-800 transition-colors p-2 hover:bg-slate-100 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-xl font-bold text-slate-800">Create New Page</h1>
                        <p class="text-sm text-slate-500 mt-0.5">Build your custom page with blocks</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3">
                    <a href="{{ route('backend.pages.index') }}" 
                       class="px-4 py-2 text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-medium">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('backend.pages.store') }}" method="POST" id="pageForm">
        @csrf
        
        <div class="max-w-[1600px] mx-auto p-6">
            <div class="grid grid-cols-12 gap-6">
                <!-- Main Content Area - 8 columns -->
                <div class="col-span-8 space-y-6">
                    <!-- Page Header -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="p-6 space-y-5">
                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Page Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       value="{{ old('title') }}"
                                       class="w-full px-4 py-3 text-lg border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                       placeholder="Enter your page title..." 
                                       required>
                                @error('title')
                                    <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Slug -->
                            <div>
                                <label for="slug" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Page Slug
                                </label>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm text-slate-500 bg-slate-50 px-3 py-3 rounded-lg border border-slate-200">
                                        {{ url('/') }}/
                                    </span>
                                    <input type="text" 
                                           name="slug" 
                                           id="slug" 
                                           value="{{ old('slug') }}"
                                           class="flex-1 px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                           placeholder="page-url-slug">
                                </div>
                                <p class="mt-2 text-xs text-slate-500">Leave empty to auto-generate from title</p>
                                @error('slug')
                                    <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- UI Blocks Section -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-white/20 rounded-lg backdrop-blur-sm">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="text-lg font-bold text-white">UI Blocks</h2>
                                        <p class="text-sm text-indigo-100">Build your page with drag & drop blocks</p>
                                    </div>
                                </div>
                                <button type="button" 
                                        class="px-5 py-2.5 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 transition-colors font-semibold text-sm shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed"
                                        disabled
                                        title="Coming soon">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                        Add Block
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="p-12 text-center border-t border-slate-200 bg-slate-50">
                            <div class="max-w-md mx-auto">
                                <div class="w-20 h-20 bg-slate-200 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-700 mb-2">No blocks added yet</h3>
                                <p class="text-sm text-slate-500 mb-4">Start building your page by adding blocks. The block builder feature is coming soon!</p>
                                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-lg text-sm font-medium">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    Feature under development
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SEO Configuration -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="border-b border-slate-200 bg-gradient-to-r from-slate-50 to-slate-100 px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-green-100 rounded-lg">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold text-slate-800">Search Engine Optimization</h2>
                                    <p class="text-sm text-slate-500">Improve your page visibility in search results</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6 space-y-5">
                            <!-- Meta Title -->
                            <div>
                                <label for="meta_title" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Meta Title
                                </label>
                                <input type="text" 
                                       name="meta_title" 
                                       id="meta_title" 
                                       value="{{ old('meta_title') }}"
                                       maxlength="60"
                                       class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                       placeholder="SEO optimized title (60 characters max)">
                                <div class="mt-2 flex items-center justify-between">
                                    <p class="text-xs text-slate-500">Shown in search engine results</p>
                                    <span class="text-xs text-slate-400" id="metaTitleCount">0 / 60</span>
                                </div>
                                @error('meta_title')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Meta Description -->
                            <div>
                                <label for="meta_description" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Meta Description
                                </label>
                                <textarea name="meta_description" 
                                          id="meta_description" 
                                          rows="3"
                                          maxlength="160"
                                          class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all resize-none"
                                          placeholder="Brief description of your page (160 characters max)">{{ old('meta_description') }}</textarea>
                                <div class="mt-2 flex items-center justify-between">
                                    <p class="text-xs text-slate-500">Displayed below the title in search results</p>
                                    <span class="text-xs text-slate-400" id="metaDescCount">0 / 160</span>
                                </div>
                                @error('meta_description')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Meta Keywords -->
                            <div>
                                <label for="meta_keywords" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Focus Keywords
                                </label>
                                <input type="text" 
                                       name="meta_keywords" 
                                       id="meta_keywords" 
                                       value="{{ old('meta_keywords') }}"
                                       class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                       placeholder="keyword1, keyword2, keyword3">
                                <p class="mt-2 text-xs text-slate-500">Separate keywords with commas</p>
                                @error('meta_keywords')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- SEO Preview -->
                            <div class="mt-6 p-4 bg-slate-50 border border-slate-200 rounded-lg">
                                <p class="text-xs font-semibold text-slate-600 mb-3 uppercase tracking-wide">Search Result Preview</p>
                                <div class="space-y-1">
                                    <div class="text-blue-600 text-lg font-medium" id="seoPreviewTitle">Your Page Title</div>
                                    <div class="text-green-700 text-sm" id="seoPreviewUrl">{{ url('/') }}/your-page-slug</div>
                                    <div class="text-slate-600 text-sm leading-relaxed" id="seoPreviewDesc">Your meta description will appear here...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar - 4 columns -->
                <div class="col-span-4 space-y-6">
                    <!-- Publish Box -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden sticky top-24">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                            <h3 class="text-lg font-bold text-white">Publish</h3>
                        </div>
                        <div class="p-6 space-y-5">
                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Status <span class="text-red-500">*</span>
                                </label>
                                <select name="status" 
                                        id="status" 
                                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required>
                                    <option value="draft" {{ old('status', 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                                @error('status')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Template -->
                            <div>
                                <label for="template" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Template <span class="text-red-500">*</span>
                                </label>
                                <select name="template" 
                                        id="template" 
                                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required>
                                    <option value="default" {{ old('template', 'default') === 'default' ? 'selected' : '' }}>Default</option>
                                    <option value="homepage" {{ old('template') === 'homepage' ? 'selected' : '' }}>Homepage</option>
                                    <option value="sidebar" {{ old('template') === 'sidebar' ? 'selected' : '' }}>With Sidebar</option>
                                    <option value="page detail" {{ old('template') === 'page detail' ? 'selected' : '' }}>Page Detail</option>
                                    <option value="coming soon" {{ old('template') === 'coming soon' ? 'selected' : '' }}>Coming Soon</option>
                                </select>
                                @error('template')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Header Style -->
                            <div>
                                <label for="header_style" class="block text-sm font-semibold text-slate-700 mb-2">
                                    Header Style <span class="text-red-500">*</span>
                                </label>
                                <select name="header_style" 
                                        id="header_style" 
                                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        required>
                                    <option value="header style 1" {{ old('header_style', 'Header style 1') === 'Header style 1' ? 'selected' : '' }}>Header style 1</option>
                                    <option value="header style 2" {{ old('header_style') === 'Header style 2' ? 'selected' : '' }}>Header style 2</option>
                                    <option value="header style 3" {{ old('header_style') === 'Header style 3' ? 'selected' : '' }}>Header style 3</option>
                                    <option value="header style 4" {{ old('header_style') === 'Header style 4' ? 'selected' : '' }}>Header style 4</option>
                                </select>
                                @error('header_style')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <hr class="border-slate-200">

                            <!-- Save Button -->
                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3.5 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all font-bold shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Create Page
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    // Auto-generate slug from title
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const metaTitleInput = document.getElementById('meta_title');
    const metaDescInput = document.getElementById('meta_description');
    
    titleInput.addEventListener('input', function() {
        if (!slugInput.value) {
            slugInput.value = this.value
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }
        updateSEOPreview();
    });

    slugInput.addEventListener('input', updateSEOPreview);
    metaTitleInput.addEventListener('input', function() {
        document.getElementById('metaTitleCount').textContent = this.value.length + ' / 60';
        updateSEOPreview();
    });
    metaDescInput.addEventListener('input', function() {
        document.getElementById('metaDescCount').textContent = this.value.length + ' / 160';
        updateSEOPreview();
    });

    function updateSEOPreview() {
        const title = metaTitleInput.value || titleInput.value || 'Your Page Title';
        const slug = slugInput.value || 'your-page-slug';
        const desc = metaDescInput.value || 'Your meta description will appear here...';
        
        document.getElementById('seoPreviewTitle').textContent = title;
        document.getElementById('seoPreviewUrl').textContent = '{{ url('/') }}/' + slug;
        document.getElementById('seoPreviewDesc').textContent = desc;
    }
</script>
@endpush
@endsection
