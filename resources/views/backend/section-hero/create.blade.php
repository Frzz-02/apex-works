@extends('backend.app.layout')

@section('title', 'Create Hero Section')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <div class="flex items-center space-x-2 text-sm text-slate-600 mb-2">
            <a href="{{ route('backend.dashboard') }}" class="hover:text-slate-900">Dashboard</a>
            <span>/</span>
            <a href="{{ route('backend.section-hero.index') }}" class="hover:text-slate-900">Hero Section</a>
            <span>/</span>
            <span class="text-slate-900">Create</span>
        </div>
        <h1 class="text-3xl font-bold text-slate-800">Create Hero Section</h1>
    </div>

    <form action="{{ route('backend.section-hero.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content Column -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Titles & Subtitles -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Titles & Subtitles</h3>
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $i)
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Title {{ $i > 1 ? $i : '' }}</label>
                                    <input type="text" name="{{ $i > 1 ? 'title_' . $i : 'title' }}" value="{{ old($i > 1 ? 'title_' . $i : 'title') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Subtitle {{ $i }}</label>
                                    <input type="text" name="subtitle_{{ $i }}" value="{{ old('subtitle_' . $i) }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Descriptions -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Descriptions</h3>
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $i)
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Description {{ $i > 1 ? $i : '' }}</label>
                                <textarea name="{{ $i > 1 ? 'description_' . $i : 'description' }}" rows="3" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old($i > 1 ? 'description_' . $i : 'description') }}</textarea>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Call to Action</h3>
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $i)
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Button Label {{ $i > 1 ? $i : '' }}</label>
                                    <input type="text" name="{{ $i > 1 ? 'action_label_' . $i : 'action_label' }}" value="{{ old($i > 1 ? 'action_label_' . $i : 'action_label') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Button URL {{ $i > 1 ? $i : '' }}</label>
                                    <input type="text" name="{{ $i > 1 ? 'action_url_' . $i : 'action_url' }}" value="{{ old($i > 1 ? 'action_url_' . $i : 'action_url') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Background Images -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Background Images</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach(['image_background', 'image_background_2', 'image_background_3'] as $field)
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">{{ str_replace('_', ' ', ucfirst($field)) }}</label>
                                <input type="file" name="{{ $field }}" accept="image/*" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="space-y-6">
                <!-- Video URL -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Video</h3>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Video URL</label>
                    <input type="text" name="video_url" value="{{ old('video_url') }}" placeholder="https://youtube.com/..." class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Regular Images -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Images (18 slots)</h3>
                    <div class="space-y-3">
                        @foreach(range(1, 18) as $i)
                            <div>
                                <label class="block text-sm font-medium text-slate-600 mb-1">Image {{ $i }}</label>
                                <input type="file" name="{{ $i === 1 ? 'image' : 'image_' . $i }}" accept="image/*" class="w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl">
                        Create Hero Section
                    </button>
                    <a href="{{ route('backend.section-hero.index') }}" class="block w-full text-center px-6 py-3 mt-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 transition-colors">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
