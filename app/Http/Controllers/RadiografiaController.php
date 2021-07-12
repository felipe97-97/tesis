<?php

namespace App\Http\Controllers;

use App\Models\Radiografia;
use App\Models\Paciente;
use Illuminate\Http\Request;

class RadiografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function new($id)
    {
        $paciente = Paciente::find($id);
        return view('radiografia/create', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
   
        $documentos = $request->file('documentos');
        $name = time().$documentos->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $documentos->move(public_path().'/documentos/radiografias', $name); 
     

        $radiografia = new Radiografia();
        $radiografia->titulo = $request->input('titulo');
        $radiografia->fecha = $request->input('fecha');
        $radiografia->archivo = $name;
        $radiografia->id_ficha = $request->input('id');
        $radiografia->save();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Radiografía agregada correctamente');
    }


    public function descargarArchivo($file)
    {
        $pathtoFile= public_path(). "/documentos/radiografias/$file";

        return response()->download($pathtoFile);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Radiografia  $radiografia
     * @return \Illuminate\Http\Response
     */
    public function show(Radiografia $radiografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Radiografia  $radiografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Radiografia $radiografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Radiografia  $radiografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radiografia $radiografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Radiografia  $radiografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radiografia $radiografia)
    {
        //
    }
}
