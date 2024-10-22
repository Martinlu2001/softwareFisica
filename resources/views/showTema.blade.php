@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'y')
@section('content_header_title', 'y')


{{-- Content body: main page content --}}

@section('content_body')

    {{ Breadcrumbs::render('showTema',$showTemas) }}

    {{ $showTemas->id }}
    {{ $showTemas->name }}

    @if($showTemas)
        @foreach($showTemas as $item)
        <a href="{{ route('temas.index2', [$showTemas->name, $showTemas->email]) }}">{{ $showTemas->email }}</a>
        @endforeach
    @endif
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush