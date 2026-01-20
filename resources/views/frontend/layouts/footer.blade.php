<footer class="bg-gray-950" style="background-color: {{ $footer->footer_background_color ?? '#0a0e27' }}">
    <!-- Top Section - Logo, Address & Social -->
    <div class="border-b border-white/10">
        <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 py-12">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                <!-- Logo & Company Name -->
                <div class="text-center lg:text-left">
                    <p class="text-xs tracking-[0.3em] text-gray-400 mb-1" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ strtoupper(explode(' ', $footer->company_name ?? 'LANYARD')[0]) }}</p>
                    <h3 class="text-2xl md:text-3xl tracking-wider" style="color: {{ $footer->footer_text_color ?? '#ffffff' }}">{{ strtoupper(substr($footer->company_name ?? 'KENDAL', strpos($footer->company_name ?? 'KENDAL', ' ') + 1)) }}</h3>
                    <p class="text-xs tracking-[0.2em] text-gray-500 mt-1" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ strtoupper($footer->company_tagline ?? 'BOGOR') }}</p>
                </div>

                <!-- Address & Contact -->
                <div class="text-gray-400 text-sm space-y-1" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
                    <p>{{ $footer->company_address ?? 'Jl. Cifor Batuhulung No.Rt.03/02, Bogor, Jawa Barat 16116' }}</p>
                    <p>Tel. <a href="tel:{{ str_replace([' ', '-'], '', $footer->company_phone ?? '+6281316509191') }}" class="hover:text-white transition-colors" style="color: inherit">{{ $footer->company_phone ?? '+62 813-1650-9191' }}</a></p>
                    <p><a href="mailto:{{ $footer->company_email ?? 'contact@lanyardkendal.com' }}" class="hover:text-white transition-colors" style="color: inherit">{{ $footer->company_email ?? 'contact@lanyardkendal.com' }}</a></p>
                </div>

                <!-- Social Icons -->
                <div class="flex items-center gap-8">
                    @if($footer->facebook_enabled ?? false)
                    <a href="{{ $footer->facebook_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    @endif
                    @if($footer->instagram_enabled ?? false)
                    <a href="{{ $footer->instagram_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    @endif
                    @if($footer->linkedin_enabled ?? false)
                    <a href="{{ $footer->linkedin_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    @endif
                    @if($footer->tiktok_enabled ?? false)
                    <a href="{{ $footer->tiktok_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    
    
    

    <!-- Middle Section - Links -->
    <div class="border-b border-white/10">
        <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 py-12">
            <div class="flex flex-col lg:flex-row justify-between gap-10">
                <!-- Left Links -->
                <div class="flex flex-col sm:flex-row gap-10 sm:gap-20">
                    <div class="space-y-4">
                        <a href="tel:{{ str_replace([' ', '-'], '', $footer->contact_phone ?? '+6281316509191') }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->contact_phone ?? 'Tel. +62 813-1650-9191' }}</a>
                        @if($footer->contact_link_1_label)
                        <a href="{{ $footer->contact_link_1_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->contact_link_1_label }}</a>
                        @endif
                        @if($footer->contact_link_2_label)
                        <a href="{{ $footer->contact_link_2_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->contact_link_2_label }}</a>
                        @endif
                        @if($footer->contact_link_3_label)
                        <a href="{{ $footer->contact_link_3_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->contact_link_3_label }}</a>
                        @endif
                    </div>
                    <div class="space-y-4">
                        @if($footer->product_link_1_label)
                        <a href="{{ $footer->product_link_1_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->product_link_1_label }}</a>
                        @endif
                        @if($footer->product_link_2_label)
                        <a href="{{ $footer->product_link_2_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->product_link_2_label }}</a>
                        @endif
                        @if($footer->product_link_3_label)
                        <a href="{{ $footer->product_link_3_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->product_link_3_label }}</a>
                        @endif
                    </div>
                </div>

                <!-- Center - Media / Press Links -->
                <div class="space-y-4">
                    <p class="text-xs tracking-[0.2em] uppercase mb-4" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->media_column_title ?? 'Diliput Oleh' }}</p>
                    @if($footer->media_1_name)
                    <a href="{{ $footer->media_1_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->media_1_name }}</a>
                    @endif
                    @if($footer->media_2_name)
                    <a href="{{ $footer->media_2_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->media_2_name }}</a>
                    @endif
                    @if($footer->media_3_name)
                    <a href="{{ $footer->media_3_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->media_3_name }}</a>
                    @endif
                    @if($footer->media_4_name)
                    <a href="{{ $footer->media_4_url ?? '#' }}" target="_blank" rel="noopener noreferrer" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->media_4_name }}</a>
                    @endif
                </div>

                <!-- Right Links & Badges -->
                <div class="flex flex-col sm:flex-row gap-10 sm:gap-20 lg:items-start">
                    <div class="space-y-4 lg:text-right">
                        @if($footer->legal_link_1_label)
                        <a href="{{ $footer->legal_link_1_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->legal_link_1_label }}</a>
                        @endif
                        @if($footer->legal_link_2_label)
                        <a href="{{ $footer->legal_link_2_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->legal_link_2_label }}</a>
                        @endif
                    </div>
                    <div class="space-y-4 lg:text-right">
                        @if($footer->legal_whatsapp_label && $footer->legal_whatsapp_number)
                        <a href="{{ $footer->legal_whatsapp_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->legal_whatsapp_label }}: {{ $footer->legal_whatsapp_number }}</a>
                        @endif
                        @if($footer->legal_website_label)
                        <a href="{{ $footer->legal_website_url ?? '#' }}" class="block text-lg transition-colors" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ $footer->legal_website_label }}</a>
                        @endif
                    </div>
                </div>
            </div>

            @if($footer->guarantee_enabled ?? false)
            <!-- Trust Badges -->
            <div class="flex flex-col sm:flex-row justify-end items-center gap-10 mt-12">
                <div class="flex items-center gap-3" style="color: {{ $footer->footer_text_color ?? '#ffffff' }}">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="text-lg tracking-wider">{{ strtoupper(explode(' ', $footer->guarantee_text ?? 'GARANSI 100%')[0]) }} <span class="font-bold">{{ substr($footer->guarantee_text ?? '100%', strpos($footer->guarantee_text ?? '100%', ' ') + 1) }}</span></span>
                </div>
                <div class="border-l border-white/30 pl-8" style="color: {{ $footer->footer_text_color ?? '#ffffff' }}">
                    <p class="text-base tracking-wider" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">{{ strtoupper(explode(' ', $footer->guarantee_subtitle ?? 'BEST QUALITY')[0] . ' ' . explode(' ', $footer->guarantee_subtitle ?? 'BEST QUALITY')[1]) }}</p>
                    <p class="text-lg font-bold tracking-wider">{{ strtoupper(substr($footer->guarantee_subtitle ?? 'GUARANTEE', strrpos($footer->guarantee_subtitle ?? 'GUARANTEE', ' ') + 1)) }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 py-6">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-sm" style="color: {{ $footer->footer_link_color ?? '#9ca3af' }}">
            <p>{{ $footer->copyright_text ?? 'LanyardKendal' }} &copy; {{ $footer->copyright_year ?? date('Y') }}</p>
            <p>{{ $footer->copyright_credit ?? 'by LanyardKendal Team' }}</p>
        </div>
    </div>
</footer>