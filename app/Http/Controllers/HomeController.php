<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function editPassword($id) {
        if(request('pass1') == request('pass2')) {
            $user = User::find($id);
            $user->password = Hash::make(request('pass1'));
            $user->update();

            return back()->with('success','Contraseña modificada correctamente');
        } else {
            return back()->with('success','La contraseña nueva no coincide');
        }
    }
}
