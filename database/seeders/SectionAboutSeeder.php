<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SectionAboutSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        
        DB::table('section_about')->insert([
            // Section Header
            'section_label' => 'KEUNGGULAN KAMI',
            'section_title' => 'Distributor Suku Cadang & Sparepart Kendaraan Terpercaya',
            'section_description' => 'Kami menyediakan solusi suku cadang kendaraan lengkap dengan standar kualitas global. Didukung oleh kemitraan distributor resmi, kami menjamin setiap komponen mesin, sistem pengereman, hingga transmisi memiliki durabilitas tinggi untuk keamanan dan performa maksimal kendaraan Anda di setiap perjalanan.',
            
            // Images - Using URL (can be changed to upload later)
            'image_1_type' => 'url',
            'image_1_source' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=400&q=80',
            'image_1_alt' => 'Gudang Suku Cadang Lengkap',
            
            'image_2_type' => 'url',
            'image_2_source' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=400&q=80',
            'image_2_alt' => 'Detail Komponen Mesin Presisi',
            
            'image_3_type' => 'url',
            'image_3_source' => 'https://images.unsplash.com/photo-1590674899484-d5640e854abe?w=400&q=80',
            'image_3_alt' => 'Logistik Sparepart Kendaraan',
            
            // Benefits
            'benefit_title' => 'Keuntungan memilih sparepart kami:',
            
            // Column 1
            'benefit_1_text' => 'Jaminan Produk 100% Asli',
            'benefit_1_icon' => 'check',
            'benefit_1_enabled' => true,
            
            'benefit_2_text' => 'Pengiriman Kilat Seluruh Indonesia',
            'benefit_2_icon' => 'check',
            'benefit_2_enabled' => true,
            
            'benefit_3_text' => 'Ready Stock Komponen Langka',
            'benefit_3_icon' => 'check',
            'benefit_3_enabled' => true,
            
            // Column 2
            'benefit_4_text' => 'Garansi Kepuasan Pelanggan',
            'benefit_4_icon' => 'check',
            'benefit_4_enabled' => true,
            
            'benefit_5_text' => 'Sertifikasi Standar Pabrikan',
            'benefit_5_icon' => 'check',
            'benefit_5_enabled' => true,
            
            'benefit_6_text' => 'Harga Kompetitif & Transparan',
            'benefit_6_icon' => 'check',
            'benefit_6_enabled' => true,
            
            // Styling
            'section_background' => 'gray-100',
            'label_color' => 'blue-600',
            'title_color' => 'gray-900',
            'description_color' => 'gray-600',
            'benefit_icon_color' => 'blue-500',
            
            // Meta
            'is_active' => true,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}