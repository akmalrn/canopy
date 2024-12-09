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
            'phone_number' => '6285748364837',
            'phone_number_2' => '',
            'email_address' => 'jayabayacanopy@gmail.com',
            'email_address_2' => '',
            'address' => 'Jl. D, Klender, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus IbuKota Jakarta 13470, Indonesia.',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.6676101199055!2d106.91036237756424!3d-6.214040599841496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4d891c1ea3b%3A0x35cddc6caa9f9c21!2sJl.%20D%2C%20Klender%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013470%2C%20Indonesia!5e0!3m2!1sen!2sid!4v{{TIMESTAMP}}',
            'instagram' => 'https://www.instagram.com/jayabayacanopy/',
        ]);
    }
}
