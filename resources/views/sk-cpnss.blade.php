@extends('adminlte::page')

@section('title', 'SK CPNS')

@section('content_header')
    <h1>Daftar SK CPNS</h1>
@stop

@section('content')
    @livewire('sk-cpns')
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
        window.livewire.on('skcpnsStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('skcpnsUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
