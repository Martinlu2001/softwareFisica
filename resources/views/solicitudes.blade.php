@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Solicitud</h1>
@stop

@section('content')
<div class="row">
    <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese el nombre"
        fgroup-class="col-md-6"/>
        
</div>



<div class="row">
    <x-adminlte-input name="correo" label="Correo" placeholder="Ingrese el correo"
        fgroup-class="col-md-6"/>
        
</div>

<div class="row" >



@php
$config = ['format' => 'LT'];
@endphp
<x-adminlte-input-date name="hora" :config="$config" placeholder="Selecciona la hora" label="Hora"  fgroup-class="col-md-6">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-clock"></i>
        </div>
    </x-slot>
</x-adminlte-input-date>

@php
$config = ['format' => 'DD-MM-YYYY'];
@endphp
<x-adminlte-input-date name="fecha" :config="$config" placeholder="Selecciona el dia" label="Fecha"  fgroup-class="col-md-6">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-clock"></i>
        </div>
    </x-slot>
</x-adminlte-input-date>
</div>

<small><i>*En la siguiente seccion elegiras los equipos que se desean solicitar.</i></small>

<br><br>

<x-adminlte-button class="btn-flat" type="submit" label="Siguiente" theme="success" icon="fas fa-long-arrow-alt-right" fgroup-class="col-md-6"/>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop