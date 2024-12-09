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
            'title' => 'Mengenal JRC CANOPY: Keunggulan dan Layanan Kami',
            'overview' => 'JRC CANOPY adalah penyedia solusi kanopi dan struktur peneduh yang berfokus pada kualitas dan desain yang dapat disesuaikan dengan kebutuhan pelanggan.',
            'description' => 'JRC CANOPY adalah penyedia solusi kanopi dan struktur peneduh yang berfokus pada kualitas dan desain yang dapat disesuaikan dengan kebutuhan pelanggan. Kami menawarkan berbagai jenis kanopi, mulai dari canopy kain, canopy membrane, hingga awning gulung, untuk memenuhi berbagai kebutuhan ruang terbuka, baik untuk komersial, perumahan, maupun industri.',
        ]);
    }
}
