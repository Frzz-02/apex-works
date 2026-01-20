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
            // Panel 1
            [
                'mood_tag' => 'PREMIUM QUALITY',
                'title' => 'Lanyard Berkualitas Tinggi',
                'description' => 'Bahan premium dengan hasil cetak tajam dan tahan lama. Tersedia berbagai pilihan bahan berkualitas.',
                'cta_text' => 'READ MORE',
                'cta_url' => '#',
                'image_path' => 'assets/images/hero/bg-1.jpg',
                'image_alt' => 'Premium Quality Lanyard',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&q=80',
                'panel_order' => 1,
                'is_active' => true,
            ],
            
            // Panel 2
            [
                'mood_tag' => 'CUSTOM DESIGN',
                'title' => 'Desain Sesuai Keinginan',
                'description' => 'Tim desainer kami siap membantu mewujudkan desain impian Anda dengan revisi unlimited.',
                'cta_text' => 'READ MORE',
                'cta_url' => 'https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20desain',
                'image_path' => 'assets/images/hero/bg-2.jpg',
                'image_alt' => 'Custom Design Service',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=800&q=80',
                'panel_order' => 2,
                'is_active' => true,
            ],
            
            // Panel 3
            [
                'mood_tag' => 'FAST SERVICE',
                'title' => 'Same-Day Delivery',
                'description' => 'Proses produksi cepat 1 hari kerja tanpa mengorbankan kualitas. Pengiriman tepat waktu.',
                'cta_text' => 'READ MORE',
                'cta_url' => 'https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20butuh%20lanyard%20segera',
                'image_path' => 'assets/images/hero/bg-3.jpg',
                'image_alt' => 'Fast Service Delivery',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&q=80',
                'panel_order' => 3,
                'is_active' => true,
            ],
            
            // Panel 4
            [
                'mood_tag' => 'BEST PRICE',
                'title' => 'Harga Terjangkau',
                'description' => 'Kualitas premium dengan harga bersahabat. Dapatkan diskon untuk pemesanan jumlah banyak.',
                'cta_text' => 'READ MORE',
                'cta_url' => '#',
                'image_path' => 'assets/images/hero/bg-4.jpg',
                'image_alt' => 'Best Price Guarantee',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80',
                'panel_order' => 4,
                'is_active' => true,
            ],
            
            // Panel 5
            [
                'mood_tag' => 'TRUSTED PARTNER',
                'title' => '1259+ Klien Puas',
                'description' => 'Dipercaya perusahaan, instansi pemerintah, dan event organizer di seluruh Indonesia.',
                'cta_text' => 'READ MORE',
                'cta_url' => '#',
                'image_path' => 'assets/images/hero/bg-5.jpg',
                'image_alt' => 'Trusted Partner',
                'fallback_image_url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80',
                'panel_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($heroes as $hero) {
            SectionHero::create($hero);
        }
    }
}
