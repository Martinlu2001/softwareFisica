@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Peticion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Peticion</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('peticions.update', $peticion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('peticion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
