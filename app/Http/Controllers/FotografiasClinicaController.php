<?php

namespace App\Http\Controllers;

use App\Models\FotografiasClinica;
use App\Models\Paciente;
use Illuminate\Http\Request;

class FotografiasClinicaController extends Controller
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
        return view('fotos_clinicas/create', compact('paciente'));
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
        $documentos->move(public_path().'/documentos/fotos_clinicas', $name); 
     

        $fotoClinica = new FotografiasClinica();
        $fotoClinica->titulo = $request->input('titulo');
        $fotoClinica->fecha = $request->input('fecha');
        $fotoClinica->archivo = $name;
        $fotoClinica->id_ficha = $request->input('id');
        $fotoClinica->save();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Fotografía Clínica agregada correctamente');
    }

    public function descargarArchivo($file)
    {
        $pathtoFile= public_path(). "/documentos/fotos_clinicas/$file";

        return response()->download($pathtoFile);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FotografiasClinica  $fotografiasClinica
     * @return \Illuminate\Http\Response
     */
    public function show(FotografiasClinica $fotografiasClinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FotografiasClinica  $fotografiasClinica
     * @return \Illuminate\Http\Response
     */
    public function edit(FotografiasClinica $fotografiasClinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FotografiasClinica  $fotografiasClinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotografiasClinica $fotografiasClinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FotografiasClinica  $fotografiasClinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(FotografiasClinica $fotografiasClinica)
    {
        //
    }
}
