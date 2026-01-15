@extends('backend.app.layout')

@section('title', 'Create About Section')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <div class="flex items-center space-x-2 text-sm text-slate-600 mb-2">
            <a href="{{ route('backend.dashboard') }}" class="hover:text-slate-900">Dashboard</a>
            <span>/</span>
            <a href="{{ route('backend.section-about.index') }}" class="hover:text-slate-900">About Section</a>
            <span>/</span>
            <span class="text-slate-900">Create</span>
        </div>
        <h1 class="text-3xl font-bold text-slate-800">Create About Section</h1>
    </div>

    <form action="{{ route('backend.section-about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <!-- Basic Info -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Basic Information</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Subtitle</label>
                            <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Blockquote</label>
                            <input type="text" name="blockquote" value="{{ old('blockquote') }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Description</label>
                            <textarea name="description" rows="4" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Checklist -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Checklist Items</h3>
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $i)
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Checklist {{ $i }}</label>
                                <input type="text" name="checklist_{{ $i }}" value="{{ old('checklist_' . $i) }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <!-- Video URL -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Video</h3>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Video URL</label>
                    <input type="text" name="video_url" value="{{ old('video_url') }}" placeholder="https://youtube.com/..." class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Images -->
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

                <!-- Submit -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl">
                        Create About Section
                    </button>
                    <a href="{{ route('backend.section-about.index') }}" class="block w-full text-center px-6 py-3 mt-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 transition-colors">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
