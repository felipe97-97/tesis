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

    public function index()
    {
        $colaboradores = Personal::orderBy('cargo')->cursorPaginate(9);
        return view('personal/index', compact('colaboradores'));
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
        $validated = request()->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'rut' => 'required|min:8',
            'sexo' => 'required',
            'cargo' => 'required|min:3',
            'correo' => 'required|email',
            'telefono' => 'required|min:8',
            'direccion' => 'required|min:3',
        ]);

        Personal::create($validated);

        $personal_nuevo = Personal::where('rut',$request->input('rut'))->first();

        $contrasena = str_replace('.','',$personal_nuevo->rut);

        $usuario = new User();
        $usuario->name = $personal_nuevo->nombre.' '.$personal_nuevo->apellido;
        $usuario->email = $personal_nuevo->correo;
        $usuario->password = Hash::make(str_replace('-','',$contrasena));
        $usuario->id_personal = $personal_nuevo->id;
        $usuario->save();

        return redirect()->route('personal.index')->with('success', 'Colaborador agregado correctamente');
    }

    public function update() 
    {
        $validated = request()->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'rut' => 'required|min:8',
            'sexo' => 'required',
            'cargo' => 'required|min:3',
            'correo' => 'required|email',
            'telefono' => 'required|min:8',
            'direccion' => 'required|min:3',
        ]);

        $colaborador = Personal::find(request('id_colaborador'));
        $colaborador->nombre = $validated['nombre'];
        $colaborador->apellido = $validated['apellido'];
        $colaborador->rut = $validated['rut'];
        $colaborador->sexo = $validated['sexo'];
        $colaborador->cargo = $validated['cargo'];
        $colaborador->correo = $validated['correo'];
        $colaborador->telefono = $validated['telefono'];
        $colaborador->direccion = $validated['direccion'];
        $colaborador->update();

        return redirect()->route('personal.detail',request('id_colaborador'))->with('success', 'Ficha Colaborador modificada correctamente');
    }

    public function detail($id)
    {
        $colaborador = Personal::find($id);

        return view('personal/detail', compact('colaborador'));
    }

}
