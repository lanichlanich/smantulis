@extends('adminlte::page')

@section('title', 'Surat Masuk')

@section('content_header')
    <h1>Daftar Surat Masuk</h1>
@stop

@section('content')
    @livewire('surat-in')
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
        window.livewire.on('suratinStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('suratinUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
