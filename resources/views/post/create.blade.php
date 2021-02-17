@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Artikel</h1>
@stop

@section('content')
    {{ isset($slot) ? $slot : null }}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">Buat Postingan Baru</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul Postingan</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" />
                            @error('judul') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tag</label>
                                    <input type="text" name="tag" class="form-control" value="{{ old('tag') }}" />
                                    @error('tag') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Foto Thumbnail</label>
                                    <input type="file" name="file" class="form-control" value="{{ old('file') }}" />
                                    @error('file') <span class="text-danger error">{{ $message }}</span>@enderror


                                    {{-- <label for="customFile">Foto</label>
                                        <div class="custom-file">
                                            <label class="custom-file-label">
                                                @if ($foto)
                                                    <a href="{{ $foto }}">Foto Terupload</a>
                                                @endif
                                            </label>
                                            <input name="foto" type="file" >
                                            @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Singkat</label>
                            <input type="text" name="des_singkat" class="form-control" value="{{ old('des_singkat') }}" />
                            @error('des_singkat') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label><strong>Isi Postingan :</strong></label>
                            <textarea class="summernote" name="isi_post" id="summernote">{{ old('isi_post') }}</textarea>
                            @error('isi_post') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Jangan lupa <b><i class="fas fa-save fw "></i> Simpan & Terbitkan</b> setelah selesai
                                mengisi
                            </div>
                            <div class="col-3">

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-block btn-secondary disabled">Simpan
                                        Draft</button>
                                </div>
                            </div>
                            <div class="col-3">

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-block btn-success"><i class="fas fa-save fw "></i>
                                        Simpan & Terbitkan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @livewireStyles
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 250,
            })

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })

    </script>
@stop
