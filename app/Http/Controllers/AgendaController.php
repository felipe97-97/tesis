<?php

namespace App\Http\Controllers;

use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('calendar_all');
    }


    public function calendar_all()
    {
        $agendas = Agenda::with(['paciente','personal'])->get();

        return response()->json([
            'response' => $agendas,
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        return view('agenda.index');
    }

    public function delete($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect()->route('agenda.index')->with('success', 'Fecha eliminada correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validated = request()->validate([
            'title' => 'required',
            'day' => 'required|date',
            'start_date' => 'required|date_format:H:i',
            'end_date' => 'required|date_format:H:i',
            'id_paciente' => 'required|integer',
            'id_personal' => 'required|integer',
        ]);

        Agenda::create($validated);

        return redirect()->route('agenda.index')->with('success', 'Hora agendada correctamente');
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
    public function update(Agenda $agenda)
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
