@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')
<div class="container-fluid">
    @include('alerts.success')

    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$anamnesis->ficha->paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Anamnesis</h1>
                <p class="mb-3">{{'Paciente: '.$anamnesis->ficha->paciente->nombre.' '.$anamnesis->ficha->paciente->apellido}}</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;" src="{{asset('img/detail.svg')}}" alt="...">
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Detalles</h6>
                    <div class="card-footer-tesis">
                        <a class="btn btn-warning btn-icon-split btn-sm" data-target="#edit_modal-{{$anamnesis->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Editar</span>
                        </a>
                        @include('anamnesis.edit_modal')
                        <a class="btn btn-danger btn-icon-split btn-sm" data-target="#delete_modal-{{$anamnesis->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Eliminar</span>
                        </a>
                        @include('anamnesis.delete_modal')
                    </div>
                </div>
                <div class="card-body" style="padding: 5vh 5vw">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Motivo Consulta</h6>
                                <h6 style="margin-left: 20px">{{$anamnesis->motivo_consulta}}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Fecha</h6>
                                <h6 style="margin-left: 20px">{{$anamnesis->created_at}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Antecedentes Médicos</h6>
                        <h6 style="margin-left: 20px">{{$anamnesis->antecedentes_medicos}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Medicamentos</h6>
                        <h6 style="margin-left: 20px">{{$anamnesis->medicamentos}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Alergias</h6>
                        <h6 style="margin-left: 20px">{{$anamnesis->alergias}}</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection