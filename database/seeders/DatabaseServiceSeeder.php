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
            'path' => 'uploads/services/bla',
            'title' => 'Apa yang membuat TipeK-Mansion 200 (3 Lantai) di Areum Parc menjadi pilihan kamu ?',
            'overview' => 'Unit tipe K-Mansion 200 di cluster Hosu, Areum Parc Bogor, menghadirkan hunian eksklusif dan elegan dengan 3 lantai.',
            'description' => '<p>Tipe K-Mansion 200 (3 Lantai) di Areum Parc Bogor menjadi pilihan menarik karena menawarkan kombinasi sempurna antara desain modern, kenyamanan, dan fasilitas premium. Dengan luas bangunan 200 m², hunian ini memberikan ruang yang luas untuk kebutuhan keluarga, terutama dengan 5+1 kamar tidur dan 4+1 kamar mandi, yang ideal untuk keluarga besar atau mereka yang suka menerima tamu.</p><p>Salah satu keunggulannya adalah private pool yang menambah kesan eksklusif, memungkinkan Anda dan keluarga untuk menikmati waktu bersantai di rumah tanpa perlu pergi jauh. Desain tiga lantai juga memberikan fleksibilitas tata ruang, sehingga setiap anggota keluarga bisa memiliki privasi lebih.</p><p>Berada di cluster Hosu yang asri, tipe K-Mansion 200 juga memiliki lingkungan yang aman dan nyaman, dilengkapi dengan fasilitas dan akses yang memudahkan kebutuhan sehari-hari. Kombinasi semua elemen ini menjadikan unit ini pilihan ideal untuk hunian mewah dengan suasana yang harmonis di jantung alam Bogor.</p>',
        ]);
    }
}
