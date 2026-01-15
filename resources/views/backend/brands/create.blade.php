
@extends('backend.app.layout')

@section('title', 'Add New Brand')

@section('content')
<div class="p-8">
    <div class="mb-6">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="{{ route('backend.brands.index') }}" class="hover:text-gray-900">Brands</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">Add New</span>
        </div>
        <h1 class="text-3xl font-bold text-gray-900">Add New Brand</h1>
        <p class="text-gray-600 text-sm mt-1">Fill the form below to create a new brand</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('backend.brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Brand Name -->
                <div class="col-span-2">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Brand Name <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('name') border-red-500 @enderror"
                        placeholder="Enter brand name"
                        required
                    >
                    @error('name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Logo Upload -->
                <div class="col-span-2">
                    <label for="logo" class="block text-sm font-semibold text-gray-700 mb-2">
                        Logo Image
                    </label>
                    <input 
                        type="file" 
                        id="logo" 
                        name="logo" 
                        accept="image/*"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('logo') border-red-500 @enderror"
                        onchange="previewImage(event)"
                    >
                    @error('logo')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Upload brand logo (JPG, PNG, GIF - Max: 2MB)</p>
                    <div id="imagePreview" class="mt-3 hidden">
                        <img id="preview" src="" alt="Preview" class="h-32 w-auto object-contain border border-gray-200 rounded p-2">
                    </div>
                </div>

                <!-- Website URL -->
                <div class="col-span-2">
                    <label for="url" class="block text-sm font-semibold text-gray-700 mb-2">
                        Website URL
                    </label>
                    <input 
                        type="url" 
                        id="url" 
                        name="url" 
                        value="{{ old('url') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('url') border-red-500 @enderror"
                        placeholder="https://example.com"
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
                    Create Brand
                </button>
                <a 
                    href="{{ route('backend.brands.index') }}" 
                    class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-colors"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    const previewContainer = document.getElementById('imagePreview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endpush
@endsection