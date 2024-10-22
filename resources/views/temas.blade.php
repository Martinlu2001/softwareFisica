@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Temas')
@section('content_header_title', 'Tema')
{{--@section('content_header_subtitle', 'aa')--}}

{{-- Content body: main page content --}}

@section('content_body')
{{-- resources/views/home.blade.php --}}
    {{ Breadcrumbs::render('temas') }}
    
    @if($temas)
        @foreach($temas as $item)
            <a href="{{route('temas.index1', $item->name)}}">{{$item->name}}</a>
            <!-- <td></td> -->
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