@extends('layouts.index')

@section('title', 'Mis Asignaturas') 


@section('content')
<div class="container-fluid">
    @include('alerts.success')

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
                <h1 class="h1 mb-1 text-white-800">Agenda</h1>
                <p class="mb-3">Administre el calendario de consultas de la clínica</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 22rem;" src="{{asset('img/calendar.svg')}}" alt="...">
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="card bg-danger text-white shadow md-5">
            <div class="card-body">
                <span>Ups! al parecer ha ocurrido un error, revise la pantalla de Agendar Horas, para más detalles</span>
            </div>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agenda Clínica</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11" style="height: 120vh">
                            <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="100%"
                                frameborder="0" scrolling="no"
                                src="http://localhost:8080/">
                            </iframe>
                        </div>
                        <div class="col-md-1" style="display: flex; flex-direction: column; align-items: center">
                            <a class="btn btn-success btn-circle btn-lg" style="margin-top: 160px" data-target="#create_modal" data-toggle="modal">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-circle" style="margin-top: 20px" data-target="#detail_modal" data-toggle="modal">
                                <i class="fas fa-list"></i>
                            </a>
                        </div>
                    </div>
                    
                    @include('agenda.create_modal')
                    @include('agenda.detail_modal')
                </div>
            </div>

        </div>

    </div>

</div>


@endsection
