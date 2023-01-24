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
                        <p class="lead mb-10 text-center px-xxl-12">Beberapa dokumentasi foto tentang pura dan prasasti
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
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-1.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-1.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-2.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-2.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-2.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-3.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-3.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-3.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-4.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-4.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-4.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-5.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-5.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-5.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-6.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-6.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-6.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-7.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-7.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-7.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-8.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-8.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-8.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a href="{{ asset('assets/img/photos/galeri-pura-9.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-9.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-9.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-pura-10.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-pura-10.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-pura-10.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 pura">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-pura-11.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
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
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
                                    data-gallery="g-portfolio"> <img
                                        src="{{ asset('assets/img/photos/galeri-prasasti-1.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/galeri-prasasti-1.jpg') }} 2x" alt="" loading="lazy" /></a>
                                <figcaption><i class="si-photo_aperture"></i></figcaption>
                            </figure>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-6 col-xl-4 prasasti">
                            <figure class="overlay rounded"><a
                                    href="{{ asset('assets/img/photos/galeri-prasasti-2.jpg') }}"
                                    data-glightbox="title: Pellentesque Bibendum Vestibulum; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur."
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
                <p class="lead mb-10 text-center px-xl-12">Dokumentasi Video tentang pura dan prasasti blanjong
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
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/tKHio5vhdM8' frameborder='0'
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
