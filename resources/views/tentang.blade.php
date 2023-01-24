@extends('template')

@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h1 class="display-1 mb-8 text-lg-center h3 title-text">TENTANG</h1>
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text text-lg-center">PURA BLANJONG DAN PRASASTI
            BLANJONG<br>DESA
            SANUR KAUH</h2>
        <span><a href="{{ route('virtual-tour') }}" class="btn btn-lg btn-dark rounded-pill">Virtual Tour</a></span>
    </div>
</section>
<section id="narahubung">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="zoom-in-up">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <h2 class="mb-3 text-center mb-7">Pihak Pendukung</h2>
                    <div class="col-lg-6 text-center">
                        <div class="image-pengurus mb-7">
                           <img src="{{ asset('assets/img/photos/pengurus-1.jpg') }}" alt="" class="rounded shadow width-mobile-100" loading="lazy">
                        </div>
                        <h3 class="mb-3 text-center">Jro Mangku Segara</h3>
                        <p class="lead mb-5 text-center">Jro Mangku Pura Blanjong</p>
                        {{-- <a href="" class="text-decoration-none text-white" style="font-size: 25px;"><i class="fa-solid fa-phone"></i></a> --}}
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="image-pengurus mb-7">
                           <img src="{{ asset('assets/img/photos/pengurus-2.jpg') }}" alt="" class="rounded shadow width-mobile-100" loading="lazy">
                        </div>
                        <h3 class="mb-3 text-center">I Wayan Destra Nesa</h3>
                        <p class="lead mb-5 text-center">Pengempon Pura Blanjong</p>
                        {{-- <a href="" class="text-decoration-none text-white" style="font-size: 25px;"><i class="fa-solid fa-phone"></i></a> --}}
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
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
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/pura-4.jpg') }}" alt="" /></div>
            {{-- <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg2-light.jpg') }}" alt="" />
        </div>
        <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg3-light.jpg') }}" alt="" /></div>
        <div class="swiper-slide"><img src="{{ asset('assets/img/photos/bg4-light.jpg') }}" alt="" /></div> --}}
    </div>
    <!--/.swiper-wrapper -->
</div>
<!-- /.swiper -->
</div>
<!-- /.swiper-container -->
@endsection
