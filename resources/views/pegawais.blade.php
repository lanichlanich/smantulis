@extends('adminlte::page')

@section('title', 'PTK')

@section('content_header')
    <h1>Daftar PTK</h1>
@stop

@section('content')
    @livewire('pegawai')
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
        window.livewire.on('pegawaiStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('pegawaiUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
