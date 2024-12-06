<?php

namespace Database\Seeders;

use App\Models\admin\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseWhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUs::Create([
            'path' => 'uploads/whyus/fitur.jpg',
            'title' => 'Fitur Unggulan Apartemen Areum Parc Bogor',
            'overview' => 'Areum Parc Bogor merupakan hunian eksklusif yang menawarkan kenyamanan dan kemewahan dengan berbagai fitur unggulan yang didesain untuk memenuhi kebutuhan gaya hidup modern.',
            'description' => '<h3><b>1. Taman Interaktif dan Hiburan</b></h3>
<p>Areum Parc menyediakan berbagai wahana hiburan yang ramah keluarga, termasuk area bermain anak, spot foto tematik, dan taman interaktif yang memadukan teknologi dengan keindahan alam.</p>
<h3><b>2. Zona Edukasi</b></h3>
<p>Wisatawan dapat mengeksplorasi zona edukasi yang menggabungkan pembelajaran dan pengalaman langsung, seperti kebun mini untuk belajar bercocok tanam, area peternakan kecil, dan workshop ramah lingkungan.</p>
<h3><b>3. Kuliner Nusantara dan Internasiona</b></h3>
<p>Nikmati kelezatan kuliner di restoran dan kafe yang menyajikan hidangan lokal dan internasional dengan pemandangan alam yang indah.</p>',
        ]);
    }
}
