<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DatabaseAdminSeeder::class,
            DatabaseSliderSeeder::class,
            DatabaseConfigurationSeeder::class,
            DatabaseSuperioritySeeder::class,
            DatabaseGallerySeeder::class,
            DatabaseMitraSeeder::class,
            DatabaseContactSeeder::class,
            DatabaseTestimonialSeeder::class,
            DatabaseWhyUsSeeder::class,
            DatabaseAboutUsSeeder::class,
            DatabaseOurTeamSeeder::class,
            DatabaseCategoryBlogSeeder::class,
            DatabaseBlogSeeder::class,
            DatabasePricingSeeder::class,
            DatabaseCategoryServiceSeeder::class,
            DatabaseTypeServiceSeeder::class,
            DatabaseServiceSeeder::class,
            DatabaseServicePathSeeder::class,
        ]);
    }
}
