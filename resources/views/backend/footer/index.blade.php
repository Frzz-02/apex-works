@extends('backend.app.layout')

@section('title', 'Footer Settings')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Footer Content Settings</h1>
            <p class="text-slate-600 mt-1">Manage your website footer content across all sections</p>
        </div>
        @if(!$footer)
            <a href="{{ route('backend.footer.create') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                <span>Create Footer Settings</span>
            </a>
        @endif
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Error Message -->
    @if(session('error'))
        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    @if($footer)
        <!-- Footer Content Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header Actions -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-5 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-semibold text-white">{{ $footer->company_name }}</h2>
                    <p class="text-blue-100 text-sm mt-1">{{ $footer->company_tagline }}</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('backend.footer.edit', $footer) }}" class="px-5 py-2.5 bg-white text-blue-600 rounded-lg hover:bg-blue-50 transition-colors shadow-md flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        <span>Edit</span>
                    </a>
                    <form action="{{ route('backend.footer.destroy', $footer) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this footer?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-5 py-2.5 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors shadow-md flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span>Delete</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Content Grid - 10 Sections -->
            <div class="p-6 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5">
                
                <!-- SECTION 1: Company Info -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border-l-4 border-blue-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Company Information
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Name:</span>
                            <span class="text-gray-800">{{ $footer->company_name }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Tagline:</span>
                            <span class="text-gray-800">{{ $footer->company_tagline }}</span>
                        </div>
                        <div class="pt-2 border-t border-blue-200">
                            <span class="font-semibold text-gray-600">Address:</span>
                            <p class="text-gray-800 text-xs mt-1">{{ $footer->company_address ?? 'N/A' }}</p>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Phone:</span>
                            <span class="text-gray-800">{{ $footer->company_phone ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Email:</span>
                            <span class="text-gray-800 text-xs">{{ $footer->company_email ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">WhatsApp:</span>
                            <span class="text-gray-800">{{ $footer->company_whatsapp ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Website:</span>
                            <span class="text-gray-800 text-xs">{{ $footer->company_website ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: Contact Column -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-5 border-l-4 border-green-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Contact Column
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Title:</span>
                            <span class="text-gray-800">{{ $footer->contact_column_title }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Phone:</span>
                            <span class="text-gray-800">{{ $footer->contact_phone ?? 'N/A' }}</span>
                        </div>
                        <div class="pt-2 border-t border-green-200">
                            <p class="text-xs font-semibold text-gray-600 mb-2">Links:</p>
                            <div class="space-y-1 text-xs">
                                <p>• <span class="font-medium">{{ $footer->contact_link_1_label }}</span> → <span class="text-blue-600">{{ $footer->contact_link_1_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->contact_link_2_label }}</span> → <span class="text-blue-600">{{ $footer->contact_link_2_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->contact_link_3_label }}</span> → <span class="text-blue-600">{{ $footer->contact_link_3_url }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 3: Product Column -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-5 border-l-4 border-purple-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Product Column
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Title:</span>
                            <span class="text-gray-800">{{ $footer->product_column_title }}</span>
                        </div>
                        <div class="pt-2 border-t border-purple-200">
                            <p class="text-xs font-semibold text-gray-600 mb-2">Links:</p>
                            <div class="space-y-1 text-xs">
                                <p>• <span class="font-medium">{{ $footer->product_link_1_label }}</span> → <span class="text-blue-600">{{ $footer->product_link_1_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->product_link_2_label }}</span> → <span class="text-blue-600">{{ $footer->product_link_2_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->product_link_3_label }}</span> → <span class="text-blue-600">{{ $footer->product_link_3_url }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 4: Media Coverage -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-5 border-l-4 border-red-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        Media Coverage
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Title:</span>
                            <span class="text-gray-800">{{ $footer->media_column_title }}</span>
                        </div>
                        <div class="pt-2 border-t border-red-200">
                            <p class="text-xs font-semibold text-gray-600 mb-2">Featured Media:</p>
                            <div class="space-y-1 text-xs">
                                <p>• <span class="font-medium">{{ $footer->media_1_name }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->media_2_name }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->media_3_name }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->media_4_name }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 5: Legal Column -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-5 border-l-4 border-gray-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-gray-700 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Legal Column
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Title:</span>
                            <span class="text-gray-800">{{ $footer->legal_column_title }}</span>
                        </div>
                        <div class="pt-2 border-t border-gray-200">
                            <p class="text-xs font-semibold text-gray-600 mb-2">Links:</p>
                            <div class="space-y-1 text-xs">
                                <p>• <span class="font-medium">{{ $footer->legal_link_1_label }}</span> → <span class="text-blue-600">{{ $footer->legal_link_1_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->legal_link_2_label }}</span> → <span class="text-blue-600">{{ $footer->legal_link_2_url }}</span></p>
                                <p>• <span class="font-medium">{{ $footer->legal_whatsapp_label }}</span> ({{ $footer->legal_whatsapp_number ?? 'N/A' }})</p>
                                <p>• <span class="font-medium">{{ $footer->legal_website_label }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 6: Social Media -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg p-5 border-l-4 border-indigo-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        Social Media
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->facebook_enabled ? 'bg-blue-50' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>Facebook</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->facebook_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->facebook_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->instagram_enabled ? 'bg-pink-50' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-pink-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/><path d="M12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>Instagram</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->instagram_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->instagram_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->linkedin_enabled ? 'bg-blue-50' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-700" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>LinkedIn</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->linkedin_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->linkedin_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->tiktok_enabled ? 'bg-black bg-opacity-5' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>TikTok</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->tiktok_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->tiktok_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->twitter_enabled ? 'bg-blue-50' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>Twitter</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->twitter_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->twitter_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1.5 px-2 rounded {{ $footer->youtube_enabled ? 'bg-red-50' : 'bg-gray-100' }}">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>YouTube</span>
                            <span class="text-xs px-2 py-0.5 rounded {{ $footer->youtube_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">{{ $footer->youtube_enabled ? 'Enabled' : 'Disabled' }}</span>
                        </div>
                    </div>
                </div>

                <!-- SECTION 7: Guarantee Badge -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-5 border-l-4 border-yellow-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Guarantee Badge
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-gray-600">Status:</span>
                            <span class="px-2.5 py-1 rounded text-xs {{ $footer->guarantee_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">
                                {{ $footer->guarantee_enabled ? 'Enabled' : 'Disabled' }}
                            </span>
                        </div>
                        <div class="pt-2 border-t border-yellow-200">
                            <p class="font-semibold text-gray-600 mb-1">Text:</p>
                            <p class="text-gray-800 bg-white px-3 py-2 rounded">{{ $footer->guarantee_text }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-600 mb-1">Subtitle:</p>
                            <p class="text-gray-800 bg-white px-3 py-2 rounded text-xs">{{ $footer->guarantee_subtitle }}</p>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Icon Path:</span>
                            <span class="text-gray-800 text-xs">{{ $footer->guarantee_icon_path ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>

                <!-- SECTION 8: WhatsApp Float -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-5 border-l-4 border-green-500">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        WhatsApp Floating Button
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-gray-600">Status:</span>
                            <span class="px-2.5 py-1 rounded text-xs {{ $footer->whatsapp_float_enabled ? 'bg-green-200 text-green-800' : 'bg-gray-300 text-gray-600' }}">
                                {{ $footer->whatsapp_float_enabled ? 'Enabled' : 'Disabled' }}
                            </span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Number:</span>
                            <span class="text-gray-800">{{ $footer->whatsapp_float_number ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Position:</span>
                            <span class="text-gray-800">{{ $footer->whatsapp_float_position }}</span>
                        </div>
                        <div class="pt-2 border-t border-green-200">
                            <p class="font-semibold text-gray-600 mb-1">Default Message:</p>
                            <p class="text-gray-800 bg-white px-3 py-2 rounded text-xs italic">{{ Str::limit($footer->whatsapp_float_message, 80) }}</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION 9: Copyright -->
                <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-lg p-5 border-l-4 border-slate-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-slate-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Copyright Information
                    </h3>
                    <div class="space-y-2.5 text-sm">
                        <div>
                            <p class="font-semibold text-gray-600 mb-1">Copyright Text:</p>
                            <p class="text-gray-800 bg-white px-3 py-2 rounded">{{ $footer->copyright_text }}</p>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-gray-600">Year:</span>
                            <span class="text-gray-800 bg-white px-3 py-1 rounded">{{ $footer->copyright_year }}</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-600 mb-1">Credit:</p>
                            <p class="text-gray-800 bg-white px-3 py-2 rounded text-xs">{{ $footer->copyright_credit }}</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION 10: Styling -->
                <div class="lg:col-span-2 xl:col-span-3 bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-5 border-l-4 border-pink-600">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-pink-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                        Footer Styling & Colors
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="bg-white p-4 rounded-lg border border-pink-200">
                            <p class="font-semibold text-gray-600 mb-2 text-xs">Background Color</p>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-inner" style="background-color: {{ $footer->footer_background_color }}"></div>
                                <span class="text-xs font-mono text-gray-700">{{ $footer->footer_background_color }}</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-pink-200">
                            <p class="font-semibold text-gray-600 mb-2 text-xs">Text Color</p>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-inner" style="background-color: {{ $footer->footer_text_color }}"></div>
                                <span class="text-xs font-mono text-gray-700">{{ $footer->footer_text_color }}</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-pink-200">
                            <p class="font-semibold text-gray-600 mb-2 text-xs">Link Color</p>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-inner" style="background-color: {{ $footer->footer_link_color }}"></div>
                                <span class="text-xs font-mono text-gray-700">{{ $footer->footer_link_color }}</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-pink-200">
                            <p class="font-semibold text-gray-600 mb-2 text-xs">Link Hover Color</p>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-inner" style="background-color: {{ $footer->footer_link_hover_color }}"></div>
                                <span class="text-xs font-mono text-gray-700">{{ $footer->footer_link_hover_color }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Status Badge -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <div class="flex justify-center">
                    <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg {{ $footer->is_active ? 'bg-green-100 text-green-800 border border-green-300' : 'bg-red-100 text-red-800 border border-red-300' }}">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            @if($footer->is_active)
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            @else
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            @endif
                        </svg>
                        <span class="font-semibold">Footer is {{ $footer->is_active ? 'Active' : 'Inactive' }}</span>
                    </div>
                </div>
            </div>

        </div>
    @else
        <!-- Empty State -->
        <div class="bg-white rounded-xl shadow-lg p-16 text-center">
            <div class="max-w-md mx-auto">
                <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">No Footer Settings Found</h3>
                <p class="text-gray-500 mb-8 leading-relaxed">Create your footer configuration to manage company information, social media links, legal information, and visual styling settings.</p>
                <a href="{{ route('backend.footer.create') }}" class="inline-flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg transition-colors shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    <span class="font-semibold">Create Footer Settings</span>
                </a>
            </div>
        </div>
    @endif
</div>
@endsection
