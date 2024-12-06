<?php

namespace Database\Seeders;

use App\Models\admin\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabasePricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::Create([
            'path' => 'uploads/pricings/promo1.jpg',
            'title' => 'Tipe Unit K- Haus 40 (1 Lantai)',
            'overview' => '40 m2',
            'description' => 'Tipe Unit K- Haus 40 (1 Lantai)',
        ]);

        Pricing::Create([
            'path' => 'uploads/pricings/promo2.jpg',
            'title' => 'Tipe Unit K-Villa 70 (Mezzanine 2 Lantai)',
            'overview' => '70 m2',
            'description' => 'Tipe Unit K-Villa 70 (Mezzanine 2 Lantai)',
        ]);

        Pricing::Create([
            'path' => 'uploads/pricings/promo3.jpg',
            'title' => 'Tipe Unit K-Villa 100 (2 Lantai)',
            'overview' => '100 m2',
            'description' => 'Tipe Unit K-Villa 100 (2 Lantai)',
        ]);
    }
}

