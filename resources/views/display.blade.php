@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/s1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/s2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/s3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/s4.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/s5.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container mt-4 bg-white pb-2">
        <div class="row justify-content-center">
            <div class="col-md-9 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            {{ $slug->judul }}
                        </h2>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="{{ '../storage/post/' . $slug->foto }}" alt="Card image cap"
                            style="object-fit: fit;">
                        <p><i>Foto Kegiatan: {{ $slug->judul }}</i></p>
                        {!! $slug->isi_post !!}
                    </div>
                    <div class="card-footer">
                        Tag: {{ $slug->tag }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-outline card-warning mt-3">
                    <div class="card-header">
                        <h5>INFO TERKINI</h5>
                    </div>
                    <div class="card-body p-3">
                        <a href="/ppdb" type="button" class="btn btn-block btn-warning shadow-sm">PPDB
                            2021</a>
                        <button type="button" class="btn btn-block btn-warning shadow-sm">Pendataan
                            KIP 2021</button>
                        <button type="button" class="btn btn-block btn-warning shadow-sm">Pendataan Hobi &
                            Cita-cita</button>
                        <button type="button" class="btn btn-block btn-warning shadow-sm">Bonrue Culture
                            Festival</button>
                        <button type="button" class="btn btn-block btn-warning shadow-sm">Porak 2021</button>
                    </div>

                </div>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h5 class="text-center">VISI</h5>
                    </div>
                    <div class="card-body p-4 bg-info">
                        <p class="font-weight-bold text-center">Sekolah yang berprestasi, berbudaya dan berdaya saing di
                            tahun 2021</p>
                        <a href="/visi-misi" class="btn btn-block btn-info bg-gradient-warning"><span class="text-dark">Visi
                                & Misi</span></a>
                    </div>
                </div>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h5 class="text-center">INDIKATOR VISI</h5>
                    </div>
                    <div class="card-body p-4 bg-info">
                        <p>1. Mampu memenuhi SNP dengan maksimal</p>
                        <p>2. Mampu mewujudkan budaya karakter bangsa melalui keteladanan dan pembiasaan di sekolah.</p>
                        <p>3. Mampu memelihara budaya, komitmen dan komunikasi yang efektif</p>
                        <p>4. Mampu berkompetisi akademik dan non akademik baik lokal maupun global.</p>

                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection
