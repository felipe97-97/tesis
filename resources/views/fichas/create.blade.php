@extends('layouts.index')

@section('title', 'Nueva Ficha')  

@section('content')


<div class="container-fluid">
    
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                </svg>
            </div>
            <div>
                <h1 class="h1 mb-1 text-white-800">Nueva Ficha</h1>
                <p class="mb-3">Rellene el formulario con los datos correspondientes</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;" src="../img/ficha2.svg" alt="...">
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulario Datos Personales</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="create">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Nombres</label>
                                    <input class="form-control" name="nombre" type="text" placeholder="Juan Alberto" value="{{old('nombre')}}">
                                    @error('nombre')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Apellidos</label>
                                    <input class="form-control form-control-user" name="apellido" type="text" placeholder="Suazo P??rez" value="{{old('apellido')}}">
                                    @error('apellido')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Rut</label>
                                    <input class="form-control form-control-user" name="rut" type="text" placeholder="1.234.567-8" value="{{old('rut')}}">
                                    @error('rut')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1">Sexo</label>
                                    <select class="form-control form-control-user" name="sexo" required>
                                        <option value='' defaultValue hidden>Seleccione Sexo</option>
                                        <option>Mujer</option>
                                        <option>Hombre</option>
                                    </select>
                                    @error('sexo')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                                    <input class="form-control form-control-user" name="fecha_nacimiento" type="date" placeholder="Suazo P??rez" value="{{old('fecha_nacimiento')}}">
                                    @error('fecha_nacimiento')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Ocupaci??n</label>
                                    <input class="form-control form-control-user" name="ocupacion" type="text" placeholder="Estudiante, Profesor, etc." value="{{old('ocupacion')}}">
                                    @error('ocupacion')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Correo Electr??nico</label>
                                    <input class="form-control form-control-user" name="correo" type="email" placeholder="correo@correo.cl" value="{{old('correo')}}">
                                    @error('correo')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Tel??fono</label>
                                    <input class="form-control form-control-user" name="telefono" type="text" placeholder="+56912345678" value="{{old('telefono')}}">
                                    @error('telefono')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Contacto de emergencia</label>
                                    <input class="form-control form-control-user" name="contacto_emergencia" type="text" placeholder="+56912345678" value="{{old('contacto_emergencia')}}">
                                    @error('contacto_emergencia')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Direcci??n</label>
                                    <input class="form-control form-control-user" name="direccion" type="text" placeholder="Calle #793, Los ??ngeles" value="{{old('direccion')}}">
                                    @error('direccion')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Tutor</label>
                                    <input class="form-control form-control-user" name="tutor" type="text" placeholder="Juan Suazo" value="{{old('tutor')}}">
                                    @error('tutor')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Parentesco</label>
                                    <input class="form-control form-control-user" id="nombres" type="email" placeholder="correo@correo.cl">
                                </div>
                            </div> --}}
                            
                        </div>
                        <hr>
                        <div class="button-icon-tesis">
                            <button type="submit" class="btn btn-success btn-circle btn-lg">
                                <i class="fas fa-plus"></i>
                            </button>
                            <h5 class="button-icon-tesis-text">Agregar Ficha</h5>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</div>




@endsection