<?php

namespace App\Http\Controllers;

use App\Models\Implemento;
use Illuminate\Http\Request;

class ImplementoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Implemento::cursorPaginate(25);
        return view('inventario/index', compact('inventarios'));
    }

    public function stock()
    {
        $validated = request()->validate([
            'cantidad' => 'required|integer'
        ]);

        $inventario = Implemento::find(request('id_inventario'));
        $inventario->cantidad = $validated['cantidad'];
        $inventario->update();

        return redirect()->route('inventario.index')->with('success', 'Stock actualizado correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validated = request()->validate([
            'item' => 'required|min:2',
            'marca' => 'required|min:2',
            'codigo' => 'nullable',
            'cantidad' => 'required|integer',
            'id_proveedor' => 'required|integer'
        ]);

        Implemento::create($validated);

        return redirect()->route('inventario.index')->with('success', 'Ítem agregado correctamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Implemento  $implemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Implemento $implemento)
    {
        $validated = request()->validate([
            'item' => 'required|min:2',
            'marca' => 'required|min:2',
            'codigo' => 'nullable',
            'id_proveedor' => 'required|integer'
        ]);

        $inventario = Implemento::find(request('id_inventario'));
        $inventario->item = $validated['item'];
        $inventario->marca = $validated['marca'];
        $inventario->codigo = $validated['codigo'];
        $inventario->id_proveedor = $validated['id_proveedor'];
        $inventario->update();

        return redirect()->route('inventario.index')->with('success', 'Datos actualizados correctamente');
    }

}
