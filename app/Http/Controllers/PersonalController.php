<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
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

    
    public function new()
    {
        return view('personal/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personal = new Personal();
        $personal->nombre = $request->input('nombres');
        $personal->apellido = $request->input('apellidos');
        $personal->rut = $request->input('rut');
        $personal->telefono = $request->input('telefono');
        $personal->correo = $request->input('correo');
        $personal->sexo = $request->input('sexo');
        $personal->direccion = $request->input('direccion');
        $personal->cargo = $request->input('cargo');
        $personal->save();

        $personal_nuevo = Personal::where('rut',$request->input('rut'))->first();

        $contrasena = str_replace('.','',$personal_nuevo->rut);

        $usuario = new User();
        $usuario->name = $personal_nuevo->nombre.' '.$personal_nuevo->apellido;
        $usuario->email = $personal_nuevo->correo;
        $usuario->password = Hash::make(str_replace('-','',$contrasena));
        $usuario->id_personal = $personal_nuevo->id;
        $usuario->save();

        return redirect('/personal/new')->with('success', 'Trabajador agregado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
