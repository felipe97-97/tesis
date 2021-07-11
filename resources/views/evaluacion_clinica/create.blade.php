@extends('layouts.index')

@section('title', 'Nueva Ficha')  

@section('content')


<div class="container-fluid">
    
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Añadir Evaluación Clínica</h1>
                <p class="mb-3">Paciente: {{$paciente->nombre.' '.$paciente->apellido}}</p>
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
                    <h6 class="m-0 font-weight-bold text-primary">Formulario Anamnesis</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="../create">
                        @csrf
                        <input class="form-control" name="id" type="text" value="{{$paciente->ficha->id}}" hidden>
                        <input class="form-control" name="id_paciente" type="text" value="{{$paciente->id}}" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Fecha</label>
                                    <input class="form-control" name="fecha" type="date" placeholder="Indicar motivo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1">Actividades</label>
                                    <textarea class="fix-tesis-form" name="actividades" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="button-icon-tesis">
                            <button type="submit" class="btn btn-success btn-circle btn-lg">
                                <i class="fas fa-plus"></i>
                            </button>
                            <h5 class="button-icon-tesis-text">Agregar Evaluación Clínica</h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection