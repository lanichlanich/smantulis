@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>User List</h1>
@stop

@section('content')
    @livewire('users')
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
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.livewire.on('userUpdate', () => {
            $('#updateModal').modal('hide');
        });

    </script>
@stop
