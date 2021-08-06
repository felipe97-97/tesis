<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionClinica;
use App\Models\Paciente;
use Illuminate\Http\Request;

class EvaluacionClinicaController extends Controller
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
        //
    }

    public function new($id)
    {
        $paciente = Paciente::find($id);
        return view('evaluacion_clinica/create', compact('paciente'));
    }

    public function detail($id)
    {
        $evaluacionClinica = EvaluacionClinica::find($id);
        return view('evaluacion_clinica/detail', compact('evaluacionClinica'));
    }

    public function delete($id)
    {
        $evaluacionClinica = EvaluacionClinica::find($id);
        $evaluacionClinica->delete();
        return redirect()->route('fichas.detail',$evaluacionClinica->ficha->paciente->id)->with('success', 'Evaluación Clínica eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validated = request()->validate([
            'fecha' => 'required|date',
            'actividad' => 'required|min:3',
            'id_ficha' => 'required|integer'
        ]);

        EvaluacionClinica::create($validated);

        return redirect()->route('fichas.detail',request('id_paciente'))->with('success', 'Evaluación clínica agregada correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EvaluacionClinica  $evaluacionClinica
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionClinica $evaluacionClinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluacionClinica  $evaluacionClinica
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionClinica $evaluacionClinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluacionClinica  $evaluacionClinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionClinica $evaluacionClinica)
    {
        $validated = request()->validate([
            'fecha' => 'required|date',
            'actividad' => 'required|min:3',
        ]);

        $evaluacionClinica = EvaluacionClinica::find(request('id_evaluacionClinica'));
        $evaluacionClinica->fecha = $validated['fecha'];
        $evaluacionClinica->actividad = $validated['actividad'];
        $evaluacionClinica->update();

        return redirect()->route('evaluacion_clinica.detail', request('id_evaluacionClinica'))->with('success', 'Evaluación Clínica modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluacionClinica  $evaluacionClinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionClinica $evaluacionClinica)
    {
        //
    }
}
