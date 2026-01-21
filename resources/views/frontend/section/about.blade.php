@if($about && $about->is_active)
<section class="py-20 bg-{{ $about->section_background ?? 'gray-100' }}">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24" data-reveal>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    @if($about->image_1_source)
                    <div class="relative">
                        <img src="{{ $about->image_1_type === 'upload' ? asset($about->image_1_source) : $about->image_1_source }}"
                             alt="{{ $about->image_1_alt ?? 'About Image 1' }}"
                             class="w-full h-48 object-cover rounded-2xl shadow-lg">
                    </div>
                    @endif
                    @if($about->image_2_source)
                    <div class="row-span-2">
                        <img src="{{ $about->image_2_type === 'upload' ? asset($about->image_2_source) : $about->image_2_source }}"
                             alt="{{ $about->image_2_alt ?? 'About Image 2' }}"
                             class="w-full h-full object-cover rounded-2xl shadow-lg" style="min-height: 400px;">
                    </div>
                    @endif
                    @if($about->image_3_source)
                    <div class="relative">
                        <img src="{{ $about->image_3_type === 'upload' ? asset($about->image_3_source) : $about->image_3_source }}"
                             alt="{{ $about->image_3_alt ?? 'About Image 3' }}"
                             class="w-full h-48 object-cover rounded-2xl shadow-lg">
                    </div>
                    @endif
                </div>
            </div>

            <div>
                @if($about->section_label)
                <span class="text-sm font-bold text-{{ $about->label_color ?? 'blue-600' }} tracking-widest uppercase mb-4 block">{{ $about->section_label }}</span>
                @endif

                @if($about->section_title)
                <h2 class="text-3xl md:text-4xl font-bold text-{{ $about->title_color ?? 'gray-900' }} mb-6">{{ $about->section_title }}</h2>
                @endif

                @if($about->section_description)
                <p class="text-{{ $about->description_color ?? 'gray-600' }} leading-relaxed mb-8">
                    {{ $about->section_description }}
                </p>
                @endif

                @if($about->benefit_title)
                <h4 class="font-bold text-{{ $about->title_color ?? 'gray-900' }} mb-6">{{ $about->benefit_title }}</h4>
                @endif

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        @if($about->benefit_1_enabled && $about->benefit_1_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_1_text }}</span>
                        </div>
                        @endif
                        @if($about->benefit_2_enabled && $about->benefit_2_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_2_text }}</span>
                        </div>
                        @endif
                        @if($about->benefit_3_enabled && $about->benefit_3_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_3_text }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="space-y-4">
                        @if($about->benefit_4_enabled && $about->benefit_4_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_4_text }}</span>
                        </div>
                        @endif
                        @if($about->benefit_5_enabled && $about->benefit_5_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_5_text }}</span>
                        </div>
                        @endif
                        @if($about->benefit_6_enabled && $about->benefit_6_text)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-{{ $about->benefit_icon_color ?? 'blue-500' }} flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-{{ $about->description_color ?? 'gray-700' }}">{{ $about->benefit_6_text }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif