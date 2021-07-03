<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Paciente;
use DB;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fichas/index');
    }

    public function new()
    {
        return view('fichas/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->input('nombres');
        $paciente->apellido = $request->input('apellidos');
        $paciente->rut = $request->input('rut');
        $paciente->sexo = $request->input('sexo');
        $paciente->fecha_nacimiento = $request->input('nacimiento');
        $paciente->ocupacion = $request->input('ocupacion');
        $paciente->correo = $request->input('correo');
        $paciente->telefono = $request->input('telefono');
        $paciente->direccion = $request->input('direccion');
        $paciente->tutor = $request->input('tutor');
        $paciente->contacto_emergencia = $request->input('emergencia');
        $paciente->save();

        $id_paciente = Paciente::where('rut',$request->input('rut'))->first();

        $ficha = new Ficha();
        $ficha->id_paciente = $id_paciente->id;
        $ficha->save();

        return redirect('/fichas/detail/'.$id_paciente->id)->with('success', 'Ficha creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        $paciente = Paciente::find($request->input('id_paciente'));
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->rut = $request->input('rut');
        $paciente->sexo = $request->input('sexo');
        $paciente->fecha_nacimiento = $request->input('nacimiento');
        $paciente->ocupacion = $request->input('ocupacion');
        $paciente->correo = $request->input('correo');
        $paciente->telefono = $request->input('telefono');
        $paciente->direccion = $request->input('direccion');
        $paciente->tutor = $request->input('tutor');
        $paciente->contacto_emergencia = $request->input('emergencia');
        $paciente->update();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Ficha actualizada correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        //
    }


    public function detail($id)
    {
        $paciente = Paciente::find($id);

        return view('fichas/detail', compact('paciente'));
    }
}
