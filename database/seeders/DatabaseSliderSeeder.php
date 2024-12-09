<?php

namespace Database\Seeders;

use App\Models\admin\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'path' => 'uploads/sliders/slider1.jpg',
            'title' => 'Solusi Terbaik untuk Canopy Berkualitas!',
            'overview' => 'Solusi Terbaik untuk Canopy Berkualitas!',
            'description' => 'Solusi Terbaik untuk Canopy Berkualitas!',
        ]);

        Slider::create([
            'path' => 'uploads/sliders/slider2.jpg',
            'title' => 'Canopy Tangguh dengan Sentuhan Elegan',
            'overview' => 'Canopy Tangguh dengan Sentuhan Elegan',
            'description' => 'Canopy Tangguh dengan Sentuhan Elegan',
        ]);
    }
}
