<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SectionHero;

class SectionHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            // Panel 1: Fokus pada Kualitas/Keaslian
            [
                'mood_tag' => 'PREMIUM SPAREPARTS',
                'title' => 'Suku Cadang Kendaraan Orisinal & Terpercaya',
                'description' => 'Tingkatkan performa mesin dengan sparepart original kualitas dunia. Solusi suku cadang lengkap untuk semua jenis merek kendaraan Anda.',
                'cta_text' => 'CEK KATALOG',
                'cta_url' => '#katalog',
                'image_path' => 'assets/images/hero/bg-sparepart-1.jpg',
                'image_alt' => 'Distributor Suku Cadang Mobil Orisinal',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800&q=80',
                'panel_order' => 1,
                'is_active' => true,
            ],
            
            // Panel 2: Fokus pada Solusi Mesin/Kesehatan Kendaraan
            [
                'mood_tag' => 'ENGINE PERFORMANCE',
                'title' => 'Solusi Performa Mesin Maksimal',
                'description' => 'Temukan komponen mesin, transmisi, hingga sistem pengereman terbaik. Kami menjamin daya tahan komponen untuk keamanan berkendara Anda.',
                'cta_text' => 'KONSULTASI TEKNIS',
                'cta_url' => 'https://wa.me/6281316509191?text=Halo%20Admin,%20saya%20ingin%20konsultasi%20sparepart%20mesin',
                'image_path' => 'assets/images/hero/bg-sparepart-2.jpg',
                'image_alt' => 'Suku cadang mesin kendaraan berperforma tinggi',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=800&q=80',
                'panel_order' => 2,
                'is_active' => true,
            ],
            
            // Panel 3: Fokus pada Pengiriman & Kecepatan (SEO: Toko Sparepart Terdekat/Cepat)
            [
                'mood_tag' => 'FAST DELIVERY',
                'title' => 'Pengiriman Cepat & Stok Selalu Ready',
                'description' => 'Pesan sekarang, kirim hari ini! Kami menyediakan pengiriman kilat untuk memastikan kendaraan Anda tidak tertahan lama di bengkel.',
                'cta_text' => 'PESAN SEKARANG',
                'cta_url' => 'https://wa.me/6281316509191?text=Halo%20Admin,%20saya%20ingin%20cek%20stok%20sparepart',
                'image_path' => 'assets/images/hero/bg-sparepart-3.jpg',
                'image_alt' => 'Toko sparepart mobil terdekat pengiriman cepat',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1562426509-5044a121aa49?w=800&q=80',
                'panel_order' => 3,
                'is_active' => true,
            ],
            
            // Panel 4: Fokus pada Harga (SEO: Harga Sparepart Murah/Grosir)
            [
                'mood_tag' => 'BEST PRICE GUARANTEE',
                'title' => 'Harga Grosir Suku Cadang Kompetitif',
                'description' => 'Dapatkan penawaran harga sparepart termurah untuk pembelian retail maupun grosir. Kualitas bengkel resmi, harga ramah di kantong.',
                'cta_text' => 'LIHAT PROMO',
                'cta_url' => '#promo',
                'image_path' => 'assets/images/hero/bg-sparepart-4.jpg',
                'image_alt' => 'Grosir sparepart kendaraan murah berkualitas',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1635437536607-b8572f443763?auto=format&fit=crop&q=80&w=1200',
                'panel_order' => 4,
                'is_active' => true,
            ],
            
            // Panel 5: Fokus pada Kepercayaan (SEO: Toko Sparepart Terpercaya)
            [
                'mood_tag' => 'OFFICIAL DISTRIBUTOR',
                'title' => 'Mitra Bengkel & Perusahaan Se-Indonesia',
                'description' => 'Telah mensuplai ribuan suku cadang ke bengkel rekanan dan perusahaan ekspedisi di seluruh nusantara dengan jaminan garansi.',
                'cta_text' => 'TENTANG KAMI',
                'cta_url' => '#about',
                'image_path' => 'assets/images/hero/bg-sparepart-5.jpg',
                'image_alt' => 'Distributor suku cadang kendaraan terpercaya di Indonesia',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1504222490345-c075b6008014?w=1200&q=80',
                'panel_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($heroes as $hero) {
            SectionHero::create($hero);
        }
    }
}