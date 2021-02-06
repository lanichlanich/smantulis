@extends('adminlte::page')

@section('title', 'Artikel')

@section('content_header')
    <h1>Artikel</h1>
@stop

@section('content')
    {{ isset($slot) ? $slot : null }}
    <div class="card">
        <div class="card-header bg-info">
            <h6 class="text-white">Daftar Artikel</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Foto Thumbnail</th>
                    <th>Judul</th>
                    <th>Deskripsi Singkat</th>
                    <th>Tag</th>
                </tr>
                @foreach ($posts as $value)
                    <tr>
                        <td>{{ $value->foto }}</td>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->des_singkat }}</td>
                        <td>{{ $value->tag }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
