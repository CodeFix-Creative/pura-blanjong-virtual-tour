@extends('template')


@section('content')
<section id="home">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center" data-cues="slideInDown"
        data-group="hero">
        <h1 class="display-1 mb-8 text-lg-center h3 title-text">SEJARAH</h1>
        <h2 class="fs-16 ls-lg text-uppercase mb-5 welcome-text text-lg-center">PURA BLANJONG DAN PRASASTI
            BLANJONG<br>DESA
            SANUR KAUH</h2>
        <span><a href="{{ route('virtual-tour') }}" class="btn btn-lg btn-dark rounded-pill">Virtual Tour</a></span>
    </div>
</section>
<section id="services">
    <div class="container pt-7 pb-15">
        <div class="card" data-aos="flip-left">
            <div class="card-body">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item">
                                <figure class="rounded shadow"><img src="{{ asset('assets/img/photos/sejarah-1.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/sejarah-1.jpg') }} 2x" alt="" loading="lazy"></figure>
                            </div>
                            <div class="item">
                                <figure class="rounded shadow"><img src="{{ asset('assets/img/photos/sejarah-2.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/sejarah-2.jpg') }} 2x" alt="" loading="lazy"></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="mb-3">Sejarah Singkat Pura & Prasasti Blanjong</h2>
                        <p class="lead mb-7">Di ceritakan ada seorang spiritual bernama Ki Dukuh Jumpungan sebagai
                            penganut ajaran Siwa yang rajin melakukan semadi di Pura Puncak Mundi Nusa Penida. Kesaktian
                            dan ajaran-ajarannya diturunkan kepada kedua putranya, I Renggan dan I Renggin. Lalu, kedua
                            putranya ini terus mengembangkan ajaran ayahandanya. Hanya saja, keduanya mengembangkannya
                            dengan cara berbeda. I Renggan memilih ilmu hitam. Adiknya, I Renggin memilih ilmu putih. I
                            Renggan mendapatkan sebuah perahu yang sangat sakti oleh ayahnya. Perahu ini besar dan
                            kekuatannya mampu menghancurkan daratan jika ditabrakkan. Pulau Nusa Penida, Kabupaten
                            Klungkung, alkisah menyatu dengan daratan Pulau Bali. Konon, perahu I Renggan ini yang
                            memisahkannya sehingga seperti sekarang ini terpisah lautan. Keinginannya terus bertambah.
                            Renggan ingin memisahkan Gunung Agung dengan daratan Pulau Bali. Rencananya membuat murka
                            para Dewa. Kelakuan I Renggan akhirnya ditentang oleh adiknya sendiri yaitu I Renggin dengan
                            dibantu oleh Sri Kesari Warmadewa. Pertentangan  tersebut akhirnya diakhiri dengan
                            pertempuran yang dilakukan di atas perahu (jung/jong). Renggan kalah. Perahunya pecah.
                            Selanjutnya, tempat dimana terdapat perahu (jung/jong) pecah (belah) tersebut kemudian
                            menjadi nama tempat yang sekarang dikenal Blanjong. </p>
                        <a href="{{ route('home') }}" class="btn btn-white me-2 mt-lg-5">Kembali</a>
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
            <div class="swiper-slide"><img src="{{ asset('assets/img/photos/pura-3.jpg') }}" alt="" /></div>
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
