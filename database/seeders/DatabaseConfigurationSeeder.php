<?php

namespace Database\Seeders;

use App\Models\admin\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Configuration::create([
            'path' => 'uploads/configuration/logo.png',
            'path_logo' => 'uploads/configuration/logo.png',
            'path_footer' => 'uploads/configuration/footer.jpg',
            'path_footer_background' => 'uploads/configuration/background.jpg',
            'website_name' => 'JBC Jaya Baya Canopy',
            'title' => 'JBC Jaya Baya Canopy: Solusi Terbaik untuk Kebutuhan Canopy Berkualitas di Seluruh Indonesia',
            'meta_keywords' => 'Canopy kain, Canopy membrane, Awning gulung, Tenda canopy, Canopy murah, Jasa pembuatan canopy, Canopy BSD, Kanopi Gading Serpong, Canopy Tangerang, Canopy Bandung, Canopy daerah khusus DKI Jakarta, dan melayani seluruh Indonesia',
            'meta_descriptions' => 'Jasa pembuatan canopy berkualitas di seluruh Indonesia, termasuk Canopy kain, Canopy membrane, Awning gulung, Tenda canopy, Canopy murah, dan layanan di BSD, Gading Serpong, Tangerang, Bandung, serta DKI Jakarta. Hubungi kami untuk solusi canopy terbaik!',
            'footer' => '© All Copyright 2024 - JRC CANOPY | By WAN Teknologi Internasional',
        ]);
    }
}
