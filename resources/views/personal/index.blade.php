@extends('layouts.index')

@section('title', 'Colaboradores')  

@section('content')
<div class="container-fluid">

    @include('alerts.success')

    @if (count($errors) > 0)
        <div class="card bg-danger text-white shadow mb-2">
            <div class="card-body">
                <span>Ups! al parecer ha ocurrido un error, revise la pantalla para más detalles</span>
            </div>
        </div>
    @endif

     <!-- GRADIENTE DIV HEADER -->
     <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="52" height="52" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <g fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8v13H3V8"/><path d="M1 3h22v5H1z"/><path d="M10 12h4"/></g>
                </svg>
            </div>
            <div>
                <h1 class="h1 mb-1 text-white-800">Listado De Colaboradores</h1>
                <p class="mb-3">Todos los colaboradores registrados en el sistema.</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem;" src="{{asset('img/detail.svg')}}" alt="...">
        </div>
    </div>


    <div class="row">
        @include('proveedores.create_modal')

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Colaboradores</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($colaboradores as $colaborador)
                            <div class="col-md-4">
                                <div class="card bg-primary text-white shadow" style="margin-bottom: 20px">
                                    <div class="card-body" style="cursor: default">
                                        <div class="card-flex-tesis">
                                            <div>
                                                {{$colaborador->nombre.' '.$colaborador->apellido}}
                                                <div class="text-white-50 small">{{$colaborador->rut}}</div>
                                                <div class="text-white-50 small">{{$colaborador->cargo}}</div>
                                            </div>
                                            <a href="{{url('personal/detail/'.$colaborador->id)}}" style="color: white; margin-top: 15px">
                                                <span class="icon text-white-100">
                                                    <p>Ver Detalles<i class="fas fa-arrow-right" style="margin-left: 5px"></i></p>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div style="float: right; margin: 10px">
                        {{$colaboradores->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>




@endsection