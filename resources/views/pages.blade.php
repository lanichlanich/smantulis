@extends('adminlte::page')

@section('title', 'Halaman')

@section('content_header')
    <h1>Daftar Halaman</h1>
@stop

@section('content')
    @livewire('page')
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/adminlte.min.css">
    <!-- include libraries(jQuery, bootstrap) -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <!-- include summernote css/js -->
    @livewireStyles
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../vendor/adminlte/dist/js/adminlte.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>

    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('pageStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('pageUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
