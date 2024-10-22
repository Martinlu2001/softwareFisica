@extends('adminlte::page')

@section('title', 'Perfil de usuario')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <p>Welcome to your perfil.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop