<header class="position-absolute top-0 start-0 w-100">
    <nav class="navbar navbar-expand-lg classic transparent">
        <div class="container flex-lg-row flex-nowrap align-items-center bg-pill-black">
            <div class="navbar-brand w-100">
                <a href="#">
                    <img src="{{ asset('assets/img/sanur-kauh.png') }}"
                        srcset="{{ asset('assets/img/sanur-kauh.png') }} 2x" alt="" width="70" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="#!"><img src="{{ asset('assets/img/sanur-kauh.png') }}"
                            srcset="{{ asset('assets/img/sanur-kauh.png') }} 2x" alt="" width="70"/></a>
                    <button type="button" class="btn btn-circle btn-white btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column h-100 bg-dekstop rounded-pill">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link  {{ (request()->routeIs('home')) ? 'active' : '' }}"
                                href="{{ route('home') }}">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->routeIs('virtual-tour')) ? 'active' : '' }}" href="{{ route('virtual-tour') }}">VIRTUAL TOUR</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->routeIs('informasi')) ? 'active' : '' }}" href="{{ route('informasi') }}">INFORMASI</a></li>
                        <li class="nav-item"><a class="nav-link  {{ (request()->routeIs('galeri')) ? 'active' : '' }}"
                                href="{{ route('galeri') }}">GALERI</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->routeIs('tentang')) ? 'active' : '' }}" href="{{ route('tentang') }}">TENTANG</a></li>
                    </ul>
                    <!-- /.navbar-nav -->
                    {{-- <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                        <a href="mailto:#" class="link-body">info@locus.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social mt-4">
                            <a href="#" class="btn btn-circle btn-dark btn-behance btn-sm"><i
                                    class="uil uil-behance"></i></a>
                            <a href="#" class="btn btn-circle btn-dark btn-facebook-f btn-sm"><i
                                    class="uil uil-facebook-f"></i></a>
                            <a href="#" class="btn btn-circle btn-dark btn-instagram btn-sm"><i
                                    class="uil uil-instagram"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div> --}}
                    <!-- /offcanvas-nav-other -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    {{-- <li class="nav-item">
                <nav class="nav social justify-content-end text-end">
                  <a href="#" class="btn btn-circle btn-dark btn-behance btn-sm"><i class="uil uil-behance"></i></a>
                  <a href="#" class="btn btn-circle btn-dark btn-facebook-f btn-sm"><i class="uil uil-facebook-f"></i></a>
                  <a href="#" class="btn btn-circle btn-dark btn-instagram btn-sm"><i class="uil uil-instagram"></i></a>
                </nav>
                <!-- /.social -->
              </li> --}}
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
