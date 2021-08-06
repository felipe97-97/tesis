@extends('layouts.index')

@section('title', 'Proveedores')  

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
                <h1 class="h1 mb-1 text-white-800">Listado De Proveedores</h1>
                <p class="mb-3">Todos los proveedores registrados en el sistema.</p>
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
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Proveedores</h6>

                    <a class="btn btn-success btn-circle btn-lg" style="float: right" data-target="#create_modal" data-toggle="modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($proveedores as $proveedor)
                            <div class="col-md-4">
                                <div class="card bg-primary text-white shadow" style="margin-bottom: 20px">
                                    <div class="card-body" style="cursor: default">
                                        <div class="card-flex-tesis">
                                            <div>
                                                {{$proveedor->nombre}}
                                                <div class="text-white-50 small">{{$proveedor->rut}}</div>
                                                <div class="text-white-50 small">Implementos administrados: {{$proveedor->implementos->count()}}</div>
                                            </div>
                                            <a style="color: white; cursor: pointer" data-target="#edit_modal-{{$proveedor->id}}" data-toggle="modal">
                                                <span class="icon text-white-100">
                                                    <i class="fas fa-edit" style="margin-left: 5px"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('proveedores.edit_modal')
                        @endforeach
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div style="float: right; margin: 10px">
                        {{$proveedores->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>




@endsection