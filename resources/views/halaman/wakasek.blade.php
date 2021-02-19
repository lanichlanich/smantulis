@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide mt-4 pt-5" data-ride="carousel">
        {{-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../slide-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide-1.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev pt-5" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next pt-5" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
    <div class="container mt-4 bg-white pb-2">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills px-auto justify-content-center">
                            <li class="nav-item mx-2"><a class="nav-link bg-info" href="#activity" data-toggle="tab">Wakasek
                                    Kurikulum</a>
                            </li>
                            <li class="nav-item mx-2"><a class="nav-link bg-info" href="#timeline" data-toggle="tab">Wakasek
                                    Kesiswaan</a></li>
                            <li class="nav-item mx-2"><a class="nav-link bg-info" href="#settings" data-toggle="tab">Wakasek
                                    Sarana &
                                    Prasarana</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <div class="justify-content-center pb-4 text-center">
                                    <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-512.png"
                                        alt="AdminLTE Logo"
                                        class="justify-content-center mt-3 brand-image img-circle elevation-3 mr-2"
                                        style="opacity: .8; width:200px">
                                    {{-- <img class="profile-user-img img-fluid img-circle" src="vendor/adminlte/dist/img/AdminLTELogo.png"
                                    alt="User profile picture"> --}}

                                </div>
                                <h4 class="bg-warning p-2">Data Pribadi</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">Nama : RUKIAH, S.Si., M.Pd.</li>
                                    <li class="bg-light p-1 mb-1">NIP : 19770707 200212 2 008</li>
                                    <li class="bg-light p-1 mb-1">Tempat/Tanggal Lahir: </li>
                                    <li class="bg-light p-1 mb-1">Agama: Islam</li>
                                    <li class="bg-light p-1 mb-1">Pangkat Golongan: </li>
                                    <li class="bg-light p-1 mb-1">Pendidikan:
                                    </li>
                                </ul>
                                <h4 class="bg-warning p-2">Pendidikan Formal</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">SD : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMP : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMA : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">S1 : <span class="badge badge-info"></span></li>
                                </ul>
                                <h4 class="bg-warning p-2">Riwayat Jabatan</h4>
                                <ul>
                                    {{-- <li class="bg-light p-1 mb-1">Guru di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">1994 - 2017</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Bongas <span
                                            class="badge badge-info">2017 - 2018</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">2018 - Sekarang</span></li> --}}

                                </ul>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <div class="justify-content-center pb-4 text-center">
                                    <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-512.png"
                                        alt="AdminLTE Logo"
                                        class="justify-content-center mt-3 brand-image img-circle elevation-3 mr-2"
                                        style="opacity: .8; width:200px">
                                    {{-- <img class="profile-user-img img-fluid img-circle" src="vendor/adminlte/dist/img/AdminLTELogo.png"
                                    alt="User profile picture"> --}}

                                </div>
                                <h4 class="bg-warning p-2">Data Pribadi</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">Nama : NOMAN SUPANDI, SE</li>
                                    <li class="bg-light p-1 mb-1">NIP : 19711125 200701 1 006</li>
                                    <li class="bg-light p-1 mb-1">Tempat/Tanggal Lahir: </li>
                                    <li class="bg-light p-1 mb-1">Agama: Islam</li>
                                    <li class="bg-light p-1 mb-1">Pangkat Golongan: </li>
                                    <li class="bg-light p-1 mb-1">Pendidikan:
                                    </li>
                                </ul>
                                <h4 class="bg-warning p-2">Pendidikan Formal</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">SD : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMP : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMA : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">S1 : <span class="badge badge-info"></span></li>
                                </ul>
                                <h4 class="bg-warning p-2">Riwayat Jabatan</h4>
                                <ul>
                                    {{-- <li class="bg-light p-1 mb-1">Guru di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">1994 - 2017</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Bongas <span
                                            class="badge badge-info">2017 - 2018</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">2018 - Sekarang</span></li> --}}

                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <div class="justify-content-center pb-4 text-center">
                                    <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-512.png"
                                        alt="AdminLTE Logo"
                                        class="justify-content-center mt-3 brand-image img-circle elevation-3 mr-2"
                                        style="opacity: .8; width:200px">
                                    {{-- <img class="profile-user-img img-fluid img-circle" src="vendor/adminlte/dist/img/AdminLTELogo.png"
                                    alt="User profile picture"> --}}

                                </div>
                                <h4 class="bg-warning p-2">Data Pribadi</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">Nama : RINEL, S.Si., M. Pd.</li>
                                    <li class="bg-light p-1 mb-1">NIP : 19720623 200604 2 010</li>
                                    <li class="bg-light p-1 mb-1">Tempat/Tanggal Lahir: </li>
                                    <li class="bg-light p-1 mb-1">Agama: Islam</li>
                                    <li class="bg-light p-1 mb-1">Pangkat Golongan: </li>
                                    <li class="bg-light p-1 mb-1">Pendidikan:
                                    </li>
                                </ul>
                                <h4 class="bg-warning p-2">Pendidikan Formal</h4>
                                <ul>
                                    <li class="bg-light p-1 mb-1">SD : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMP : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">SMA : <span class="badge badge-info"></span></li>
                                    <li class="bg-light p-1 mb-1">S1 : <span class="badge badge-info"></span></li>
                                </ul>
                                <h4 class="bg-warning p-2">Riwayat Jabatan</h4>
                                <ul>
                                    {{-- <li class="bg-light p-1 mb-1">Guru di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">1994 - 2017</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Bongas <span
                                            class="badge badge-info">2017 - 2018</span></li>
                                    <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Haurgeulis <span
                                            class="badge badge-info">2018 - Sekarang</span></li> --}}

                                </ul>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="card card-warning mt-3">
                    <div class="card-header">Info terkini</div>
                    <div class="card-body p-4">
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan Awal PPDB
                            2021</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan
                            KIP 2021</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan Hobi &
                            Cita-cita</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Bonrue Culture
                            Festival</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Porak 2021</button>
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
            </div> --}}


        </div>

    </div>
@endsection
