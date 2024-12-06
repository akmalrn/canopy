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
            'title' => 'Apa yang membuat TipeK-Mansion 200 (3 Lantai) di Areum Parc menjadi pilihan kamu ?',
            'overview' => 'Unit tipe K-Mansion 200 di cluster Hosu, Areum Parc Bogor, menghadirkan hunian eksklusif dan elegan dengan 3 lantai.',
            'description' => '<p>Tipe K-Mansion 200 (3 Lantai) di Areum Parc Bogor menjadi pilihan menarik karena menawarkan kombinasi sempurna antara desain modern, kenyamanan, dan fasilitas premium. Dengan luas bangunan 200 m², hunian ini memberikan ruang yang luas untuk kebutuhan keluarga, terutama dengan 5+1 kamar tidur dan 4+1 kamar mandi, yang ideal untuk keluarga besar atau mereka yang suka menerima tamu.</p><p>Salah satu keunggulannya adalah private pool yang menambah kesan eksklusif, memungkinkan Anda dan keluarga untuk menikmati waktu bersantai di rumah tanpa perlu pergi jauh. Desain tiga lantai juga memberikan fleksibilitas tata ruang, sehingga setiap anggota keluarga bisa memiliki privasi lebih.</p><p>Berada di cluster Hosu yang asri, tipe K-Mansion 200 juga memiliki lingkungan yang aman dan nyaman, dilengkapi dengan fasilitas dan akses yang memudahkan kebutuhan sehari-hari. Kombinasi semua elemen ini menjadikan unit ini pilihan ideal untuk hunian mewah dengan suasana yang harmonis di jantung alam Bogor.</p>',
            'category_id' => '1',
        ]);

        Service::Create([
            'title' => 'Apa yang membuat Tipe K- Villa 100 di Areum Parc menjadi pilihan kamu ?',
            'overview' => 'K-Villa 100 adalah unit hunian dengan luas bangunan 100 m² di Areum Parc, yang didesain dengan konsep 2 lantai.',
            'description' => '<ul>
        <li><strong>Area Masuk:</strong> Pintu kayu dengan aksen tradisional Korea, foyer kecil dengan dekorasi khas Korea.</li>
        <li><strong>Ruang Tamu:</strong> Ruang luas dan terbuka dengan furnitur minimalis dan jendela besar yang menghadap taman kecil.</li>
        <li><strong>Ruang Keluarga:</strong> Ruang tambahan untuk berkumpul keluarga dengan furnitur nyaman dan dekorasi hangat.</li>
        <li><strong>Kamar Tidur Tamu/Anak:</strong> Kamar dengan ukuran medium yang nyaman untuk anak atau tamu, dengan tempat penyimpanan yang efisien dan dekorasi minimalis.</li>
        <li><strong>Kamar Mandi:</strong> Desain modern dengan shower, wastafel, dan toilet berkualitas tinggi.</li>
        <li><strong>Carport:</strong> Dua carport yang luas, cukup untuk dua mobil.</li>
    </ul>

    <h2>Lantai 2</h2>
    <ul>
        <li><strong>Kamar Tidur Utama:</strong> Tempat tidur king size, dekorasi modern-tradisional dan kamar mandi dalam dengan wastafel dan shower.</li>
        <li><strong>Kamar Tidur Tambahan:</strong> Dua kamar tidur tambahan dengan ukuran medium, cocok untuk anak atau tamu, dengan tempat penyimpanan yang efisien dan dekorasi minimalis.</li>
        <li><strong>Kamar Mandi Tambahan:</strong> Desain modern dengan sentuhan alami, fasilitas shower, wastafel, dan toilet berkualitas tinggi.</li>
    </ul>',
            'category_id' => '2',
        ]);

        Service::Create([
            'title' => 'Apa yang membuat Tipe K- Villa 70 di Areum Parc menjadi pilihan kamu ?',
            'overview' => 'K-Villa 70 adalah unit hunian dengan luas bangunan 70 m² di Areum Parc, yang didesain dengan konsep 2 lantai mezzanine.',
            'description' => ' <h2>Lantai 1</h2>
    <ul>
        <li><strong>Area Masuk:</strong> Pintu kayu dengan aksen tradisional Korea, foyer kecil dengan dekorasi khas Korea.</li>
        <li><strong>Ruang Tamu:</strong> Ruang luas dan terbuka dengan furnitur minimalis dan tatami mats, serta jendela besar yang menghadap taman kecil.</li>
        <li><strong>Kamar Tidur Anak atau Tamu:</strong> Kamar dengan ukuran medium yang nyaman untuk anak atau tamu, dengan tempat penyimpanan yang efisien dan dekorasi minimalis.</li>
        <li><strong>Ruang Minum Teh:</strong> Area khusus untuk menikmati teh, dihiasi dengan elemen-elemen tradisional Korea, seperti meja rendah dan bantal duduk.</li>
        <li><strong>Kamar Mandi:</strong> Desain modern dengan shower, wastafel, dan toilet berkualitas tinggi.</li>
    </ul>

    <h2>Mezzanine</h2>
    <ul>
        <li><strong>Area Fleksibel:</strong> Ruang yang bisa digunakan sebagai ruang kerja, belajar, atau duduk tambahan, dengan desain minimalis dan pencahayaan baik.</li>
    </ul>',
            'category_id' => '3',
        ]);

        Service::Create([
            'title' => '
Apa yang membuat Tipe K- Haus 40 di Areum Parc menjadi pilihan kamu ?',
            'overview' => 'K-Haus 40 adalah salah satu tipe unit hunian 1 lantai di Areum Parc yang didesain dengan sentuhan estetika tradisional Korea yang berpadu dengan elemen modern. ',
            'description' => '<h2>Area Masuk</h2>
    <ul>
        <li><strong>Pintu Utama:</strong> Menggunakan pintu kayu dengan aksen tradisional Korea, memberikan kesan hangat.</li>
        <li><strong>Foyer:</strong> Area kecil untuk menyambut tamu dengan dekorasi khas Korea dan ornamen kayu.</li>
    </ul>

    <h2>Area Outdoor</h2>
    <ul>
        <li><strong>Taman Pribadi:</strong> Kecil namun ditata dengan indah, menggunakan elemen-elemen tradisional Korea.</li>
        <li><strong>Area Duduk:</strong> Terdapat area duduk di luar untuk bersantai dan menikmati udara segar.</li>
    </ul>

    <h2>Ruang Tamu</h2>
    <ul>
        <li><strong>Ukuran:</strong> Luas dan terbuka, memungkinkan pencahayaan alami yang maksimal.</li>
        <li><strong>Jendela Besar:</strong> Menghadap ke taman kecil yang menciptakan suasana alami.</li>
    </ul>',
            'category_id' => '4',
        ]);
    }
}
