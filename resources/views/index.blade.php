@extends('template')


@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text">Selamat Datang di</h2>
        <h1 class="display-1 mb-8 text-lg-center h3 title-text header-title-mobile">PURA BLANJONG DAN PRASASTI BLANJONG<br>DESA
            SANUR KAUH</h1>
        <span><a href="{{ route('virtual-tour') }}" class="btn btn-lg btn-dark rounded-pill">Virtual Tour</a></span>
    </div>
</section>
<section id="sejarah">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="fade-right">
            <div class="card-body">
                <div class="row gx-md-8 gx-xl-10 gy-8">
                    <div class="col-lg-5">
                        <figure class="rounded"><img class="img-fluid width-mobile-100"
                                src="{{ asset('assets/img/photos/about-pura.jpg') }}"
                                srcset="{{ asset('assets/img/photos/about-pura.jpg') }} 2x" alt="" loading="lazy"></figure>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7">
                        <h2 class="mb-3">Sejarah Singkat Pura & Prasasti Blanjong</h2>
                        <p class="lead mb-7 deskripsi-mobile">Blanjong berasal dari kata blahjung. Blah atau terbelah atau pecah,
                            dan jung berarti perahu. Jung yang bocor, kemudian terdampar dan akhirnya pecah
                            berantakan dekat Sawang. Kata Sawang berarti palung laut yang dalam. yang kini
                            disebut dengan Semawang, Arti kata Blanjong secara keseluruhan adalah suatu tempat
                            dimana perahu yang bocor kemudian pecah terdampar di dekat semawang.
                            pura Blanjong dan prasasti Blanjong merupakan sebuah pura dan prasasti. yang ada
                            sejak Bali kuno, pura Blanjong memiliki struktur Dwi Mandala terdiri dari Jaba Sisi
                            (Nista Mandala) halaman terbuka dan Jeroan (Utama mandala). Sesuai dengan pola
                            pembangunan pura kuno dari zaman Dinasti Warmadewa di Bali.</p>
                        <a href="{{ route('sejarah') }}" class="btn btn-white me-2 mt-lg-5">Selengkapnya</a>
                        <!-- /.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
</section>
<section id="lokasi">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="fade-left">
            <div class="card-body">
                <h2 class="mb-3 text-center">Lokasi Pura & Prasasti Blanjong</h2>
                <p class="lead mb-10 text-lg-center px-xl-12 deskripsi-mobile">Pura Blanjong merupakan Pura Dang Kahyangan, yang
                    dipuja di pura Dalem Blanjong ini adalah Ida Bhatara Dalem Blanjong. Pura Dang Kahyangan ini
                    di sungsung oleh empat desa adat yaitu desa adat Renon, desa adat Cerancam, desa adat
                    Lantang Irung dan desa adat Sukawati. Pura Blanjong terletak di Jalan Danau Poso, Desa Sanur
                    Kauh, Kecamatan Denpasar Selatan, Kabupaten Kota Denpasar, Provinsi Bali.
                </p>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pura blanjong&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://www.gachacute.com/">Download</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_iframe {
                            height: 400px !important;
                        }

                    </style>
                </div>
                <!-- /.grid -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
</section>
<div class="swiper-container swiper-bg" data-effect="fade" data-margin="0" data-autoplay="true"
    data-autoplaytime="7000">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/pura1.jpg') }}" alt="" /></div>
            {{-- <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg2-light.jpg') }}" alt="" /></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg3-light.jpg') }}" alt="" /></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg4-light.jpg') }}" alt="" /></div> --}}
        </div>
        <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
</div>
<!-- /.swiper-container -->
@endsection
