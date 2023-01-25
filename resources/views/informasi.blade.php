@extends('template')

@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h1 class="display-1 mb-8 text-lg-center h3 title-text">INFORMASI</h1>
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text text-lg-center">PURA BLANJONG DAN PRASASTI
            BLANJONG<br>DESA
            SANUR KAUH</h2>
        <span><a href="{{ route('virtual-tour') }}" class="btn btn-lg btn-dark rounded-pill">Virtual Tour</a></span>
    </div>
</section>
<section id="informasi">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="flip-left">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-3 text-center mb-7 deskripsi-mobile">Informasi Seputar Pura</h2>
                        <p class="lead mb-7 text-justify deskripsi-mobile">Dalam melaksanakan upacara piodalan (Pemedekan Ida Bhatara) yang jatuh
                            setiap 210 hari (6 Bulan) sekali, tepatnya pada hari soma pahing wuku langkir memiliki cara
                            maupun waktu yang berbeda – beda. Pemedakan Ida Bhatara pertama dilakukan oleh kelompok
                            masyarakat Sukawati yang khusus melaksanakan kegiatan pemujaan di pelinggih Lantang Hidung,
                            lalu dilanjutkan oleh kelompok masyarakat cramcam yang dipusatkan di Pelinggih Bebaturan
                            Padma Capah/Padma Agung kemudian di lanjutkan di Tugu Prasasti Blanjong dan yang terakhir
                            dilakukan oleh kelompok masyarakat Desa Renon.
                        </p>
                        <p class="lead mb-7 text-justify deskripsi-mobile">Masyarakat yang ingin berkunjung untuk melakukan persembahyangan di Pura
                            Blanjong diperkenankan membawa Banten Pejati dan sepah ganten/lekesan yang nantinya akan
                            dihaturkan pada Pelinggih yang ada pada Pura Blanjong. Masyarakat juga diperkenankan membawa
                            sarana persembahyangan, seperti canang/bunga, dan dupa, serta menggunakan busana
                            persembahyangan lengkap.
                        </p>
                        <p class="lead text-justify deskripsi-mobile">Jika masyarakat sedang dalam keadaan cuntaka, dilarang untuk berkunjung ke Pura Blanjong
                            untuk menjaga kesucian areal Pura. Waktu kunjungan ke Pura Blanjong hampir sama dengan Pura
                            lain pada Umumnya. Masyarakat dapat menghubungi narahubung yang tertera untuk mengetahui
                            informasi mengenai jam kunjunganPura Blanjong.
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
<section id="narahubung">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="flip-right">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <h2 class="mb-3 text-center mb-7">Narahubung</h2>
                    <div class="col-lg-6 text-center">
                        <div class="image-pengurus mb-7">
                           <img src="{{ asset('assets/img/photos/pengurus-1.jpg') }}" alt="" class="rounded shadow width-mobile-100" loading="lazy">
                        </div>
                        <h3 class="mb-3 text-center">Jro Mangku Segara</h3>
                        <p class="lead mb-5 text-center">Jro Mangku Pura Blanjong</p>
                        <a href="" class="text-decoration-none text-white" style="font-size: 25px;"><i class="fa-solid fa-phone"></i></a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="image-pengurus mb-7">
                           <img src="{{ asset('assets/img/photos/pengurus-2.jpg') }}" alt="" class="rounded shadow width-mobile-100" loading="lazy">
                        </div>
                        <h3 class="mb-3 text-center">I Wayan Destra Nesa</h3>
                        <p class="lead mb-5 text-center">Pengempon Pura Blanjong</p>
                        <a href="" class="text-decoration-none text-white" style="font-size: 25px;"><i class="fa-solid fa-phone"></i></a>
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
