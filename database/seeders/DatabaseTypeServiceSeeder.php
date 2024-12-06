<?php

namespace Database\Seeders;

use App\Models\admin\TypeService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeService::Create([
            'title' => 'Tipe Standar',
        ]);

        TypeService::Create([
            'title' => 'Tipe Hook',
        ]);
    }
}
