<?php

namespace Database\Seeders;

use App\Models\Layanan_poliklinik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus data poliklinik lama jika ada
        Layanan_poliklinik::truncate();

        Layanan_poliklinik::create([
            'poliklinik' => 'Poli Umum',
            'slug' => 'poli-umum',
            'ket' => '<div>Melayani pemeriksaan kesehatan, konsultasi, diagnosis, dan pengobatan berbagai keluhan medis umum.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Poli Gigi',
            'slug' => 'poli-gigi',
            'ket' => '<div>Menyediakan layanan pemeriksaan, perawatan, dan konsultasi kesehatan gigi serta mulut.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Poli Kandungan',
            'slug' => 'poli-kandungan',
            'ket' => '<div>Melayani pemeriksaan kesehatan ibu dan kehamilan serta konsultasi kesehatan reproduksi wanita.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Laboratorium',
            'slug' => 'laboratorium',
            'ket' => '<div>Menyediakan berbagai pemeriksaan penunjang medis untuk membantu proses diagnosis dan pemantauan kesehatan.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Apotek',
            'slug' => 'apotek',
            'ket' => '<div>Menyediakan obat-obatan dan kebutuhan kesehatan dengan pelayanan yang cepat dan terpercaya.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Khitan',
            'slug' => 'khitan',
            'ket' => '<div>Layanan khitan dilakukan oleh tenaga medis profesional dengan prosedur yang aman, nyaman, dan higienis untuk menjaga kesehatan serta kebersihan area genital.</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Operasi Minor',
            'slug' => 'operasi-minor',
            'ket' => '<div>Melayani tindakan bedah ringan seperti pengangkatan benjolan, kutil, abses, dan penjahitan luka dengan prosedur yang aman serta penanganan yang cepat dan tepat.</div>',
        ]);
    }
}
