<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PeticionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $peticions = Peticion::paginate();

        $heads =[
            'ID',
            'Nombre',
          //  'Descripcion',
            'Item',
            'Cantidad',
           // 'Aprobado',
            'Hora',
            'Fecha',
            'Acciones'
           ];

        return view('peticion.index', compact('peticions','heads'))
            ->with('i', ($request->input('page', 1) - 1) * $peticions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $peticion = new Peticion();

        return view('peticion.create', compact('peticion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeticionRequest $request): RedirectResponse
    {
        Peticion::create($request->validated());

        return Redirect::route('peticions.index')
            ->with('success', 'Peticion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $peticion = Peticion::find($id);

        return view('peticion.show', compact('peticion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $peticion = Peticion::find($id);

        return view('peticion.edit', compact('peticion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PeticionRequest $request, Peticion $peticion): RedirectResponse
    {
        $peticion->update($request->validated());

        return Redirect::route('peticions.index')
            ->with('success', 'Peticion updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Peticion::find($id)->delete();

        return Redirect::route('peticions.index')
            ->with('success', 'Peticion deleted successfully');
    }
}
