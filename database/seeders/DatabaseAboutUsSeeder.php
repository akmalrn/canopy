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
            'description' => '<p>Apakah Anda sedang mencari hunian yang nyaman dan strategis? Areum Parc adalah pilihan yang tepat untuk Anda! Dengan lokasi yang prime, fasilitas lengkap, dan desain modern, Areum Parc menawarkan pengalaman tinggal yang tak tertandingi. Jangan lewatkan kesempatan untuk memiliki unit di Areum Parc, hunian yang menawarkan kualitas hidup terbaik.</p>',
        ]);
    }
}
