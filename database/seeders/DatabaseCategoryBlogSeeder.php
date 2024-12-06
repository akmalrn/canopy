<?php

namespace Database\Seeders;

use App\Models\admin\CategoryBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseCategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryBlog::Create([
            'category' => 'Berita',
        ]);
    }
}
