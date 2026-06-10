@extends('layout.main')

@section('content')

@php
$bgImage1 = asset('Template/images/slider-layanan/bg1.jpg');
$bgImage2 = asset('Template/images/slider-layanan/bg2.jpg');
$bgImage3 = asset('Template/images/slider-layanan/bg3.jpg');
@endphp

<div class="banner-carousel banner-carousel-1 mb-0 ">
    <div class="banner-carousel-item" style="background-image:url({{$bgImage1}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">Mengabdi dan</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">melayani Masyarakat</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-carousel-item" style="background-image:url({{$bgImage2}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">Kesehatan dan kebahagiaan anda adalah</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">Prioritas kami</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-carousel-item" style="background-image:url({{$bgImage3}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">Melayani dengan penuh</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">Cinta dan kasih</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">KLINIK VANNI</h2>
            <h3 class="section-sub-title">Layanan Kami</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3 class="mt-4 mb-3">Layanan Klinik Vanni</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🏥 Poli Umum</h5>
                    <p class="card-text">Melayani pemeriksaan kesehatan, konsultasi, diagnosis, dan pengobatan berbagai keluhan medis umum.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🦷 Poli Gigi</h5>
                    <p class="card-text">Menyediakan layanan pemeriksaan, perawatan, dan konsultasi kesehatan gigi serta mulut.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🤱 Poli Kandungan</h5>
                    <p class="card-text">Melayani pemeriksaan kesehatan ibu dan kehamilan serta konsultasi kesehatan reproduksi wanita.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🔬 Laboratorium</h5>
                    <p class="card-text">Menyediakan berbagai pemeriksaan penunjang medis untuk membantu proses diagnosis dan pemantauan kesehatan.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🚑 IGD & Rawat Inap</h5>
                    <p class="card-text">Memberikan layanan gawat darurat dan fasilitas rawat inap dengan pengawasan tenaga medis yang profesional.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">💊 Apotek</h5>
                    <p class="card-text">Menyediakan obat-obatan dan kebutuhan kesehatan dengan pelayanan yang cepat dan terpercaya.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">✂️ Khitan</h5>
                    <p class="card-text">Layanan khitan dilakukan oleh tenaga medis profesional dengan prosedur yang aman, nyaman, dan higienis untuk menjaga kesehatan serta kebersihan area genital.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">🔪 Operasi Minor</h5>
                    <p class="card-text">Melayani tindakan bedah ringan seperti pengangkatan benjolan, kutil, abses, dan penjahitan luka dengan prosedur yang aman serta penanganan yang cepat dan tepat.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection