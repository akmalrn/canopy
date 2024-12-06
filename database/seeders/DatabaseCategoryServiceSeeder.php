<?php

namespace Database\Seeders;

use App\Models\admin\CategoryService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseCategoryServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryService::Create([
            'path' => 'uploads/services/tipe-unit-k-mension-200.jpg',
            'category' => 'Tipe Unit K- Mansion 200',
        ]);

        CategoryService::Create([
            'path' => 'uploads/services/tipe-unit-k-villa-100.jpg',
            'category' => 'Tipe Unit K- Villa 100',
        ]);

        CategoryService::Create([
            'path' => 'uploads/services/tipe-unit-k-villa-70.jpg',
            'category' => 'Tipe Unit K- Villa 70',
        ]);

        CategoryService::Create([
            'path' => 'uploads/services/tipe-unit-k-haus-40.jpg',
            'category' => 'Tipe Unit K- Haus 40',
        ]);
    }
}
