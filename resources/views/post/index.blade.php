@extends('adminlte::page')

@section('title', 'Artikel')

@section('content_header')
    <h1>Artikel</h1>
@stop

@section('content')
    {{ isset($slot) ? $slot : null }}
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi Singkat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $blog)
                                    <tr>
                                    {{-- <td>{{$i++}}</td> --}}
                                        <td class="text-center">
                                            <img src="{{ Storage::url('../storage/post/') . $blog->foto }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td>{{ $blog->judul }}</td>
                                        <td>{!! $blog->des_singkat !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('post.destroy', $blog->slug) }}" method="POST">{{$blog->slug}}
                                                <a href="{{ route('post.edit', $blog->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                               <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Blog belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>
@stop
