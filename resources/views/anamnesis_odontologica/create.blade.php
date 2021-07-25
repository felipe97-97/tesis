@extends('layouts.index')

@section('title', 'Añadir Anamnesis Odontológica')  

@section('content')


<div class="container-fluid">
    
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Añadir Anamnesis Odontológica</h1>
                <p class="mb-3">Rellene el formulario con los datos correspondientes</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;" src="{{asset('img/anamnesis.svg')}}" alt="...">
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulario Anamnesis Odontológica</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="../create">
                        @csrf
                        <input class="form-control" name="id_ficha" type="text" value="{{$paciente->ficha->id}}" hidden>
                        <input class="form-control" name="id_paciente" type="text" value="{{$paciente->id}}" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Fecha Última Consulta</label>
                                    <input class="form-control" name="ultima_consulta" type="date" value="{{old('ultima_consulta')}}">
                                    @error('ultima_consulta')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Tratamientos Realizados</label>
                                    <textarea class="fix-tesis-form" name="tratamientos_realizados" rows="3" placeholder="Ingrese tratamientos realizados al paciente...">
                                        {{old('tratamientos_realizados')}}
                                    </textarea>
                                    @error('tratamientos_realizados')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Reacciones Adversas</label>
                                    <textarea class="fix-tesis-form" name="reacciones_adversas" rows="3" placeholder="Ingrese reacciones adversas mostradas por el paciente...">
                                        {{old('reacciones_adversas')}}
                                    </textarea>
                                    @error('reacciones_adversas')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Hábitos de Higiene</label>
                                    <textarea class="fix-tesis-form" name="habitos_higiene" rows="3" placeholder="Ingrese los hábitos de higiene del paciente...">
                                        {{old('habitos_higiene')}}
                                    </textarea>
                                    @error('habitos_higiene')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Hábitos Parafuncionales</label>
                                    <textarea class="fix-tesis-form" name="habitos_parafuncionales" rows="3" placeholder="Ingrese los hábitos parafuncionales del paciente...">
                                        {{old('habitos_parafuncionales')}}
                                    </textarea>
                                    @error('habitos_parafuncionales')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Examen de Tejidos Blandos</label>
                                    <textarea class="fix-tesis-form" name="examen_tejidos_blandos" rows="3" placeholder="Ingrese el examen de tejidos blandos del paciente...">
                                        {{old('examen_tejidos_blandos')}}
                                    </textarea>
                                    @error('examen_tejidos_blandos')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Observaciones</label>
                                    <textarea class="fix-tesis-form" name="observaciones" rows="3" placeholder="Ingrese posibles observaciones...">
                                        {{old('observaciones')}}
                                    </textarea>
                                    @error('observaciones')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="button-icon-tesis">
                            <button type="submit" class="btn btn-success btn-circle btn-lg">
                                <i class="fas fa-plus"></i>
                            </button>
                            <h5 class="button-icon-tesis-text">Agregar Anamnesis Odontológica</h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection