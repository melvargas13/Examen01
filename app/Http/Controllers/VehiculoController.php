<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    $vehiculos = Vehiculo::all();
    return view('vehiculos.index', compact('vehiculos'));
    }
    

    public function create()
    {
    return view('vehiculos.create');
    }
    public function store(Request $request)
    {
    $request->validate([
        'placa' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'color' => 'required',
        'anio' => 'required'
    ]);

    Vehiculo::create($request->all());

    return redirect()->route('vehiculos.index');
    }

    public function edit(Vehiculo $vehiculo)
{
    return view('vehiculos.edit', compact('vehiculo'));
}

public function update(Request $request, Vehiculo $vehiculo)
{
    $vehiculo->update($request->all());

    return redirect()->route('vehiculos.index');
}
    
public function destroy(Vehiculo $vehiculo)
{
    $vehiculo->delete();

    return redirect()->route('vehiculos.index');
}

    

}
