@extends('layout.main')

@section('content')

@php
$bg = asset('Template');
@endphp

<div class="banner-carousel banner-carousel-2">
    <div class="banner-carousel-item" style="background-image:url({{$bg}}/images/slider-main/bg-pendaftaran.jpg); min-height: 500px; background-size: cover; background-position: center;">
        <div class="container">
            <div class="box-slider-content">
                <div class="box-slider-text">
                    <h3 class="box-slide-sub-title"></h3>
                    <p class="box-slide-description text-dark"> Klinik Vanni merupakan fasilitas pelayanan kesehatan yang berkomitmen memberikan layanan medis profesional, berkualitas, dan berorientasi pada kebutuhan pasien. Didukung tenaga kesehatan yang kompeten serta fasilitas yang memadai, kami menghadirkan pelayanan yang nyaman, aman, dan terpercaya.
        Dengan mengedepankan profesionalisme, integritas, dan kepedulian, Klinik Vanni terus meningkatkan mutu layanan melalui pengembangan sumber daya manusia, penerapan standar kesehatan yang baik, dan pemanfaatan teknologi. Kami berkomitmen menjadi pilihan utama masyarakat dalam menyediakan layanan kesehatan yang cepat, tepat, dan terpercaya<br> <strong>  </strong></p>
                </div>
            </div>
        </div>
    </div>

    @foreach($banners as $banner)
    @php
    $bgImage = asset('images/banner-image/'.$banner->image);
    @endphp

    <div class="banner-carousel-item" style="background-image:url({{$bgImage}}); min-height: 500px; background-size: cover; background-position: center;"></div>

    @endforeach
</div>


<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">"Melayani sepenuh Hati dan  Profesional"</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section class="social" id="social">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">Klinik Vanni</h2>
            <h3 class="section-sub-title">Aktivitas Terbaru</h3>
        </div>
    </div>
    <div class="row ml-3 mr-3">
        @foreach($links as $link)
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="960" height="540" src="{{$link->embed_link}}" title="YouTube video" frameborder="0" allow="autoplay" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 960px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('Template')}}/images/logo-ultah.png" class="img-fluid rounded-start mx-2 my-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        
                            <p class="card-text">Klinik Vanni | Brebes |
                                Jl. Raya Ciledug - Ketanggungan, 
                                Tembongdea, Bojongsari, Kec. Losari, 
                                Kabupaten Brebes, Jawa Tengah 52255
                
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Klinik Vanni</h2>
                <h3 class="section-sub-title">Kenapa Kami?</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/ruang-nyaman.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Ruang inap yang nyaman dan bersih</a></h3>
                        <p>Kebersihan dan kenyamanan pasien sangat diutamakan, karena lingkungan yang bersih memberikan banyak manfaat untuk kesehatan.</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/24-jam.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Fasilitas IGD 24 jam</a></h3>
                        <p></p>
                    </div>
                </div><!-- Service 2 end -->

            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="template/images/services/service-center.jpg" alt="service-avater-image">
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/doctor-proff.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Ditangani oleh Dokter ahli</a></h3>
                        <p>Memiliki dokter-dokter spesialis yang telah berpengalaman di bidangnya</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/alat-medis.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Peralatan Medis lengkap</a></h3>
                        <p>Memiliki peralatan medis yang lengkap dan memadai serta berteknologi tinggi guna untuk menunjang kebutuhan pasien.</p>
                    </div>
                </div><!-- Service 5 end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Klinik Vanni</h2>
                <h3 class="section-sub-title">Gallery</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <!-- galeri -->
        <div class="row">
            <div class="col-12">

                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($galeris as $galeri)

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;Poliklinik&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/galeri-image/'.$galeri->image) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/galeri-image/'.$galeri->image) }}" alt="project-img" style="max-height:350px ; overflow:hidden;">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <p class="project-item-title text-white">{{ $galeri->title_galeri }}</a>
                                    </p>
                                    <span class="text-white"><small>{!! $galeri->keterangan !!}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="/galeri">Selengkapnya</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->


        <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="/partnership">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="subscribe-call-to-acton">
                    <h3>Emergency Only?</h3>
                    <h4>(0778) 123 456</h4>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-8">
                <div class="ts-newsletter row align-items-center">
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Klinik Vanni</h2>
                <h3 class="section-sub-title">Artikel Terbaru</h3>
            </div>
        </div>

        <div class="row">

            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="/artikel/{{$post->slug}}" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="{{asset('images/blog-image/'.$post->image)}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="/artikel/{{$post->slug}}" class="d-inline-block">{{ $post->title }}</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ $post->created_at }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="/artikel">See All Posts</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->


@endsection