<?php

namespace Database\Seeders;

use App\Models\admin\Superiority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSuperioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superiority::Create([
            'icon' => '<span class="icon-setting"></span>',
            'title' => 'Lokasi Strategis dan Akses Mudah',
            'description' => '<p>Areum Parc Bogor terletak di lokasi yang sangat strategis, mudah diakses dari berbagai arah.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-wall"></span>',
            'title' => 'Pemandangan Alam yang Menawan',
            'description' => '<p>Dikelilingi oleh keindahan alam Bogor yang hijau, Areum Parc menawarkan pemandangan alam yang memukau.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-robotic-arm"></span>',
            'title' => 'Desain Bangunan Modern dan Elegan',
            'description' => '<p>Dengan desain bangunan yang modern dan elegan, Areum Parc Bogor menggabungkan kenyamanan dengan estetika.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-engineer"></span>',
            'title' => 'Fasilitas Lengkap dan Berkualitas',
            'description' => '<p>Areum Parc Bogor menawarkan berbagai fasilitas berkualitas, mulai dari area rekreasi.</p>',
        ]);
    }
}
