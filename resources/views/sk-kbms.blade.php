@extends('adminlte::page')

@section('title', 'SK KBM / TU')

@section('content_header')
    <h1>Daftar Surat Masuk</h1>
@stop

@section('content')
    @livewire('sk-kbm')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('skkbmStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('skkbmUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
