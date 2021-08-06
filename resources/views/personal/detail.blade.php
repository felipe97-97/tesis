@extends('layouts.index')

@section('title', 'Ficha Colaborador '.$colaborador->nombre.' '.$colaborador->apellido)  

@section('content')

<div class="container-fluid">
    

    @include('alerts.success')
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/personal')}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">{{$colaborador->nombre.' '.$colaborador->apellido}}</h1>
                <p class="mb-3">{{$colaborador->cargo}}</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 18rem;" src="{{ $colaborador->sexo == 'Hombre' ? asset('img/man.svg') : asset('img/female.svg')}}" alt="...">
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="card bg-danger text-white shadow mb-2">
            <div class="card-body">
                <span>Ups! al parecer ha ocurrido un error, revise la pantalla de Editar Ficha Colaborador, para más detalles</span>
            </div>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12">
            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Ficha del Colaborador</h6>
                    <div class="card-footer-tesis">
                        <a class="btn btn-warning btn-icon-split btn-sm" data-target="#edit_modal-{{$colaborador->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Editar</span>
                        </a>
                    </div>
                </div>
                @include('personal.edit_modal')
                <div class="card-body" style="padding: 5vh">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Rut</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->rut}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Sexo</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->sexo}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Creación Ficha</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->created_at}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Teléfono</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->telefono}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Cargo</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->cargo}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Correo</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->correo}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-6">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Dirección</h6>
                                <h6 style="margin-left: 20px">{{$colaborador->direccion}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</div>




@endsection