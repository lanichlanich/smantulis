<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMANTULIS</title>
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
</head>

<body class="hold-transition layout-top-nav bg-light text-dark padding-top" style='background-image: url("/background-1.jpg"); background-position: left top; background-size: auto; background-repeat: repeat; background-attachment: scroll;'>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light fixed-top mb-5">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="../vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3 mr-2" style="opacity: .8 width:50px">
                    <span class="brand-text font-weight-light text-info">SMANTULIS</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link bg-light text-info rounded rounded">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                class="nav-link dropdown-toggle bg-light text-info rounded">Kurikulum</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="p-1 dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="rombel" class="dropdown-item bg-light text-info rounded">Rombongan Belajar</a>
                                </li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Jadwal Pelajaran</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                class="nav-link dropdown-toggle bg-light text-info rounded">Kesiswaan</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="p-1 dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="/pages/ppdb" class="dropdown-item bg-light text-info rounded">PPDB</a></li>
                                <li><a href="/pages/osis" class="dropdown-item bg-light text-info rounded">Osis</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle bg-light text-info rounded">Ekstakurikuler</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="p-1 dropdown-menu border-0 shadow">
                                        <li><a href="/pages/pramuka" class="dropdown-item bg-light text-info rounded">Pramuka</a>
                                        </li>
                                        <li><a href="/pages/pmr" class="dropdown-item bg-light text-info rounded">PMR</a></li>
                                        <li><a href="/pages/paskibra" class="dropdown-item bg-light text-info rounded">Paskibra</a>
                                        </li>
                                        <!-- <li><a href="#" class="dropdown-item bg-light">Basket</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Voli</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Futsal</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Seni Rupa</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Seni Musik</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Rohani Islam</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">English Club</a></li>
                                        <li><a href="#" class="dropdown-item bg-light">Japanese Club</a></li> -->
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle bg-light text-info rounded">Sarana
                                & Prasarana</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="p-1 dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Daftar Sarana</a></li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Daftar Prasarana</a>
                                </li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Perpustakaan</a></li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Laboratoriom</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                class="nav-link dropdown-toggle bg-light text-info rounded">Informasi Digital</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="p-1 dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="/info-surat-keluar" class="dropdown-item bg-light text-info rounded">Arsip
                                        Surat Keluar</a>
                                </li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Pendataan PIP</a></li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Info PIP</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle bg-light text-info rounded">Tenaga
                                Pendidik</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="p-1 dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="/pages/kepala-sekolah"
                                        class="dropdown-item bg-light text-info rounded">Kepala Sekolah</a></li>
                                <li><a href="/pages/wakil-kepala-sekolah"
                                        class="dropdown-item bg-light text-info rounded">Wakil Kepala
                                        Sekolah</a></li>
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Daftar Guru</a>
                                </li>
                                {{-- <li><a href="#" class="dropdown-item bg-light text-info rounded">Guru BK</a></li> --}}
                                <li><a href="#" class="dropdown-item bg-light text-info rounded">Tenaga Administrasi
                                        Sekolah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link bg-light text-info rounded">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link bg-light text-info rounded">Kontak</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>



        @yield('content')




        <footer class="main-footer mt-5">
            <div class="container py-5">
                <div class="row py-3">
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Contact Us</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Sosial Media</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Instagram</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Facebook</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Twitter</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Tim Manajemen</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Tim BOS</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Tim IT</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Tim Media</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Admin</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="/login" class="text-muted">Login</a></li>
                            <li class="mb-2"><a href="/register" class="text-muted">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">SMA NEGERI 1 HAURGEULIS</h6>
                        <h6 class="text-uppercase mb-4">CABANG DINAS PENDIDIKAN WILAYAH IX</h6>
                        <p class="text-muted mb-4">Jl. Budi Utomo, Sukajati, Kec. Haurgeulis, Kabupaten Indramayu, Jawa
                            Barat 45264</p>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i
                                        class="fab fa-2x fa-twitter text-info"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i
                                        class="fab fa-2x fa-facebook-f text-info"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i
                                        class="fab fa-2x fa-instagram text-info"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i
                                        class="fab fa-2x fa-youtube text-info"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i
                                        class="fab fa-2x fa-google text-info"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Handcraft using Laravel with love for <strong>SMANTULIS</strong>
            </div>
            <!-- Default to the left -->
            Copyright © 2021 by Farhany
        </footer>
        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../vendor/adminlte/dist/js/adminlte.min.js"></script>


</body>

</html>
