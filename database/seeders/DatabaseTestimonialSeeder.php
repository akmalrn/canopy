<?php

namespace Database\Seeders;

use App\Models\admin\TestimonialClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/testimonial 1.jpg',
            'name' => 'client 1',
            'position' => 'client',
            'description' => 'Areum Parc Bogor benar-benar memberikan pengalaman yang luar biasa. ',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/testimonial 2.jpg',
            'name' => 'client 2',
            'position' => 'client',
            'description' => 'Kami merasa sangat puas dengan pelayanan yang diberikan, staf yang ramah dan siap membantu setiap kebutuhan kami.',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/testimonial 3.jpg',
            'name' => 'client 3',
            'position' => 'client',
            'description' => 'Fasilitas yang disediakan sangat lengkap dan memanjakan, dengan pemandangan yang menenangkan serta desain yang elegan.',
        ]);
    }
}
