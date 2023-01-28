@extends('template')

@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h1 class="display-1 mb-8 text-lg-center h3 title-text">VIRTUAL TOUR</h1>
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text text-lg-center">PURA BLANJONG DAN PRASASTI
            BLANJONG<br>DESA
            SANUR KAUH</h2>
        <span><a href="https://virtualtour.imagisolution.com/" class="btn btn-lg btn-dark rounded-pill">MULAI</a></span>
    </div>
</section>
<section id="Penjelasan">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="fade-left">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-3 text-center mb-7">Penjelasan Umum Virtual Tour</h2>
                        <img src="{{ asset('assets/img/photos/pura-3.jpg') }}" alt="" class="mb-7" width="100%" loading="lazy">
                        <p class="lead text-justify deskripsi-mobile">Jelajah Virtual (Virtual Tour) adalah suatu teknologi yang
                            menyimulasikan sebuah lokasi sesungguhnya yang terdiri dari rentetan gambar yang digabungkan
                            (stitch) untuk menghasilkan foto panorama 360 derajat. Jelajah Virtual (Virtual Tour)
                            biasanya digunakan untuk merepresentasikan berbagai macam elemen-elemen multimedia seperti
                            gambar (foto panorama), video, musik, narasi dan teks yang dijadikan satu kesatuan sehingga
                            memberikan pengalaman sedang berada disuatu tempat. Fotografi panorama merupakan sebuah
                            teknik pengambilan gambar menggunakan perangkat khusus yang mampu melebarkan bidang pada
                            objek yang diambil.
                        </p>
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
<section id="Penjelasan">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="fade-right">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-3 text-center mb-7">Denah Pura Blanjong & Prasasti Blanjong</h2>
                        <div class="text-center">
                           <img src="{{ asset('assets/img/photos/denah.jpg') }}" alt="" class="mb-7 w-100-mobile " loading="lazy">
                        </div>
                        <p class="lead text-justify mb-4 deskripsi-mobile">Adapun nama – nama Pelinggih dan Bale yang terdapat pada areal Pura
                            Blanjong & Prasasti Blanjong adalah sebagai berikut :
                        </p>
                        <ol>
                           <li>Pelinggih Ratu Tuan</li>
                           <li>Bale gong</li>
                           <li>Pelinggih Lantang Hidung</li>
                           <li>Pelinggih Tajuk</li>
                           <li>Bale Pawedan</li>
                           <li>Pelinggih Ida Bhatari Syahbandar</li>
                           <li>Pelinggih Lingga Yoni</li>
                           <li>Pelinggih Jro luh</li>
                           <li>Pelinggih Padma Capah</li>
                           <li>Bale Banten</li>
                           <li>Prasasti Blanjong</li>
                        </ol>
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
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/pura-5.jpg') }}" alt="" /></div>
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
