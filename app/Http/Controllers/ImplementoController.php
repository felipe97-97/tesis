<?php

namespace App\Http\Controllers;

use App\Models\Implemento;
use Illuminate\Http\Request;

class ImplementoController extends Controller
{
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

    public function stock(Request $request)
    {
        $inventario = Implemento::find($request->input('id_inventario'));
        $inventario->cantidad = $request->input('cantidad');
        $inventario->update();

        return redirect('/inventario')->with('success', 'Stock actualizado correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $inventario = new Implemento();
        $inventario->item = $request->input('item');
        $inventario->marca = $request->input('marca');
        $inventario->codigo = $request->input('codigo');
        $inventario->cantidad = $request->input('cantidad');
        $inventario->id_proveedor = $request->input('id_proveedor');
        $inventario->save();

        return redirect('/inventario')->with('success', 'Ítem agregado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Implemento  $implemento
     * @return \Illuminate\Http\Response
     */
    public function show(Implemento $implemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Implemento  $implemento
     * @return \Illuminate\Http\Response
     */
    public function edit(Implemento $implemento)
    {
        //
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
        $inventario = Implemento::find($request->input('id_inventario'));
        $inventario->item = $request->input('item');
        $inventario->marca = $request->input('marca');
        $inventario->codigo = $request->input('codigo');
        $inventario->id_proveedor = $request->input('id_proveedor');
        $inventario->update();

        return redirect('/inventario')->with('success', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Implemento  $implemento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Implemento $implemento)
    {
        //
    }
}
