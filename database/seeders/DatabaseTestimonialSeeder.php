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
            'path' => 'uploads/testimonialClients/testimonial-1.png',
            'name' => 'Joko',
            'position' => 'CEO',
            'description' => 'Sangat Mantap, karena canopy sangat kuat, apalagi jika hujan Lebat, bisa menahannya. ',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/testimonial-1.png',
            'name' => 'Rani',
            'position' => 'Sekretaris',
            'description' => 'Kami merasa sangat puas dengan pelayanan yang diberikan, staf yang ramah dan siap membantu setiap kebutuhan kami.',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/testimonial-1.png',
            'name' => 'Mala',
            'position' => 'Wakil',
            'description' => 'Fasilitas yang disediakan sangat lengkap dan memanjakan, dengan pemandangan yang menenangkan serta desain yang elegan.',
        ]);
    }
}
