<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\AnamnesisOdontologica;
use Illuminate\Http\Request;

class AnamnesisOdontologicaController extends Controller
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
        return view('anamnesis_odontologica/create', compact('paciente'));
    }

    public function detail($id)
    {
        $anamnesisOdontologica = AnamnesisOdontologica::find($id);
        return view('anamnesis_odontologica/detail', compact('anamnesisOdontologica'));
    }

    public function delete($id)
    {
        $anamnesisOdontologica = AnamnesisOdontologica::find($id);
        $anamnesisOdontologica->delete();
        return redirect('/fichas/detail/'.$anamnesisOdontologica->ficha->paciente->id)->with('success', 'Anamnesis Odontológica eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anamnesisOdontologica = new AnamnesisOdontologica();
        $anamnesisOdontologica->ultima_consulta = $request->input('ultima_consulta');
        $anamnesisOdontologica->tratamientos_realizados = $request->input('tratamientos_realizados');
        $anamnesisOdontologica->reacciones_adversas = $request->input('reacciones_adversas');
        $anamnesisOdontologica->habitos_higiene = $request->input('habitos_higiene');
        $anamnesisOdontologica->habitos_parafuncionales = $request->input('habitos_parafuncionales');
        $anamnesisOdontologica->examen_tejidos_blandos = $request->input('tejidos_blandos');
        $anamnesisOdontologica->observaciones = $request->input('observaciones');
        $anamnesisOdontologica->id_ficha = $request->input('id');
        $anamnesisOdontologica->save();

        return redirect('/fichas/detail/'.$request->input('id_paciente'))->with('success', 'Anamnesis Odontológica agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnamnesisOdontologica  $anamnesisOdontologica
     * @return \Illuminate\Http\Response
     */
    public function show(AnamnesisOdontologica $anamnesisOdontologica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnamnesisOdontologica  $anamnesisOdontologica
     * @return \Illuminate\Http\Response
     */
    public function edit(AnamnesisOdontologica $anamnesisOdontologica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnamnesisOdontologica  $anamnesisOdontologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnamnesisOdontologica $anamnesisOdontologica)
    {
        $anamnesisOdontologica = AnamnesisOdontologica::find($request->input('id_anamnesisOdontologica'));
        $anamnesisOdontologica->ultima_consulta = $request->input('ultima_consulta');
        $anamnesisOdontologica->tratamientos_realizados = $request->input('tratamientos_realizados');
        $anamnesisOdontologica->reacciones_adversas = $request->input('reacciones_adversas');
        $anamnesisOdontologica->habitos_higiene = $request->input('habitos_higiene');
        $anamnesisOdontologica->habitos_parafuncionales = $request->input('habitos_parafuncionales');
        $anamnesisOdontologica->examen_tejidos_blandos = $request->input('tejidos_blandos');
        $anamnesisOdontologica->observaciones = $request->input('observaciones');
        $anamnesisOdontologica->update();

        return redirect('/anamnesis_odontologica/detail/' . $request->input('id_anamnesisOdontologica'))->with('success', 'Anamnesis Odontológica modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnamnesisOdontologica  $anamnesisOdontologica
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnamnesisOdontologica $anamnesisOdontologica)
    {
        //
    }
}
