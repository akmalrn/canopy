<?php

namespace Database\Seeders;

use App\Models\admin\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::Create([
            'path' => 'uploads/blogs/blog-1.jpg',
            'title' => 'JBC Canopy Sukabumi: Solusi Canopy Berkualitas untuk Perlindungan Maksimal',
            'overview' => 'Canopy adalah elemen penting dalam sebuah bangunan yang berfungsi untuk melindungi dari paparan sinar matahari langsung, hujan, dan elemen luar lainnya.',
            'description' => ' <section>
            <h2>Mengapa Memilih JBC Canopy Sukabumi?</h2>
            <p>Canopy adalah elemen penting dalam sebuah bangunan yang berfungsi untuk melindungi dari paparan sinar matahari langsung, hujan, dan elemen luar lainnya. Selain itu, canopy juga dapat memberikan tampilan yang lebih menarik dan elegan pada bangunan. Di <strong>JBC Canopy Sukabumi</strong>, kami menyediakan berbagai layanan yang disesuaikan dengan kebutuhan dan anggaran pelanggan, mulai dari pemasangan hingga perawatan canopy.</p>
            <p>Berikut beberapa alasan mengapa Anda harus memilih <strong>JBC Canopy Sukabumi</strong> untuk kebutuhan canopy Anda:</p>
        </section>

        <section>
            <h3>1. Kualitas Bahan Terbaik</h3>
            <p>Kami hanya menggunakan bahan-bahan terbaik yang dapat bertahan dalam kondisi cuaca ekstrem. Baik itu bahan kain canopy yang tahan air, atau bahan logam seperti aluminium dan baja, setiap proyek kami menggunakan material yang awet dan tahan lama. Dengan kualitas bahan terbaik, kami memastikan bahwa canopy yang kami pasang tidak hanya tahan lama tetapi juga aman.</p>
        </section>

        <section>
            <h3>2. Desain yang Disesuaikan</h3>
            <p>Setiap bangunan memiliki karakteristik unik, dan begitu juga dengan kebutuhan pelindungnya. Tim desain kami bekerja sama dengan Anda untuk menciptakan desain canopy yang sesuai dengan gaya dan kebutuhan Anda. Baik itu canopy untuk rumah, toko, restoran, atau bahkan area industri, kami menawarkan berbagai pilihan desain yang dapat menambah nilai estetika bangunan Anda.</p>
        </section>

        <section>
            <h3>3. Pemasangan Profesional dan Tepat Waktu</h3>
            <p>Kami memiliki tenaga ahli yang berpengalaman dalam pemasangan canopy. Dengan perhatian terhadap detail dan menggunakan teknologi terbaru, kami memastikan pemasangan dilakukan dengan tepat waktu dan sesuai dengan standar keselamatan. Kami selalu menjaga kebersihan dan kerapihan area kerja selama pemasangan, memberikan hasil yang memuaskan.</p>
        </section>

        <section>
            <h3>4. Perawatan dan Pemeliharaan</h3>
            <p>Selain pemasangan, kami juga menawarkan layanan perawatan dan pemeliharaan canopy. Pemeliharaan rutin penting untuk memastikan canopy tetap berfungsi dengan baik dan memiliki umur yang panjang. Layanan ini meliputi pembersihan, pengecekan kualitas material, serta perbaikan jika diperlukan. Dengan layanan ini, Anda bisa merasa tenang karena canopy Anda selalu dalam kondisi terbaik.</p>
        </section>

        <section>
            <h2>Layanan Kami</h2>
            <p><strong>JBC Canopy Sukabumi</strong> menyediakan berbagai layanan pemasangan canopy, antara lain:</p>
            <ul>
                <li><strong>Canopy Rumah Tinggal:</strong> Kami menawarkan desain canopy yang elegan untuk melindungi rumah Anda dari cuaca buruk, dengan pilihan desain yang bisa disesuaikan dengan gaya arsitektur rumah.</li>
                <li><strong>Canopy Komersial:</strong> Untuk toko, restoran, dan area komersial lainnya, kami menyediakan canopy yang dapat memperindah tampilan bangunan dan memberikan perlindungan yang maksimal untuk pelanggan dan produk Anda.</li>
                <li><strong>Canopy Industri dan Gudang:</strong> Kami menyediakan solusi canopy untuk fasilitas industri dan gudang yang membutuhkan perlindungan kuat terhadap barang dan mesin dari cuaca ekstrem.</li>
                <li><strong>Perawatan dan Pemeliharaan Canopy:</strong> Untuk menjaga canopy tetap awet dan fungsional, kami menawarkan layanan pemeliharaan rutin yang meliputi pembersihan dan pengecekan struktural.</li>
            </ul>
        </section>

        <section>
            <h2>Kesimpulan</h2>
            <p><strong>JBC Canopy Sukabumi</strong> berkomitmen untuk memberikan solusi pelindung terbaik yang menggabungkan kualitas, desain, dan keandalan. Dengan pengalaman yang mumpuni dan tim profesional yang handal, kami siap memenuhi setiap kebutuhan canopy Anda, baik itu untuk rumah, bisnis, maupun industri. Jangan ragu untuk menghubungi kami dan mendapatkan konsultasi gratis untuk solusi canopy yang tepat.</p>
            <p>Untuk informasi lebih lanjut atau untuk memulai proyek pemasangan canopy Anda, kunjungi website kami atau hubungi tim layanan pelanggan kami.</p>
        </section>
',
'keywords' => 'Canopy Sukabumi JBC Canopy Pemasangan Canopy Canopy Rumah Canopy Komersial Canopy Industri Desain Canopy Canopy Terbaik Canopy Tahan Lama Pemasangan Canopy Profesional Pemeliharaan Canopy Perawatan Canopy Canopy Berkualitas Canopy Pelindung Canopy Estetika JBC Canopy Sukabumi Layanan Canopy Sukabumi Canopy untuk Rumah Canopy untuk Toko Canopy untuk Restoran Canopy untuk Gudang Canopy Kain Tahan Air Canopy Aluminium Canopy Baja Pemasangan Canopy Tepat Waktu Harga Canopy Sukabumi Canopy untuk Fasilitas Industri JBC Canopy Sukabumi Layanan Solusi Canopy JBC Canopy Sukabumi Desain Canopy',
'descriptions' => 'Canopy Sukabumi JBC Canopy Pemasangan Canopy Canopy Rumah Canopy Komersial Canopy Industri Desain Canopy Canopy Terbaik Canopy Tahan Lama Pemasangan Canopy Profesional Pemeliharaan Canopy Perawatan Canopy Canopy Berkualitas Canopy Pelindung Canopy Estetika JBC Canopy Sukabumi Layanan Canopy Sukabumi Canopy untuk Rumah Canopy untuk Toko Canopy untuk Restoran Canopy untuk Gudang Canopy Kain Tahan Air Canopy Aluminium Canopy Baja Pemasangan Canopy Tepat Waktu Harga Canopy Sukabumi Canopy untuk Fasilitas Industri JBC Canopy Sukabumi Layanan Solusi Canopy JBC Canopy Sukabumi Desain Canopy',
'category_id' => '1',
        ]);

        Blog::Create([
            'path' => 'uploads/blogs/blog-2.jpg',
            'title' => 'Keunggulan JBC Canopy Sukabumi dalam Menyediakan Solusi Canopy Terbaik',
            'overview' => 'Terletak di jantung Bogor yang asri, Areum Parc menjadi salah satu destinasi wisata modern yang menawarkan pengalaman tak terlupakan.',
            'description' => '<section>
            <p><strong>JBC Canopy Sukabumi</strong> merupakan pilihan utama bagi mereka yang mencari solusi canopy berkualitas tinggi untuk rumah, bisnis, dan industri. Sebagai perusahaan yang berfokus pada pelayanan pelanggan dan kualitas produk, kami berkomitmen untuk menyediakan canopy yang tidak hanya melindungi tetapi juga menambah nilai estetika pada bangunan Anda.</p>
        </section>

        <section>
            <h2>Layanan Kami yang Unggul</h2>
            <p>Di <strong>JBC Canopy Sukabumi</strong>, kami menawarkan berbagai macam layanan yang disesuaikan dengan kebutuhan Anda. Dari pemasangan canopy untuk rumah hingga untuk fasilitas industri besar, kami siap memberikan solusi terbaik untuk setiap jenis bangunan. Kami percaya bahwa setiap proyek memiliki kebutuhan yang berbeda, dan kami menyesuaikan layanan kami untuk memberikan hasil yang optimal.</p>
        </section>

        <section>
            <h3>1. Canopy Rumah Tinggal</h3>
            <p>Untuk rumah tinggal, kami menawarkan desain canopy yang elegan dan praktis. Fungsi utama canopy rumah adalah untuk melindungi pintu dan jendela dari hujan serta matahari. Kami menawarkan berbagai pilihan desain yang dapat disesuaikan dengan arsitektur rumah Anda, baik itu desain minimalis, modern, atau klasik. Dengan bahan berkualitas tinggi dan pengerjaan yang rapi, canopy rumah tinggal yang kami pasang dapat meningkatkan kenyamanan dan keindahan rumah Anda.</p>
        </section>

        <section>
            <h3>2. Canopy untuk Bisnis</h3>
            <p>Canopy untuk area bisnis seperti toko, restoran, dan kantor tidak hanya memberikan perlindungan bagi pelanggan dan barang, tetapi juga mempercantik tampilan luar bangunan. Di <strong>JBC Canopy Sukabumi</strong>, kami memastikan canopy yang kami pasang tidak hanya fungsional, tetapi juga dapat menciptakan citra profesional dan menarik perhatian pelanggan. Kami menyediakan berbagai material yang tahan lama seperti kain canopy yang tahan air, serta bahan logam seperti aluminium yang tahan cuaca ekstrem.</p>
        </section>

        <section>
            <h3>3. Canopy Industri dan Gudang</h3>
            <p>Fasilitas industri membutuhkan canopy yang lebih kuat dan tahan lama untuk melindungi barang dan mesin dari cuaca ekstrem. Kami menyediakan solusi canopy yang kuat dan dapat disesuaikan dengan ukuran dan desain bangunan industri Anda. Dengan pilihan bahan seperti baja dan aluminium yang tahan karat, canopy industri dari <strong>JBC Canopy Sukabumi</strong> memberikan perlindungan yang optimal dan awet untuk kebutuhan bisnis Anda.</p>
        </section>

        <section>
            <h3>4. Perawatan dan Pemeliharaan Canopy</h3>
            <p>Selain pemasangan, kami juga menawarkan layanan pemeliharaan untuk menjaga canopy tetap berfungsi dengan baik. Pemeliharaan rutin sangat penting untuk memastikan canopy Anda tahan lama dan tetap terlihat baik. Layanan ini meliputi pembersihan, pengecekan struktural, dan perbaikan jika diperlukan. Dengan perawatan rutin, Anda bisa memastikan bahwa canopy tetap awet dan berfungsi sebagaimana mestinya, memberikan perlindungan maksimal sepanjang waktu.</p>
        </section>

        <section>
            <h2>Mengapa Memilih JBC Canopy Sukabumi?</h2>
            <ul>
                <li><strong>Kualitas Terjamin:</strong> Kami hanya menggunakan bahan terbaik untuk memastikan canopy yang kami pasang memiliki daya tahan tinggi dan tahan terhadap cuaca ekstrem.</li>
                <li><strong>Desain yang Disesuaikan:</strong> Setiap proyek dirancang khusus sesuai dengan kebutuhan dan preferensi pelanggan, baik itu untuk rumah, bisnis, atau industri.</li>
                <li><strong>Pemasangan Tepat Waktu:</strong> Tim kami yang profesional dan berpengalaman menjamin pemasangan canopy dilakukan dengan tepat waktu dan sesuai dengan standar keselamatan.</li>
                <li><strong>Layanan Pelanggan Terbaik:</strong> Kami selalu siap membantu Anda dengan konsultasi gratis dan layanan pelanggan yang responsif untuk menjawab setiap pertanyaan Anda.</li>
                <li><strong>Harga Kompetitif:</strong> Kami menawarkan solusi canopy berkualitas tinggi dengan harga yang bersaing, sehingga Anda mendapatkan nilai terbaik dari investasi Anda.</li>
            </ul>
        </section>

        <section>
            <h2>Testimoni Pelanggan</h2>
            <blockquote>
                <p>"Canopy yang dipasang oleh <strong>JBC Canopy Sukabumi</strong> di restoran kami tidak hanya melindungi pengunjung dari hujan, tetapi juga memberikan kesan yang lebih modern dan profesional. Pemasangan dilakukan dengan cepat dan sangat rapi. Kami sangat puas dengan layanan yang diberikan." - <strong>Ahmad, Pemilik Restoran</strong></p>
            </blockquote>
        </section>

        <section>
            <h2>Hubungi Kami</h2>
            <p>Jika Anda mencari solusi canopy yang berkualitas dan sesuai dengan kebutuhan Anda, jangan ragu untuk menghubungi kami. Tim <strong>JBC Canopy Sukabumi</strong> siap membantu memberikan solusi terbaik untuk semua kebutuhan canopy Anda, baik itu untuk rumah tinggal, bisnis, maupun industri.</p>
            <p>Untuk informasi lebih lanjut atau untuk memulai proyek pemasangan canopy Anda, hubungi kami melalui nomor telepon atau email yang tersedia di situs kami.</p>
        </section>
',
'keywords' => 'Canopy Sukabumi, JBC Canopy, Pemasangan Canopy, Canopy Rumah, Canopy Komersial, Canopy Industri, Desain Canopy, Canopy Terbaik',
'descriptions' => 'Canopy Sukabumi, JBC Canopy, Pemasangan Canopy, Canopy Rumah, Canopy Komersial, Canopy Industri, Desain Canopy, Canopy Terbaik',
'category_id' => '1',
        ]);
    }
}
