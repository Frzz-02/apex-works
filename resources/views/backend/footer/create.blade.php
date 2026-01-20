@extends('backend.app.layout')

@section('title', 'Create Footer Settings')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-slate-800">Create Footer Settings</h1>
        <p class="text-slate-600 mt-1">Configure footer content for your website</p>
    </div>

    <form action="{{ route('backend.footer.store') }}" method="POST" class="bg-white rounded-xl shadow-lg">
        @csrf
        
        <div class="p-6 space-y-6">
            
            <!-- Company Info -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-5 border-l-4 border-blue-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">1. Company Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" value="{{ old('company_name', 'LANYARD KENDAL') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Company Tagline</label>
                    <input type="text" name="company_tagline" value="{{ old('company_tagline', 'BOGOR') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                    <textarea name="company_address" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('company_address') }}</textarea></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                    <input type="text" name="company_phone" value="{{ old('company_phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                    <input type="email" name="company_email" value="{{ old('company_email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp</label>
                    <input type="text" name="company_whatsapp" value="{{ old('company_whatsapp') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Website</label>
                    <input type="text" name="company_website" value="{{ old('company_website') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></div>
                </div>
            </div>

            <!-- Contact Column -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-5 border-l-4 border-green-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">2. Contact Column</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Column Title</label>
                    <input type="text" name="contact_column_title" value="{{ old('contact_column_title', 'Hubungi Kami') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                    <input type="text" name="contact_phone" value="{{ old('contact_phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 Label</label>
                    <input type="text" name="contact_link_1_label" value="{{ old('contact_link_1_label', 'Tentang Kami') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 URL</label>
                    <input type="text" name="contact_link_1_url" value="{{ old('contact_link_1_url', '/tentang-kami') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 Label</label>
                    <input type="text" name="contact_link_2_label" value="{{ old('contact_link_2_label', 'Portfolio') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 URL</label>
                    <input type="text" name="contact_link_2_url" value="{{ old('contact_link_2_url', '/portfolio') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 3 Label</label>
                    <input type="text" name="contact_link_3_label" value="{{ old('contact_link_3_label', 'Blog') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 3 URL</label>
                    <input type="text" name="contact_link_3_url" value="{{ old('contact_link_3_url', '/blog') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                </div>
            </div>

            <!-- Product Column -->
            <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg p-5 border-l-4 border-purple-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">3. Product Column</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Column Title</label>
                    <input type="text" name="product_column_title" value="{{ old('product_column_title', 'Produk') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 Label</label>
                    <input type="text" name="product_link_1_label" value="{{ old('product_link_1_label', 'Produk') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 URL</label>
                    <input type="text" name="product_link_1_url" value="{{ old('product_link_1_url', '/produk') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 Label</label>
                    <input type="text" name="product_link_2_label" value="{{ old('product_link_2_label', 'FAQ') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 URL</label>
                    <input type="text" name="product_link_2_url" value="{{ old('product_link_2_url', '/faq') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 3 Label</label>
                    <input type="text" name="product_link_3_label" value="{{ old('product_link_3_label', 'Karir') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 3 URL</label>
                    <input type="text" name="product_link_3_url" value="{{ old('product_link_3_url', '/karir') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"></div>
                </div>
            </div>

            <!-- Media Coverage -->
            <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-lg p-5 border-l-4 border-red-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">4. Media Coverage</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Column Title</label>
                    <input type="text" name="media_column_title" value="{{ old('media_column_title', 'DILIPUT OLEH') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 1 Name</label>
                    <input type="text" name="media_1_name" value="{{ old('media_1_name', 'Kompas.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 1 URL</label>
                    <input type="url" name="media_1_url" value="{{ old('media_1_url', 'https://kompas.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 2 Name</label>
                    <input type="text" name="media_2_name" value="{{ old('media_2_name', 'Detik.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 2 URL</label>
                    <input type="url" name="media_2_url" value="{{ old('media_2_url', 'https://detik.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 3 Name</label>
                    <input type="text" name="media_3_name" value="{{ old('media_3_name', 'Tribunnews.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 3 URL</label>
                    <input type="url" name="media_3_url" value="{{ old('media_3_url', 'https://tribunnews.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 4 Name</label>
                    <input type="text" name="media_4_name" value="{{ old('media_4_name', 'CNN Indonesia') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Media 4 URL</label>
                    <input type="url" name="media_4_url" value="{{ old('media_4_url', 'https://cnnindonesia.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500"></div>
                </div>
            </div>

            <!-- Legal Column -->
            <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-5 border-l-4 border-gray-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">5. Legal Column</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Column Title</label>
                    <input type="text" name="legal_column_title" value="{{ old('legal_column_title', 'Privacy / Legal') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 Label</label>
                    <input type="text" name="legal_link_1_label" value="{{ old('legal_link_1_label', 'Privacy / Legal') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 1 URL</label>
                    <input type="text" name="legal_link_1_url" value="{{ old('legal_link_1_url', '/privacy') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 Label</label>
                    <input type="text" name="legal_link_2_label" value="{{ old('legal_link_2_label', 'Syarat & Ketentuan') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link 2 URL</label>
                    <input type="text" name="legal_link_2_url" value="{{ old('legal_link_2_url', '/terms') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp Label</label>
                    <input type="text" name="legal_whatsapp_label" value="{{ old('legal_whatsapp_label', 'WA') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp Number</label>
                    <input type="text" name="legal_whatsapp_number" value="{{ old('legal_whatsapp_number') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp URL</label>
                    <input type="url" name="legal_whatsapp_url" value="{{ old('legal_whatsapp_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Website Label</label>
                    <input type="text" name="legal_website_label" value="{{ old('legal_website_label', 'lanyardkendal.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Website URL</label>
                    <input type="url" name="legal_website_url" value="{{ old('legal_website_url', 'https://lanyardkendal.com') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500"></div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-gradient-to-r from-indigo-50 to-indigo-100 rounded-lg p-5 border-l-4 border-indigo-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">6. Social Media Links</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Facebook URL</label>
                    <input type="url" name="facebook_url" value="{{ old('facebook_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="facebook_enabled" value="1" {{ old('facebook_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable Facebook</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Instagram URL</label>
                    <input type="url" name="instagram_url" value="{{ old('instagram_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="instagram_enabled" value="1" {{ old('instagram_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable Instagram</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">LinkedIn URL</label>
                    <input type="url" name="linkedin_url" value="{{ old('linkedin_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="linkedin_enabled" value="1" {{ old('linkedin_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable LinkedIn</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">TikTok URL</label>
                    <input type="url" name="tiktok_url" value="{{ old('tiktok_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="tiktok_enabled" value="1" {{ old('tiktok_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable TikTok</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Twitter URL</label>
                    <input type="url" name="twitter_url" value="{{ old('twitter_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="twitter_enabled" value="1" {{ old('twitter_enabled') ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable Twitter</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">YouTube URL</label>
                    <input type="url" name="youtube_url" value="{{ old('youtube_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></div>
                    <div class="flex items-center pt-7"><label class="flex items-center"><input type="checkbox" name="youtube_enabled" value="1" {{ old('youtube_enabled') ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 rounded mr-2">Enable YouTube</label></div>
                </div>
            </div>

            <!-- Guarantee Badge -->
            <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-lg p-5 border-l-4 border-yellow-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">7. Guarantee Badge</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2"><label class="flex items-center"><input type="checkbox" name="guarantee_enabled" value="1" {{ old('guarantee_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-yellow-600 rounded mr-2">Enable Guarantee Badge</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Guarantee Text</label>
                    <input type="text" name="guarantee_text" value="{{ old('guarantee_text', 'GARANSI 100%') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Guarantee Subtitle</label>
                    <input type="text" name="guarantee_subtitle" value="{{ old('guarantee_subtitle', 'BEST QUALITY GUARANTEE') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500"></div>
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Icon Path</label>
                    <input type="text" name="guarantee_icon_path" value="{{ old('guarantee_icon_path') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500"></div>
                </div>
            </div>

            <!-- WhatsApp Float -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-5 border-l-4 border-green-500">
                <h3 class="text-xl font-bold text-gray-800 mb-4">8. WhatsApp Floating Button</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2"><label class="flex items-center"><input type="checkbox" name="whatsapp_float_enabled" value="1" {{ old('whatsapp_float_enabled', true) ? 'checked' : '' }} class="w-4 h-4 text-green-600 rounded mr-2">Enable WhatsApp Float Button</label></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">WhatsApp Number</label>
                    <input type="text" name="whatsapp_float_number" value="{{ old('whatsapp_float_number') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Position</label>
                    <select name="whatsapp_float_position" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        <option value="bottom-right" {{ old('whatsapp_float_position', 'bottom-right') == 'bottom-right' ? 'selected' : '' }}>Bottom Right</option>
                        <option value="bottom-left" {{ old('whatsapp_float_position') == 'bottom-left' ? 'selected' : '' }}>Bottom Left</option>
                        <option value="top-right" {{ old('whatsapp_float_position') == 'top-right' ? 'selected' : '' }}>Top Right</option>
                        <option value="top-left" {{ old('whatsapp_float_position') == 'top-left' ? 'selected' : '' }}>Top Left</option>
                    </select></div>
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Default Message</label>
                    <textarea name="whatsapp_float_message" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">{{ old('whatsapp_float_message', 'Halo, saya ingin bertanya tentang produk Lanyard Kendal') }}</textarea></div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="bg-gradient-to-r from-slate-50 to-slate-100 rounded-lg p-5 border-l-4 border-slate-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">9. Copyright Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="md:col-span-2"><label class="block text-sm font-semibold text-gray-700 mb-2">Copyright Text</label>
                    <input type="text" name="copyright_text" value="{{ old('copyright_text', 'LanyardKendal © 2026') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Year</label>
                    <input type="number" name="copyright_year" value="{{ old('copyright_year', 2026) }}" min="1900" max="2036" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500"></div>
                    <div class="md:col-span-3"><label class="block text-sm font-semibold text-gray-700 mb-2">Credit</label>
                    <input type="text" name="copyright_credit" value="{{ old('copyright_credit', 'by LanyardKendal Team') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500"></div>
                </div>
            </div>

            <!-- Styling -->
            <div class="bg-gradient-to-r from-pink-50 to-pink-100 rounded-lg p-5 border-l-4 border-pink-600">
                <h3 class="text-xl font-bold text-gray-800 mb-4">10. Footer Styling</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Background Color</label>
                    <input type="color" name="footer_background_color" value="{{ old('footer_background_color', '#0a0e27') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Text Color</label>
                    <input type="color" name="footer_text_color" value="{{ old('footer_text_color', '#ffffff') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link Color</label>
                    <input type="color" name="footer_link_color" value="{{ old('footer_link_color', '#9ca3af') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg"></div>
                    <div><label class="block text-sm font-semibold text-gray-700 mb-2">Link Hover Color</label>
                    <input type="color" name="footer_link_hover_color" value="{{ old('footer_link_hover_color', '#ffffff') }}" class="w-full h-12 px-2 border border-gray-300 rounded-lg"></div>
                    <div class="md:col-span-2 lg:col-span-4"><label class="flex items-center"><input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="w-4 h-4 text-pink-600 rounded mr-2">Footer Active</label></div>
                </div>
            </div>

        </div>

        <!-- Submit -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-end space-x-3">
            <a href="{{ route('backend.footer.index') }}" class="px-6 py-2.5 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Cancel</a>
            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Create Footer Settings</button>
        </div>
    </form>
</div>
@endsection
