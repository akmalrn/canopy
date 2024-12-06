<?php

namespace Database\Seeders;

use App\Models\admin\ServicePath;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseServicePathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-1.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-2.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-3.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-4.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-5.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-6.jpg',
        ]);

        ServicePath::Create([
            'service_id' => '1',
            'path' => 'uploads/services/tipe-unit-k-mension-200-7.jpg',
        ]);
    }
}
