<!-- Hero Section - 5 Panel Gallery Layout -->
<section class="pt-20 bg-white">
    <div class="h-[calc(100vh-80px)] flex">
        @forelse($heroPanels as $panel)
        <!-- Panel {{ $loop->iteration }} - {{ $panel->mood_tag }} -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ $panel->image_path ? asset($panel->image_path) : asset('assets/images/hero/bg-' . $loop->iteration . '.jpg') }}"
                 alt="{{ $panel->image_alt ?? $panel->title }}"
                 onerror="this.src='{{ $panel->fallback_image_url ?? 'https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&q=80' }}'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/{{ intval(($panel->background_overlay_opacity ?? 0.10) * 100) }} group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                @if($panel->mood_tag)
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">{{ strtoupper($panel->mood_tag) }}</span>
                @endif
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    {{ $panel->title ?? 'Hero Title' }}
                </h2>
                @if($panel->description)
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    {{ $panel->description }}
                </p>
                @endif
                @if($panel->cta_text && $panel->cta_url)
                <a href="{{ $panel->cta_url }}"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    {{ strtoupper($panel->cta_text) }}
                </a>
                @endif
            </div>
        </div>
        @empty
        <!-- Default Panel - No Data -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('assets/images/hero/slide-1.svg') }}"
                 alt="Hero Banner"
                 onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&q=80'"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">NO HERO PANELS</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">Please Add Hero Panels</h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">Configure hero panels from the admin dashboard.</p>
            </div>
        </div>
        @endforelse
    </div>
</section>