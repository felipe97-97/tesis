<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionClinica;
use App\Models\Paciente;
use Illuminate\Http\Request;

class EvaluacionClinicaController extends Controller
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
        return redirect('/fichas/detail/'.$evaluacionClinica->ficha->paciente->id)->with('success', 'Evaluación Clínica eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $evaluacion = new EvaluacionClinica();
        $evaluacion->fecha = $request->input('fecha');
        $evaluacion->actividad = $request->input('actividades');
        $evaluacion->id_ficha = $request->input('id');
        $evaluacion->save();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Anamnesis agregada correctamente');
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
        $evaluacionClinica = EvaluacionClinica::find($request->input('id_evaluacionClinica'));
        $evaluacionClinica->fecha = $request->input('fecha');
        $evaluacionClinica->actividad = $request->input('actividades');
        $evaluacionClinica->update();

        return redirect('/evaluacion_clinica/detail/' . $request->input('id_evaluacionClinica'))->with('success', 'Evaluación Clínica modificada correctamente');
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
