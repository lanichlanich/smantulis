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
                @foreach ($posts as $value)
                    <div class="col-sm col-md-4 border-0 mb-2">
                        <img class="card-img-top" src="{{ '../storage/post/' . $value->foto }}" alt="Card image cap"
                            style="object-fit: cover; height:150px">
                        <div class="card-body bg-gradient-light text-dark">
                            <h5 class="card-title font-weight-bold mb-1">{{ $value->judul }}</h5>
                            <p class="card-text font-weight-light">{{ $value->des_singkat }}</p>
                            <a href="{{ 'posts/' . $value->slug }}" class="btn btn-sm btn-outline-info">Lanjut Baca
                                ...</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
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
            </div>


        </div>

    </div>
@endsection
