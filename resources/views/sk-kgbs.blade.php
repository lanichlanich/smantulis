@extends('adminlte::page')

@section('title', 'SK KGB')

@section('content_header')
    <h1>Daftar SK KGB</h1>
@stop

@section('content')
    @livewire('sk-kgb')
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
        window.livewire.on('skkgbStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('skkgbUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
