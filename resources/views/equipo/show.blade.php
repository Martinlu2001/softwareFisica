@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? __('Show') . " " . __('Equipo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Equipo</span>
                        </div>
                        <div class="float-right" >
                            <a class="btn btn-primary btn-sm" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $equipo->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $equipo->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Serie:</strong>
                                    {{ $equipo->serie }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $equipo->cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Stock:</strong>
                                    {{ $equipo->stock }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
