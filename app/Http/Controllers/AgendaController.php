<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calendar_all()
    {
        $agendas = Agenda::with(['paciente','personal'])->get();

        return response()->json([
            'response' => $agendas,
        ], 200);
    }

    public function index()
    {   
        return view('agenda.index');
    }

    public function delete($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect('/agenda')->with('success', 'Fecha eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $agenda = new Agenda();
        $agenda->title = $request->input('tipo');
        $agenda->day = $request->input('dia');
        $agenda->start_date = $request->input('inicio');
        $agenda->end_date = $request->input('fin');
        $agenda->id_paciente = $request->input('id_paciente');
        $agenda->id_personal = $request->input('id_personal');
        $agenda->save();

        return redirect('agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
