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
                            Info Daftar Surat Keluar
                        </h2>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Perhal Surat</th>
                                    <th>Tujuan Surat</th>
                                    <th>Keterangan Surat</th>
                                    <th>Softfile</th>

                                </tr>
                            </thead>
                            @foreach ($suratouts as $index => $value)
                                <tr>
                                    <td>
                                        <h5><span class="badge badge-success">{{ $value->no_surat }}
                                            </span></h5>
                                    </td>
                                    <td><span class="badge badge-info">{{ $value->tgl_surat }}</span></td>
                                    <td>{{ $value->perihal }}</td>
                                    <td>{{ $value->tujuan }}</td>
                                    <td>{{ $value->keterangan }}</td>
                                    <td>
                                        <a href="{{ asset('storage/SuratKeluar/' . $value->softfile) }}" alt="Softfile"
                                            target="_blank" class="btn btn-outline-danger btn-sm mb-1"><i
                                                class="fas fa-fw fa-download"></i> Download</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $suratouts->links() }}
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
