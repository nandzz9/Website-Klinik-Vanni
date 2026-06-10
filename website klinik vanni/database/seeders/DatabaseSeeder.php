<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\Folder;
use App\Models\Galeri;
use App\Models\Elibrary;
use App\Models\JadwalDokter;
use App\Models\LayananImage;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use App\Models\Fasilitas_Layanan;
use App\Models\KategoriGaleri;
use App\Models\Layanan_poliklinik;
use App\Models\Partnership;
use App\Models\YtLink;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Dev User
        User::create([
            'nama' => 'Cha Eun Woo',
            'role' => '1',
            'email' => 'mahkotonagano@gmail.com',
            'username' => 'kusuka',
            'image' => '1676100893.jpg',
            'password' => bcrypt('123456')
        ]);

        // Banners
        Banner::create([
            'image' => '1676098896.jpg',
            'title' => 'Selamat Datang di Klinik Vanni'
        ]);

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


        // folder
        Folder::create([
            'nama_folder' => 'Tips kesehatan'
        ]);
        Folder::create([
            'nama_folder' => 'Buku Pembelajaran'
        ]);


        // gallery Categories
        KategoriGaleri::create([
            'galeri_kategori' => 'Pelatihan BTCLS',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Penanggulangan Covid-19',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Vaksin Booster',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Pengabdian Masyarakat',
        ]);

        // kategori post
        PostCategory::create([
            'kategori' => 'Info kesehatan',
            'slug' => 'info-kesehatan'
        ]);
        PostCategory::create([
            'kategori' => 'Tips kesehatan',
            'slug' => 'tips-kesehatan'
        ]);
        PostCategory::create([
            'kategori' => 'Hot News',
            'slug' => 'hot-news'
        ]);

        YtLink::create([
            'title' => 'Pencegahan Hidrosefalus',
            'embed_link' => 'https://www.youtube.com/embed/VGtIP0iQmcY',
        ]);
    }
}
