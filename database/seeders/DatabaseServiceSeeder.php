<?php

namespace Database\Seeders;

use App\Models\admin\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::Create([
            'path' => 'uploads/services/services-1.jpg',
            'title' => 'Pemasangan Canopy Rumah Tinggal',
            'overview' => 'Kami menyediakan layanan pemasangan canopy untuk rumah tinggal yang tidak hanya memberikan perlindungan dari cuaca, tetapi juga menambah nilai estetika pada fasad rumah Anda.',
            'description' => '<p>JBC Canopy Sukabumi menawarkan layanan pemasangan canopy untuk rumah tinggal yang tidak hanya berfungsi sebagai pelindung dari sinar matahari dan hujan, tetapi juga meningkatkan tampilan estetika rumah Anda. Kami menyediakan berbagai pilihan bahan dan desain, mulai dari canopy kain, aluminium, hingga baja ringan, yang bisa disesuaikan dengan gaya rumah Anda. Tim profesional kami akan memastikan pemasangan dilakukan dengan rapi dan tepat waktu, memberikan kenyamanan dan keamanan lebih bagi penghuni rumah.</p>',
        ]);

        Service::Create([
            'path' => 'uploads/services/services-2.jpg',
            'title' => 'Pemasangan Canopy Komersial',
            'overview' => 'Untuk kebutuhan area komersial, kami menawarkan pemasangan canopy yang memberikan kesan profesional sekaligus melindungi pelanggan dan barang dari cuaca buruk.',
            'description' => '<p>Untuk memenuhi kebutuhan area komersial, seperti toko, restoran, dan kantor, kami menyediakan layanan pemasangan canopy yang mengutamakan fungsionalitas dan tampilan profesional. Canopy yang kami pasang akan memberikan perlindungan optimal terhadap cuaca, baik untuk area pelanggan maupun produk. Desain kami dapat disesuaikan dengan konsep bisnis Anda, memastikan canopy tidak hanya berguna, tetapi juga memperkuat branding dan identitas visual perusahaan Anda.</p>',
        ]);

        Service::Create([
            'path' => 'uploads/services/services-3.jpg',
            'title' => 'Canopy Industri dan Gudang',
            'overview' => 'JBC Canopy Sukabumi juga menyediakan solusi canopy untuk area industri dan gudang.',
            'description' => '<p>Kami juga melayani pemasangan canopy untuk area industri dan gudang, di mana ketahanan dan kekuatan material sangat dibutuhkan. Canopy untuk industri dan gudang yang kami tawarkan dirancang untuk melindungi barang, mesin, serta pekerja dari cuaca buruk dan elemen luar lainnya. Kami menggunakan bahan berkualitas tinggi dan memastikan pemasangan yang kuat, aman, dan sesuai dengan standar keselamatan. Dengan layanan ini, Anda bisa lebih fokus pada operasional bisnis tanpa khawatir tentang perlindungan fasilitas dan barang.</p>',
        ]);

        Service::Create([
            'path' => 'uploads/services/services-4.jpg',
            'title' => 'Perawatan dan Pemeliharaan Canopy',
            'overview' => 'Kami tidak hanya menyediakan pemasangan canopy, tetapi juga layanan perawatan dan pemeliharaan untuk menjaga agar canopy Anda tetap dalam kondisi terbaik.',
            'description' => '<p>Agar canopy tetap awet dan berfungsi dengan baik, kami menyediakan layanan perawatan dan pemeliharaan rutin. Layanan ini meliputi pembersihan canopy dari kotoran dan debu, pengecekan struktur dan pemasangan, serta perbaikan jika diperlukan. Pemeliharaan rutin sangat penting untuk menjaga keawetan bahan canopy, seperti kain dan logam, sehingga dapat bertahan dalam jangka panjang. Dengan perawatan yang tepat, canopy Anda akan tetap tampil estetik dan memberikan perlindungan optimal untuk rumah atau bisnis Anda.</p>',
        ]);
    }
}
