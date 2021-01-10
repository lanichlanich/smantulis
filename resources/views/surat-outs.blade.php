@extends('adminlte::page')

@section('title', 'Surat keluar')

@section('content_header')
    <h1>Daftar Surat Keluar</h1>
@stop

@section('content')
    @livewire('surat-out')
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
        window.livewire.on('suratoutStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('suratoutUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
