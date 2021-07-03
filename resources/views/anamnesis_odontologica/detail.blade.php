@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')
<div class="container-fluid">
    @include('alerts.success')

    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$anamnesisOdontologica->ficha->paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Anamnesis Odontológica</h1>
                <p class="mb-3">{{'Paciente: '.$anamnesisOdontologica->ficha->paciente->nombre.' '.$anamnesisOdontologica->ficha->paciente->apellido}}</p>
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
                        <a class="btn btn-warning btn-icon-split btn-sm" data-target="#edit_modal-{{$anamnesisOdontologica->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Editar</span>
                        </a>
                        @include('anamnesis_odontologica.edit_modal')
                        <a class="btn btn-danger btn-icon-split btn-sm" data-target="#delete_modal-{{$anamnesisOdontologica->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Eliminar</span>
                        </a>
                        @include('anamnesis_odontologica.delete_modal')
                    </div>
                </div>
                <div class="card-body" style="padding: 5vh 5vw">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Última Consulta</h6>
                                <h6 style="margin-left: 20px">{{$anamnesisOdontologica->ultima_consulta}}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row"> 
                                <h6 class="m-0 font-weight-bold text-primary" >Fecha</h6>
                                <h6 style="margin-left: 20px">{{$anamnesisOdontologica->created_at}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Tratamientos Realizados</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->tratamientos_realizados}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px"> 
                        <h6 class="m-0 font-weight-bold text-primary" >Reacciones Adversas</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->reacciones_adversas}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Hábitos Higiene</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->habitos_higiene}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Hábitos Parafuncionales</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->habitos_parafuncionales}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Examen Tejidos Blandos</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->examen_tejidos_blandos}}</h6>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <h6 class="m-0 font-weight-bold text-primary" >Observaciones</h6>
                        <h6 style="margin-left: 20px">{{$anamnesisOdontologica->observaciones}}</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection