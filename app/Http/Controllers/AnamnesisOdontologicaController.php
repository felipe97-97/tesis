<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\AnamnesisOdontologica;
use Illuminate\Http\Request;

class AnamnesisOdontologicaController extends Controller
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
        return redirect()->route('fichas.detail',$anamnesisOdontologica->ficha->paciente->id)->with('success', 'Anamnesis Odontológica eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validated = request()->validate([
            'ultima_consulta' => 'required|date',
            'tratamientos_realizados' => 'required|min:3',
            'reacciones_adversas' => 'required|min:3',
            'habitos_higiene' => 'required|min:3',
            'habitos_parafuncionales' => 'required|min:3',
            'examen_tejidos_blandos' => 'required|min:3',
            'observaciones' => 'required|min:3',
            'id_ficha' => 'required|integer'
        ]);

        AnamnesisOdontologica::create($validated);

        return redirect()->route('fichas.detail',request('id_paciente'))->with('success', 'Anamnesis Odontológica agregada correctamente');
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
    public function update(AnamnesisOdontologica $anamnesisOdontologica)
    {
        $validated = request()->validate([
            'ultima_consulta' => 'required|date',
            'tratamientos_realizados' => 'required|min:3',
            'reacciones_adversas' => 'required|min:3',
            'habitos_higiene' => 'required|min:3',
            'habitos_parafuncionales' => 'required|min:3',
            'examen_tejidos_blandos' => 'required|min:3',
            'observaciones' => 'required|min:3'
        ]);

        $anamnesisOdontologica = AnamnesisOdontologica::find(request('id_anamnesisOdontologica'));
        $anamnesisOdontologica->ultima_consulta =$validated['ultima_consulta'];
        $anamnesisOdontologica->tratamientos_realizados =$validated['tratamientos_realizados'];
        $anamnesisOdontologica->reacciones_adversas =$validated['reacciones_adversas'];
        $anamnesisOdontologica->habitos_higiene =$validated['habitos_higiene'];
        $anamnesisOdontologica->habitos_parafuncionales =$validated['habitos_parafuncionales'];
        $anamnesisOdontologica->examen_tejidos_blandos =$validated['examen_tejidos_blandos'];
        $anamnesisOdontologica->observaciones =$validated['observaciones'];
        $anamnesisOdontologica->update();

        return redirect()->route('anamnesis_odontologica.detail',request('id_anamnesisOdontologica'))->with('success', 'Anamnesis Odontológica modificada correctamente');
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
