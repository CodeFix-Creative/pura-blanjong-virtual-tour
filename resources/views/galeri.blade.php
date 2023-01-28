@extends('template')

@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h1 class="display-1 mb-8 text-lg-center h3 title-text">GALERI</h1>
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text text-lg-center">PURA BLANJONG DAN PRASASTI
            BLANJONG<br>DESA
            SANUR KAUH</h2>
        <span><a href="{{ route('virtual-tour') }}" class="btn btn-lg btn-dark rounded-pill">Virtual Tour</a></span>
    </div>
</section>
<section id="foto">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="zoom-in">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-7 mx-auto">
                        <h2 class="mb-3 text-center">Foto Pura Blanjong dan Prasasti Blanjong</h2>
                        <p class="lead mb-10 text-center px-xxl-12 deskripsi-mobile">Beberapa dokumentasi foto tentang pura dan prasasti
                            blanjong</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="grid grid-view">
                    <div class="isotope-filter filter mb-8 text-center">
                        <ul>
                            <li><a class="filter-item active" data-filter="*">Semua</a></li>
                            <li><a class="filter-item" data-filter=".pura">Pura</a></li>
                            <li><a class="filter-item" data-filter=".prasasti">Prasasti</a></li>
                            {{-- <li><a class="filter-item" data-filter=".events">Events</a></li>
                                    <li><a class="filter-item" data-filter=".pastries">Pastries</a></li> --}}
                        </ul>
                    </div>
                    <div class="row gx-md-6 gy-6 isotope">
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-1.jpg') }}"
                                    data-glightbox="title: Pelinggih Ratu Tuan ; description: Merupakan linggih dari Ida Ratu Tuan.  Linggih Ida Ratu Tuan ini berkaitan dengan tarian baris cina dan gong beri yang penyebutanan muncul pada Tugu Prasasti Blanjong ( Jaya stmbha ) pada tahun 835 ( 931 Masehi) yang dikeluarkan oleh Sri Kesari Warmadewa dengan kata behri."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-1.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-1.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-2.jpg') }}"
                                    data-glightbox="title: Pelinggih Ida bhatari Syahbandar; description: Merupakan Linggih dari Ida Bhatari Syahbandar. ida bhatari syahbadar merupakan perwujudan dari dewi yang dipercayai oleh kepercayaan di luar Agama Hindu khususnya Budha (Rulai)."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-2.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-2.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-3.jpg') }}"
                                    data-glightbox="title: Pelinggih Tajuk; description: Pelinggih Tajuk memiliki fungsi sebagai tempat untuk untuk ngelinggihang atau menstanakan berbagai perwujudan Simbol-simbol Tuhan atau Ida Betara dan Betari ketika upacara Piodalan serta sebagai tempat mengaturkan upakara saat ada upacara besar atau kecil."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-3.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-3.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-4.jpg') }}"
                                    data-glightbox="title: Pelinggih Lingga Yoni; description: Pelinggih Lingga yoni memiliki fungsi sebagai linggih dari siwa buda dimana pada bagian atasnya terpada lingga yang berbentuk seperti lesung dan yoni seperti penumbuk."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-4.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-4.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-5.jpg') }}"
                                    data-glightbox="title: Pelinggih Padma Capah ; description: Pelinggih Padma capah merupakan linggih dari ida bhatara sanimian dimana pada saat upacara berlangsung. segala pratima yang digunakan akan diletakan di pelinggih ini."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-5.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-5.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-6.jpg') }}"
                                    data-glightbox="title: PPelinggih Jero Luh; description: Pelinggih Jro Luh memiliki fungsi sebagai linggih dari Jero Luh. di dalam linggih jro luh terdapat beberapa fragmen peninggalan."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-6.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-6.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        {{-- <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-7.jpg') }}"
                                    data-glightbox="title: Bale Banten ; description: Bale Banten memiliki fungsi sebagai tempat pembuatan serta tempat penyimpanan banten. banten yang biasanya di buat seperti. canang, pejati,kuwangen, sampian dan lain- lain. "
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-7.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-7.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div> --}}
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-8.jpg') }}"
                                    data-glightbox="title: Bale Banten ; description: Bale Banten memiliki fungsi sebagai tempat pembuatan serta tempat penyimpanan banten. banten yang biasanya di buat seperti. canang, pejati,kuwangen, sampian dan lain- lain."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-8.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-8.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-9.jpg') }}"
                                    data-glightbox="title: Pelinggih Lantang hindung; description: Pelinggih Lantang  Hidung Memiliki fungsi sebagai linggih Ida bhatara dalem blanjong. Pelinggih Lantang Hidung   ini memiliki kisah yang dikenal dengan “Legu Gondong"
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-9.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-9.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        {{-- <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-pura-10.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-10.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-10.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div> --}}
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-pura-11.jpg') }}"
                                    data-glightbox="title: Bale Gong; description: Bale Gong Memiliki fungsi sebagai tempat penyimpanan gamelan atau gong pada saat upacara berlangsung. gamelan atau gong yang biasanya digunakan adalah Gamelan Bale Ganjur dan Gong Behri."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-11.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-11.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 prasasti">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-prasasti-1.jpg') }}"
                                    data-glightbox="title: Prasasti Blanjong; description: "
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-prasasti-1.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-prasasti-1.jpg') }} 2x" alt="" loading="lazy" /></a>
                                {{-- <figcaption><i class="si-photo_aperture"></i></figcaption> --}}
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 prasasti">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-prasasti-2.jpg') }}"
                                    data-glightbox="title: Prasasti Blanjong; description: "
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-prasasti-2.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-prasasti-2.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
</section>
<section id="video">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="zoom-in">
            <div class="card-body">
                <h2 class="mb-3 text-center">Video Pura Blanjong dan Prasasti Blanjong</h2>
                <p class="lead mb-10 text-center px-xl-12 deskripsi-mobile">Dokumentasi Video tentang pura dan prasasti blanjong
                </p>
                <style>
                    .embed-container {
                        position: relative;
                        padding-bottom: 56.25%;
                        height: 0;
                        overflow: hidden;
                        max-width: 100%;
                    }

                    .embed-container iframe,
                    .embed-container object,
                    .embed-container embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }

                </style>
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/dHs0aYH-Vjs' frameborder='0'
                        allowfullscreen></iframe></div>
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
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/pura2.jpg') }}" alt="" /></div>
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
