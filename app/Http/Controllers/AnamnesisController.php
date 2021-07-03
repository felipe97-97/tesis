<?php

namespace App\Http\Controllers;

use App\Models\Anamnesis;
use App\Models\Paciente;
use Illuminate\Http\Request;

class AnamnesisController extends Controller
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
        return view('anamnesis/create', compact('paciente'));
    }


    public function detail($id)
    {
        $anamnesis = Anamnesis::find($id);
        return view('anamnesis/detail', compact('anamnesis'));
    }

    public function delete($id)
    {
        $anamnesis = Anamnesis::find($id);
        $anamnesis->delete();
        return redirect('/fichas/detail/'.$anamnesis->ficha->paciente->id)->with('success', 'Anamnesis eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anamnesis = new Anamnesis();
        $anamnesis->motivo_consulta = $request->input('motivo');
        $anamnesis->antecedentes_medicos = $request->input('antecedentes');
        $anamnesis->medicamentos = $request->input('medicamentos');
        $anamnesis->alergias = $request->input('alergias');
        $anamnesis->id_ficha = $request->input('id');
        $anamnesis->save();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Anamnesis agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anamnesis $anamnesis)
    {
        $anamnesis = Anamnesis::find($request->input('id_anamnesis'));
        $anamnesis->motivo_consulta = $request->input('motivo');
        $anamnesis->antecedentes_medicos = $request->input('antecedentes');
        $anamnesis->medicamentos = $request->input('medicamentos');
        $anamnesis->alergias = $request->input('alergias');
        $anamnesis->update();

        return redirect('/anamnesis/detail/' . $request->input('id_anamnesis'))->with('success', 'Anamnesis modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anamnesis $anamnesis)
    {
        //
    }
}
