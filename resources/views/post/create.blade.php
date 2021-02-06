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
                    <form method="post" action="{{ url('posts') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul Postingan</label>
                            <input type="text" name="judul" class="form-control" />
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tag</label>
                                    <input type="text" name="tag" class="form-control" />
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Foto Thumbnail</label>
                                    <input type="text" name="foto" class="form-control" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Singkat</label>
                            <input type="text" name="des_singkat" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label><strong>Isi Postingan :</strong></label>
                            <textarea class="summernote" name="isi_post" id="summernote"></textarea>
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
