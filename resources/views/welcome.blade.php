<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav bg-light text-dark padding-top bg-gradient-info">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3 mr-2" style="opacity: .8 width:50px">
                    <span class="brand-text font-weight-light">SMANTULIS</span>
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
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Kurikulum</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item">Rombongan Belajar</a></li>
                                <li><a href="#" class="dropdown-item">Jadwal Pelajaran</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Kesiswaan</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item">PPDB</a></li>
                                <li><a href="#" class="dropdown-item">Osis</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">Ekstakurikuler</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">Pramuka</a></li>
                                        <li><a href="#" class="dropdown-item">Paskibra</a></li>
                                        <li><a href="#" class="dropdown-item">PMR</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Sarana & Prasarana</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item">Daftar Sarana</a></li>
                                <li><a href="#" class="dropdown-item">Daftar Prasarana</a></li>
                                <li><a href="#" class="dropdown-item">Perpustakaan</a></li>
                                <li><a href="#" class="dropdown-item">Laboratoriom</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Hubungan Masyarakat</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item">Pendataan PIP</a></li>
                                <li><a href="#" class="dropdown-item">Info PIP</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Tenaga Pendidik</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                                style="left: 0px; right: inherit;">
                                <li><a href="#" class="dropdown-item">Kepala Sekolah</a></li>
                                <li><a href="#" class="dropdown-item">Wakil Kepala Sekolah</a></li>
                                <li><a href="#" class="dropdown-item">Guru Mata Pelajaran</a></li>
                                <li><a href="#" class="dropdown-item">Guru BK</a></li>
                                <li><a href="#" class="dropdown-item">Tenaga Administrasi Sekolah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kontak</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide pt-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="slide-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="slide-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="slide-1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev pt-5" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next pt-5" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container mt-md-4 mt-sm-0">
            <div class="row text-center align-middle bg-white">
                <div class="p-4 col-sm col-md-9 text-center">
                    <h4 class="align-midle">
                        <p class="align-midle p-2">
                            "Aperiam distinctio, rem error obcaecati hic mollitia at repellat molestias voluptatum,
                            placeat
                            dignissimos ab fuga numquam recusandae iure cumque animi? Excepturi ipsam enim temporibus
                            dignissimos eveniet cum totam, magnam accusamus!"
                        </p>
                        {{-- <p>
                            Aperiam distinctio, rem error obcaecati hic mollitia at repellat molestias voluptatum,
                            placeat
                            dignissimos ab fuga numquam recusandae iure cumque animi? Excepturi ipsam enim temporibus
                            dignissimos eveniet cum totam, magnam accusamus!
                        </p> --}}
                    </h4>

                </div>
                <div class="col-sm col-md-3 justify-content-center pb-4">
                    <img src="ambar.jpg" alt="AdminLTE Logo" class="mt-3 brand-image img-circle elevation-3 mr-2"
                        style="opacity: .8; width:200px">
                    {{-- <img class="profile-user-img img-fluid img-circle" src="vendor/adminlte/dist/img/AdminLTELogo.png"
                        alt="User profile picture"> --}}

                </div>
            </div>
        </div>

        <div class="container mt-4 bg-white pb-2">
            <div class="row justify-content-center">
                <div class="col-md-9 row mt-3">
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.
                                lo</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="t.jpg" alt="Card image cap" style="height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">Card title</h5>
                            <p class="card-text font-weight-light">Some quick example text to build
                                on the card title
                                and make up the bulk
                                card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-info">Lanjut Baca...</a>
                        </div>
                    </div>



                </div>
                <div class="col-md-3">
                    <div class="card card-warning mt-3">
                        <div class="card-header">Info terkini</div>
                        <div class="card-body p-4">
                            <button type="button" class="btn btn-block bg-gradient-info btn-xs">Pendataan Awal PPDB
                                2021</button>
                            <button type="button" class="btn btn-block bg-gradient-info btn-xs">Pendataan
                                KIP 2021</button>
                            <button type="button" class="btn btn-block bg-gradient-info btn-xs">Pendataan Hobi &
                                Cita-cita</button>
                            <button type="button" class="btn btn-block bg-gradient-info btn-xs">Bonrue Culture
                                Festival</button>
                            <button type="button" class="btn btn-block bg-gradient-info btn-xs">Porak 2021</button>
                        </div>

                    </div>
                    <div class="card card-success">
                        <div class="card-header">Visi</div>
                        <div class="card-body p-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore est, maxime numquam
                            magni minus harum la
                        </div>

                    </div>
                    <div class="card card-info">
                        <div class="card-header">Misi</div>
                        <div class="card-body p-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore est, maxime numquam
                            magni minus harum la
                        </div>

                    </div>
                </div>


            </div>

        </div>

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
                            <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Regsiter</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">SMA NEGERI 1 HAURGEULIS</h6>
                        <h6 class="text-uppercase mb-4">CABANG DINAS PENDIDIKAN WILAYAH IX</h6>
                        <p class="text-muted mb-4">Jl. Budi Utomo, Sukajati, Kec. Haurgeulis, Kabupaten Indramayu, Jawa
                            Barat 45264</p>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i
                                        class="fab fa-2x fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i
                                        class="fab fa-2x fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i
                                        class="fab fa-2x fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i
                                        class="fab fa-2x fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i
                                        class="fab fa-2x fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Handcraft with love for SMANTULIS
            </div>
            <!-- Default to the left -->
            <strong>Copyright © 2021 by Farhany, S.Kom </strong> All rights reserved.
        </footer>
        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="vendor/adminlte/dist/js/adminlte.min.js"></script>


</body>

</html>
