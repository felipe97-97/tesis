<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Paciente;
use App\Models\Odontograma;
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

        $piezas = [
            '1-8','1-7','1-6','1-5','1-4','1-3','1-2','1-1',
            '2-1','2-2','2-3','2-4','2-5','2-6','2-7','2-8',
            '4-8','4-7','4-6','4-5','4-4','4-3','4-2','4-1',
            '3-1','3-2','3-3','3-4','3-5','3-6','3-7','3-8',
            '5-5','5-4','5-3','5-2','5-1',
            '6-1','6-2','6-3','6-4','6-5',
            '8-5','8-4','8-3','8-2','8-1',
            '7-1','7-2','7-3','7-4','7-5',
        ];

        for ($i=0; $i < 52; $i++) {
            $odontograma = new Odontograma();
            $odontograma->numero = $i + 1;
            $odontograma->pieza = $piezas[$i];
            $odontograma->id_ficha = $id_paciente->ficha->id;
            $odontograma->save();
        }

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
