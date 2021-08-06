<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Odontograma;
use Illuminate\Http\Request;

class OdontogramaController extends Controller
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

    public function detail($id)
    {
        $paciente = Paciente::find($id);
        return view('odontograma/detail', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odontograma  $odontograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odontograma $odontograma)
    {
        $profundidad = '';
        if($request->input('estado') != 'Diente Sano' and $request->input('estado') != 'Provisional' 
        and $request->input('estado') != 'Corona Buena' and $request->input('estado') != 'Corona Desadaptada'
        and $request->input('estado') != 'Póntico') {
            if ($request->input('estado') != 'Perno Malo' or $request->input('estado') != 'Perno Bueno'
             or $request->input('estado') != 'Implante Malo' or $request->input('estado') != 'Implante Bueno'
             or $request->input('estado') != 'Fractura' or $request->input('estado') != 'Diente Ausente'
             or $request->input('estado') != 'Extracción Indicada' or $request->input('estado') != 'Endodoncia Buena'
             or $request->input('estado') != 'Endodoncia Mala') {
                if ($request->input('all') == 'on') {
                    $profundidad = 'a';
                }else{
                    if ($request->input('oclusal') == 'on') {
                        $profundidad = $profundidad.'b';
                    }
                    if ($request->input('vesticular') == 'on') {
                        $profundidad = $profundidad.'c';
                    }
                    if ($request->input('distal') == 'on') {
                        $profundidad = $profundidad.'d';
                    }
                    if ($request->input('palatino') == 'on' or $request->input('lingual') == 'on') {
                        $profundidad = $profundidad.'e';
                    }
                    if ($request->input('mesial') == 'on') {
                        $profundidad = $profundidad.'f';
                    }
                }
            }
        }else{
            $profundidad = 'a';
        }

        $odontograma = Odontograma::find($request->input('id_odontograma'));
        $odontograma->estado = $request->input('estado');
        $odontograma->estado_clase = str_replace(' ','-',strtolower($request->input('estado')));
        $odontograma->profundidad = $profundidad;
        $odontograma->update();

        $paciente = Paciente::find($request->input('id_paciente'));
        return redirect()->route('odontograma.detail',$paciente->id);
        
    }

}
