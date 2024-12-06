<?php

namespace Database\Seeders;

use App\Models\admin\OurTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseOurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurTeam::Create([
            'path' => 'uploads/our-team/team 1.jpg',
            'name' => 'david',
            'position' => 'CEO',
            'description' => 'Aku adalah Ceo',
        ]);

        OurTeam::Create([
            'path' => 'uploads/our-team/team 1.jpg',
            'name' => 'Jon',
            'position' => 'Wakil',
            'description' => 'Aku adalah Wakil',
        ]);

        OurTeam::Create([
            'path' => 'uploads/our-team/team 1.jpg',
            'name' => 'Boy',
            'position' => 'Sekertaris',
            'description' => 'Aku adalah Sekertaris',
        ]);

        OurTeam::Create([
            'path' => 'uploads/our-team/team 1.jpg',
            'name' => 'Sims',
            'position' => 'Agent',
            'description' => 'Aku adalah Agent',
        ]);
    }
}
