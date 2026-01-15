@extends('backend.app.layout')

@section('title', 'Add New Footer')

@section('content')
<div class="p-8">
    <div class="mb-6">
        <div class="flex items-center text-sm text-gray-600 mb-4">
            <a href="{{ route('backend.footer.index') }}" class="hover:text-gray-900">Footer</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">Add New</span>
        </div>
        <h1 class="text-3xl font-bold text-gray-900">Add New Footer</h1>
        <p class="text-gray-600 text-sm mt-1">Fill the form below to create a new footer</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('backend.footer.store') }}" method="POST">
            @csrf
            
            <!-- Titles Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Titles</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="title_1" class="block text-sm font-semibold text-gray-700 mb-2">Title 1</label>
                        <input type="text" id="title_1" name="title_1" value="{{ old('title_1') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title_1') border-red-500 @enderror" placeholder="Main title">
                        @error('title_1')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="title_2" class="block text-sm font-semibold text-gray-700 mb-2">Title 2</label>
                        <input type="text" id="title_2" name="title_2" value="{{ old('title_2') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title_2') border-red-500 @enderror" placeholder="Second title">
                        @error('title_2')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="title_3" class="block text-sm font-semibold text-gray-700 mb-2">Title 3</label>
                        <input type="text" id="title_3" name="title_3" value="{{ old('title_3') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title_3') border-red-500 @enderror" placeholder="Third title">
                        @error('title_3')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="title_4" class="block text-sm font-semibold text-gray-700 mb-2">Title 4</label>
                        <input type="text" id="title_4" name="title_4" value="{{ old('title_4') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title_4') border-red-500 @enderror" placeholder="Fourth title">
                        @error('title_4')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Descriptions Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Descriptions</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="description_1" class="block text-sm font-semibold text-gray-700 mb-2">Description 1</label>
                        <textarea id="description_1" name="description_1" rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('description_1') border-red-500 @enderror" placeholder="First description">{{ old('description_1') }}</textarea>
                        @error('description_1')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="description_2" class="block text-sm font-semibold text-gray-700 mb-2">Description 2</label>
                        <textarea id="description_2" name="description_2" rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('description_2') border-red-500 @enderror" placeholder="Second description">{{ old('description_2') }}</textarea>
                        @error('description_2')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Contact Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('phone') border-red-500 @enderror" placeholder="+1 234 567 8900">
                        @error('phone')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('email') border-red-500 @enderror" placeholder="contact@example.com">
                        @error('email')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div class="col-span-2">
                        <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                        <input type="text" id="address" name="address" value="{{ old('address') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('address') border-red-500 @enderror" placeholder="123 Street, City, Country">
                        @error('address')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div class="col-span-2">
                        <label for="linkaddress" class="block text-sm font-semibold text-gray-700 mb-2">Link Address</label>
                        <input type="text" id="linkaddress" name="linkaddress" value="{{ old('linkaddress') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('linkaddress') border-red-500 @enderror" placeholder="Map or location link">
                        @error('linkaddress')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Links Section 1-5 -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Footer Links (1-5)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach(range(1, 5) as $i)
                        <div>
                            <label for="linkname{{ $i }}" class="block text-sm font-semibold text-gray-700 mb-2">Link Name {{ $i }}</label>
                            <input type="text" id="linkname{{ $i }}" name="linkname{{ $i }}" value="{{ old('linkname'.$i) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent mb-2" placeholder="Link name">
                            <input type="text" id="link{{ $i }}" name="link{{ $i }}" value="{{ old('link'.$i) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="https://example.com">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Links Section 6-10 -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Footer Links (6-10)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach(range(6, 10) as $i)
                        <div>
                            <label for="linkname{{ $i }}" class="block text-sm font-semibold text-gray-700 mb-2">Link Name {{ $i }}</label>
                            <input type="text" id="linkname{{ $i }}" name="linkname{{ $i }}" value="{{ old('linkname'.$i) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent mb-2" placeholder="Link name">
                            <input type="text" id="link{{ $i }}" name="link{{ $i }}" value="{{ old('link'.$i) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="https://example.com">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Color Settings -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Color Settings</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="background_color" class="block text-sm font-semibold text-gray-700 mb-2">Background Color</label>
                        <input type="color" id="background_color" name="background_color" value="{{ old('background_color', '#000000') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        @error('background_color')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="title_color" class="block text-sm font-semibold text-gray-700 mb-2">Title Color</label>
                        <input type="color" id="title_color" name="title_color" value="{{ old('title_color', '#ffffff') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        @error('title_color')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="text_color" class="block text-sm font-semibold text-gray-700 mb-2">Text Color</label>
                        <input type="color" id="text_color" name="text_color" value="{{ old('text_color', '#cccccc') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        @error('text_color')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold rounded-lg shadow-md transition-all duration-300">
                    Create Footer
                </button>
                <a href="{{ route('backend.footer.index') }}" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
