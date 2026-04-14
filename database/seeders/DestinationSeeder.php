<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Asia Heritage',
            'description' => 'Destinasi wisata bertema luar negeri pertama di Pekanbaru, hadirkan nuansa Jepang, Korea, dan China. Jelajahi area seluas 16 Hektar dengan spot foto arsitektur ikonik dan penyewaan kostum tradisional yang autentik.',
            'location' => 'Jl. Yos Sudarso KM 12, Muara Fajar, Rumbai, Pekanbaru',
            'working_days' => 'Setiap hari',
            'working_hours' => '08.00–18.00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Asia Farm Hay Day',
            'description' => 'Asia Farm adalah taman wisata unik yang mengadaptasi konsep peternakan dan pertanian dari game Hayday. Di sini, kamu bisa menikmati suasana pedesaan Eropa yang asri, lengkap dengan kincir angin, rumah hobbit, dan spot-spot foto yang instagramable.',
            'location' => 'Jl. Hangtuah, Badak Ujung, Kecamatan Tenayan Raya',
            'working_days' => 'Setiap hari',
            'working_hours' => '10.00–18.00',
            'ticket_price' => 25000,
        ]);
        Destination::create([
            'name' => 'Alam Mayang',
            'description' => 'Taman Rekreasi Alam Mayang menjadi pusat rekreasi tertua di Kota Pekanbaru yang masih eksis hingga kini. Memadukan Konsep wahana bermain dengan pemandangan alam yang indah dan estetik, kawasan yang ramah dengan beragam budaya, agama dan berbagai lapisan umur.',
            'location' => 'Jl. H Imam Munandar 8 28288 Pekanbaru Riau',
            'working_days' => 'Setiap hari',
            'working_hours' => '07.00–18.00',
            'ticket_price' => 20000,
        ]);
        Destination::create([
            'name' => 'Agro Wisata Pelangi',
            'description' => 'Taman Agro Wisata Pelangi terletak sekitar 13 kilometer dari pusat Kota Pekanbaru. Lokasinya mudah dijangkau untuk warga lokal maupun wisatawan luar kota. Tempat wisata ini awalnya merupakan kebun karet milik pribadi. Namun sejak 2020, disulap menjadi taman wisata yang asri dan edukatif.',
            'location' => 'Jl. Lintas Sumatera 28285 Pekanbaru Riau',
            'working_days' => 'Setiap hari',
            'working_hours' => '08.00–18.00',
            'ticket_price' => 15000,
        ]);
         Destination::create([
            'name' => 'Kasang Kulim Zoo',
            'description' => 'Kasang Kulim Zoo, salah satu kebun binatang di Pekanbaru, Riau, menjadi destinasi favorit bagi wisatawan lokal maupun luar daerah. Kebun binatang ini memiliki koleksi 131 jenis hewan, termasuk mamalia, aves, karnivora, dan reptil, di atas lahan seluas 10 hektare.',
            'location' => 'Jl. Kubang Raya Pekanbaru',
            'working_days' => 'Setiap hari',
            'working_hours' => '08.00–17.00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Floating Market Lembang',
            'description' => 'Tempat wisata unik dengan konsep pasar terapung di atas danau. Banyak kuliner khas Sunda dan wahana keluarga.',
            'location' => 'Lembang, Bandung Barat',
            'working_days' => 'Setiap hari',
            'working_hours' => '09.00–18.00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Grafika Cikole',
            'description' => 'Wisata alam dengan konsep hutan pinus yang menawarkan outbound, camping, dan penginapan.',
            'location' => 'Cikole, Lembang, Bandung Barat',
            'working_days' => 'Setiap hari',
            'working_hours' => '08.00–16.00',
            'ticket_price' => 20000,
        ]);
        Destination::create([
            'name' => 'Wisata Maribaya',
            'description' => 'Tempat wisata alam dengan pemandangan pegunungan dan banyak spot foto seperti sky bridge, balon udara, dan air terjun.',
            'location' => 'Lembang, Bandung Barat',
            'working_days' => 'Setiap hari',
            'working_hours' => '09.00–17.00',
            'ticket_price' => 35000,
        ]);
        Destination::create([
            'name' => 'Kawah Putih Ciwidey',
            'description' => 'Danau kawah dengan air putih kehijauan yang unik',
            'location' => 'Ciwidey, Bandung Selatan, Jawa Barat',
            'working_days' => 'Setiap hari',
            'working_hours' => '07.00–17.00',
            'ticket_price' => 35000,
        ]);
         Destination::create([
            'name' => 'Pantai Kuta',
            'description' => 'Pantai terkenal dengan sunset indah dan ombak surfing',
            'location' => 'Kuta, Kabupaten Badung, Bali',
            'working_days' => 'Setiap hari',
            'working_hours' => '00.00–24.00',
            'ticket_price' => 5000,
        ]);
        for ($i =0; $i < 10; $i++) {
            Destination::create([
                'name' => fake( locale: "id_ID")->name(),
                'description' => fake( locale: "id_ID")->sentence(),
                'location' => fake( locale: "id_ID")->address() . ",Pekanbaru, Riau",
                'working_days' => 'Setiap hari',
                'working_hours' => '08.00–18.00',
                'ticket_price' => rand(10000, 50000),
            ]);
        }
    }
}
