@extends('adminlte::page')

@section('title', 'SK PNS')

@section('content_header')
    <h1>Daftar SK PNS</h1>
@stop

@section('content')
    @livewire('sk-pns')
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
        window.livewire.on('skpnsStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('skpnsUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
