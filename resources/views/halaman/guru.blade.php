@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide mt-4 pt-5" data-ride="carousel">

    </div>
    <div class="container mt-4 bg-white pb-2">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Daftar Guru SMAN 1 Haurgeulis
                        </h2>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Lengkap</th>
                                    <th>JK</th>
                                    <th>NIP</th>
                                    <th>NUPTK</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>

                                </tr>
                            </thead>
                            @foreach ($gurus as $index => $value)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/Pegawai/' . $value->foto) }}"
                                            alt="Foto {{ $value->nama }}"
                                            class="rounded-circle img-thumbnail mx-auto d-block"
                                            style="height: 80px; width:80px; object-fit: cover;">
                                    </td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->jk }}</td>
                                    <td>{{ $value->nip }}</td>
                                    <td>{{ $value->nuptk }}</td>
                                    <td>{{ $value->tgl_lahir }}</td>
                                    <td>{{ $value->tpt_lahir }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $gurus->links() }}
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
