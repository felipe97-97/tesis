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
    public function create()
    {
        $validated = request()->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'rut' => 'required|min:8|unique:pacientes,rut',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required|date',
            'ocupacion' => 'required|min:3',
            'correo' => 'required|email',
            'telefono' => 'required|min:8',
            'direccion' => 'required|min:3',
            'tutor' => 'required|min:5',
            'contacto_emergencia' => 'required|min:3'
        ]);

        Paciente::create($validated);

        $id_paciente = Paciente::where('rut',request('rut'))->first();

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

        return redirect()->route('fichas.detail',$id_paciente->id)->with('success', 'Ficha creada correctamente');
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
    public function update(Ficha $ficha)
    {
        $validated = request()->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'rut' => 'required|min:8',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required|date',
            'ocupacion' => 'required|min:3',
            'correo' => 'required|email',
            'telefono' => 'required|min:8',
            'direccion' => 'required|min:3',
            'tutor' => 'required|min:5',
            'contacto_emergencia' => 'required|min:3'
        ]);

        $paciente = Paciente::find(request('id_paciente'));
        $paciente->nombre = $validated['nombre'];
        $paciente->apellido = $validated['apellido'];
        $paciente->rut = $validated['rut'];
        $paciente->sexo = $validated['sexo'];
        $paciente->fecha_nacimiento = $validated['fecha_nacimiento'];
        $paciente->ocupacion = $validated['ocupacion'];
        $paciente->correo = $validated['correo'];
        $paciente->telefono = $validated['telefono'];
        $paciente->direccion = $validated['direccion'];
        $paciente->tutor = $validated['tutor'];
        $paciente->contacto_emergencia = $validated['contacto_emergencia'];
        $paciente->update();

        return redirect()->route('fichas.detail', request('id_paciente'))->with('success', 'Ficha actualizada correctamente');
        
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
