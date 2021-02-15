@extends('layouts.app')

@section('content')
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
        <div class="row text-center align-middle bg-light">
            <div class="col-sm col-md-9 text-center">
                <h4 class="align-top">

                    <blockquote class="quote-danger bg-white">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate distinctio adipisci at omnis
                            quos molestias nesciunt enim, nisi consequuntur veritatis, quis saepe iusto laboriosam beatae
                            autem, quaerat a dolorem voluptatem?</p>
                        <h5>Ambar Triwidodo, S.Pd</h5>
                    </blockquote>
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
                <div class="col-md-12 p-1"><h2 class="ml-3 pb-2">BERITA TERBARU</h2></div>
                @foreach ($posts as $value)
                    <div class="col-sm col-md-6 border-0 mb-2">
                        <a href="{{ 'posts/' . $value->slug }}">
                            <img class="card-img-top" src="{{ '../storage/post/' . $value->foto }}" alt="Card image cap"
                            style="object-fit: cover; height:150px">
                        </a>
                        <div class="card-body bg-gradient-light text-dark">
                            <a href="{{ 'posts/' . $value->slug }}">
                                <h5 class="card-title font-weight-bold mb-1">{{ $value->judul }}</h5>
                            </a>
                            <p class="card-text font-weight-light">{{ $value->des_singkat }}</p>
                            <a href="{{ 'posts/' . $value->slug }}" class="btn btn-sm btn-outline-info">Lanjut Baca
                                ...</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="card card-outline card-warning mt-3">
                    <div class="card-header"><h5>INFO TERKINI</h5></div>
                    <div class="card-body p-3">
                        <button type="button" class="btn btn-block btn-warning shadow">PPDB
                            2021</button>
                        <button type="button" class="btn btn-block btn-warning shadow">Pendataan
                            KIP 2021</button>
                        <button type="button" class="btn btn-block btn-warning shadow">Pendataan Hobi &
                            Cita-cita</button>
                        <button type="button" class="btn btn-block btn-warning shadow">Bonrue Culture
                            Festival</button>
                        <button type="button" class="btn btn-block btn-warning shadow">Porak 2021</button>
                    </div>

                </div>
                <div class="card card-outline card-info">
                    <div class="card-header"><h5 class="text-center">VISI</h5></div>
                    <div class="card-body p-4 bg-info">
                        <p class="font-weight-bold text-center">Sekolah yang berprestasi, berbudaya dan berdaya saing di tahun 2021</p>

{{-- <p>Untuk merealisasikan keinginan harapan, cita-cita serta tujuan yang tertuang dalam visi yang telah ditetapkan, maka SMA Negeri 1 Haurgeulis beserta stakeholder harus memahami makna dari visi tersebut yang tertuang dalam beberapa indikator sebagai berikut :</p> --}}
<a href="/visi-misi" class="btn btn-block btn-info bg-gradient-warning"><span class="text-dark">Visi & Misi</span></a>
                    </div>

                </div>
                <div class="card card-outline card-info">
                    <div class="card-header"><h5 class="text-center">INDIKATOR VISI</h5></div>
                    <div class="card-body p-4 bg-info">
                        <p >1.	Mampu memenuhi SNP dengan maksimal</p>
<p>2.	Mampu mewujudkan budaya karakter bangsa melalui keteladanan dan pembiasaan di sekolah.</p>
<p>3.	Mampu memelihara budaya, komitmen dan komunikasi yang efektif</p>
<p>4.	Mampu berkompetisi akademik dan non akademik baik lokal maupun global.</p>

                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection
