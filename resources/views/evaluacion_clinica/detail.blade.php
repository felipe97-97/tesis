@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')
<div class="container-fluid">
    @include('alerts.success')

    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$evaluacionClinica->ficha->paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Evaluación Clínica</h1>
                <p class="mb-3">{{'Paciente: '.$evaluacionClinica->ficha->paciente->nombre.' '.$evaluacionClinica->ficha->paciente->apellido}}</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;" src="{{asset('img/detail.svg')}}" alt="...">
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="card bg-danger text-white shadow mb-2">
            <div class="card-body">
                <span>Ups! al parecer ha ocurrido un error, revise la pantalla de Editar Evaluación Clínica, para más detalles</span>
            </div>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Detalles</h6>
                    
                    @if(auth()->user()->personal->cargo == "Odontólogo" or auth()->user()->personal->cargo == "Asistente Dental")
                    <div class="card-footer-tesis">
                        <a class="btn btn-warning btn-icon-split btn-sm" data-target="#edit_modal-{{$evaluacionClinica->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Editar</span>
                        </a>
                        @include('evaluacion_clinica.edit_modal')
                        <a class="btn btn-danger btn-icon-split btn-sm" data-target="#delete_modal-{{$evaluacionClinica->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Eliminar</span>
                        </a>
                        @include('evaluacion_clinica.delete_modal')
                    </div>
                    @endif
                </div>
                <div class="card-body" style="padding: 5vh 5vw">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Actividades</h6>
                                <h6 style="margin-left: 20px">{{$evaluacionClinica->actividad}}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Fecha</h6>
                                <h6 style="margin-left: 20px">{{$evaluacionClinica->fecha}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection