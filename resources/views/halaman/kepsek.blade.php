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
                <div class="card mx-1">
                    <div class="card-header bg-info">
                        <h2>
                            Profile Kepala Sekolah
                        </h2>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="justify-content-center pb-4 text-center">
                            <img src="ambar.jpg" alt="AdminLTE Logo" class="justify-content-center mt-3 brand-image img-circle elevation-3 mr-2"
                                style="opacity: .8; width:200px">
                            {{-- <img class="profile-user-img img-fluid img-circle" src="vendor/adminlte/dist/img/AdminLTELogo.png"
                            alt="User profile picture"> --}}
            
                        </div>
                        <h4 class="bg-warning p-2">Data Pribadi</h4>
                        <ul>
                            <li class="bg-light p-1 mb-1">Nama : Ambar Triwidodo, S.Pd</li>
                            <li class="bg-light p-1 mb-1">NIP : 197001281995121001</li>
                            <li class="bg-light p-1 mb-1">Tempat/Tanggal Lahir: Cilacap, 28 Januari 1970</li>
                            <li class="bg-light p-1 mb-1">Agama: Islam</li>
                            <li class="bg-light p-1 mb-1">Pangkat Golongan: Pembina Tk.1, IV/b</li>
                            <li class="bg-light p-1 mb-1">Pendidikan: S1 - Pendidikan Geografi (IKIP Bandung/UPI)</li>
                        </ul>
                        <h4 class="bg-warning p-2">Pendidikan Formal</h4>
                        <ul>
                            <li class="bg-light p-1 mb-1">SD : SD Negeri Sindang II <span class="badge badge-info">1983</span></li>
                            <li class="bg-light p-1 mb-1">SMP : SMP Negeri 2 Indramayu <span class="badge badge-info">1986</span></li>
                            <li class="bg-light p-1 mb-1">SMA : SMA Negeri 1 Sindang <span class="badge badge-info">1989</span></li>
                            <li class="bg-light p-1 mb-1">S1 : IKIP Bandung / Universitas Pendidikan Indonesia <span class="badge badge-info">1994</span></li>
                        </ul>
                        <h4 class="bg-warning p-2">Riwayat Jabatan</h4>
                        <ul>
                            <li class="bg-light p-1 mb-1">Guru di SMAN 1 Haurgeulis <span class="badge badge-info">1994 - 2017</span></li>
                            <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Bongas <span class="badge badge-info">2017 - 2018</span></li>
                            <li class="bg-light p-1 mb-1">Kepala Sekolah di SMAN 1 Haurgeulis <span class="badge badge-info">2018 - Sekarang</span></li>
                            
                        </ul>
                    </div>
                    <div class="card-footer">
                        
                    </div>
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
