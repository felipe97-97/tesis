<?php

namespace App\Http\Controllers;

use App\Models\Anamnesis;
use App\Models\Paciente;

class AnamnesisController extends Controller
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
        return redirect()->route('fichas.detail',$anamnesis->ficha->paciente->id)->with('success', 'Anamnesis eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validated = request()->validate([
            'motivo_consulta' => 'required|min:3',
            'antecedentes_medicos' => 'required|min:3',
            'medicamentos' => 'required|min:3',
            'alergias' => 'required|min:3',
            'id_ficha' => 'required|integer'
        ]);

        Anamnesis::create($validated);

        return redirect()->route('fichas.detail',request('id_paciente'))->with('success', 'Anamnesis agregada correctamente');
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
    public function update(Anamnesis $anamnesis)
    {
        $validated = request()->validate([
            'motivo_consulta' => 'required|min:3',
            'antecedentes_medicos' => 'required|min:3',
            'medicamentos' => 'required|min:3',
            'alergias' => 'required|min:3',
            'id_ficha' => 'required|integer'
        ]);

        $anamnesis = Anamnesis::find(request('id_anamnesis'));
        $anamnesis->motivo_consulta = $validated['motivo_consulta'];
        $anamnesis->antecedentes_medicos = $validated['antecedentes_medicos'];
        $anamnesis->medicamentos = $validated['medicamentos'];
        $anamnesis->alergias = $validated['alergias'];
        $anamnesis->update();

        return redirect()->route('anamnesis.detail',request('id_anamnesis'))->with('success', 'Anamnesis modificada correctamente');
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
