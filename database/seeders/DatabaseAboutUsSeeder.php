<?php

namespace Database\Seeders;

use App\Models\admin\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseAboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::Create([
            'path' => 'uploads/aboutus/about.jpg',
            'title' => 'Tentang Kami - JBC Canopy Sukabumi',
            'overview' => 'JBC Canopy Sukabumi adalah perusahaan yang bergerak di bidang penyediaan dan pemasangan canopy berkualitas tinggi di wilayah Sukabumi dan sekitarnya.',
            'description' => 'JBC Canopy Sukabumi adalah perusahaan yang bergerak di bidang penyediaan dan pemasangan canopy berkualitas tinggi di wilayah Sukabumi dan sekitarnya. Kami mengkhususkan diri dalam menyediakan solusi pelindung yang praktis dan estetis untuk berbagai kebutuhan, mulai dari canopy untuk rumah tinggal, area komersial, hingga bangunan industri.',
        ]);
    }
}
