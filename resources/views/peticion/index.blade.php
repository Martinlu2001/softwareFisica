@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
<h1> </h1>

@stop

@section('content')
   
<div class="card">


<div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                              <h1>Lista de Peticiones</h1>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('peticions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Peticion') }}
                                </a>
        </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif




    <div class="card-body">
    <x-adminlte-datatable id="table2" :heads="$heads" striped head-theme="dark" >
    @foreach ($peticions as $peticion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $peticion->name }}</td>
									<!-- <td >{{ $peticion->descripcion }}</td> -->
										<td >{{ $peticion->item }}</td>
										<td >{{ $peticion->cantidad }}</td>
									<!--	<td >{{ $peticion->aprobado }}</td> -->
										<td >{{ $peticion->time }}</td>
										<td >{{ $peticion->date }}</td>

                                            <td>
                                                <form action="{{ route('peticions.destroy', $peticion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('peticions.show', $peticion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('peticions.edit', $peticion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

</x-adminlte-datatable>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
























