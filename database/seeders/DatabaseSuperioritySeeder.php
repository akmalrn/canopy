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
            'title' => 'Kualitas Bahan Terbaik',
            'description' => '<p>Kami hanya menggunakan bahan berkualitas tinggi, seperti aluminium, baja, dan kain.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-wall"></span>',
            'title' => 'Desain yang Disesuaikan',
            'description' => '<p>Setiap proyek kami dirancang sesuai dengan kebutuhan dan keinginan pelanggan.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-robotic-arm"></span>',
            'title' => 'Pemasangan Profesional',
            'description' => '<p>Dengan tenaga ahli yang berpengalaman, kami memastikan pemasangan canopy dilakukan dengan rapi dan tepat waktu.</p>',
        ]);

        Superiority::Create([
            'icon' => '<span class="icon-engineer"></span>',
            'title' => 'Layanan Pelanggan Responsif',
            'description' => '<p>Kepuasan pelanggan adalah prioritas utama kami. Kami siap memberikan konsultasi dan solusi terbaik untuk kebutuhan canopy Anda. </p>',
        ]);
    }
}
