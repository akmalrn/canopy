<?php

namespace Database\Seeders;

use App\Models\admin\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::Create([
            'path_contact' => 'uploads/contact/path_contact.jpg',
            'path' => 'uploads/contact/contact.jpg',
            'name' => 'Nama',
            'position' => 'Admin',
            'phone_number' => '6281378982024',
            'phone_number_2' => '6282299946709',
            'email_address' => 'info@areumparc.co.id',
            'email_address_2' => 'info@areumparc.co.id',
            'address' => 'Jl. Semplak Barat, Kec. Kemang, Kabupaten Bogor, Jawa Barat, Indonesia.',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.861924847441!2d106.737482!3d-6.5407402999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c300767e8e4d%3A0xc5659682c9c877a6!2sPerumahan%20Areum%20Parc!5e0!3m2!1sid!2sid!4v1234567890123',
            'hours' => 'Senin – Jumat, 09.00 – 18.00 WIB, Sabtu – Minggu, 08.30 – 18.00 WIB',
            'instagram' => 'https://www.instagram.com/prolinkestate/',
            'tiktok' => 'https://www.instagram.com/prolinkestate/',
            'facebook' => 'https://www.youtube.com/@ProLinkEstate',
        ]);
    }
}
