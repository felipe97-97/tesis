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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
