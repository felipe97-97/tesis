<?php

namespace App\Http\Controllers;

use App\Models\FotografiasClinica;
use App\Models\Paciente;
use Illuminate\Http\Request;

class FotografiasClinicaController extends Controller
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

        $validated = request()->validate([
            'titulo' => 'required|min:3',
            'fecha' => 'required|date',
            'id_ficha' => 'required|integer'
        ]);
     

        $fotoClinica = new FotografiasClinica();
        $fotoClinica->titulo = $validated['titulo'];
        $fotoClinica->fecha = $validated['fecha'];
        $fotoClinica->archivo = $name;
        $fotoClinica->id_ficha = $validated['id_ficha'];
        $fotoClinica->save();

        return redirect()->route('fichas.detail',request('id_paciente'))->with('success', 'Fotografía Clínica agregada correctamente');
    }

    public function descargarArchivo($file)
    {
        $pathtoFile= public_path(). "/documentos/fotos_clinicas/$file";

        return response()->download($pathtoFile);
    }

}
