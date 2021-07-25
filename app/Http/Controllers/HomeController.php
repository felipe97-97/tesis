<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Paciente;
use App\Models\Personal;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $agenda = Agenda::where('day',date('Y-m-d'))->get();
        $pacientes = Paciente::all();
        $personal = Personal::all();
        return view('home/index', compact('agenda','pacientes','personal'));
    }
}
