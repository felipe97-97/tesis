@extends('layouts.index')

@section('title', 'Inventario')  

@section('content')
<div class="container-fluid">

    @include('alerts.success')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Inventario</h1>

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Implementos Registrados</h6>
                    
                    <a class="btn btn-success btn-circle btn-lg" style="float: right" data-target="#create_modal" data-toggle="modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <div class="card-body">
                    <input class="form-control form-control-user" type="text" placeholder="Buscar ..." style="float: right; margin-bottom: 15px">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Código</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col" style="width: 1%; white-space: nowrap;">Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($inventarios as $inventario)
                          @include('inventario.edit_modal')
                          @include('inventario.stock_modal')
                          @include('inventario.create_modal')
                            <tr>
                                <th scope="row">{{$inventario->id}}</th>
                                <td>{{$inventario->item}}</td>
                                <td>{{$inventario->marca}}</td>
                                <td>{{$inventario->codigo ? $inventario->codigo : 'NN'}}</td>
                                <td><a href="{{url('proveedor/'.$inventario->proveedor->id)}}">{{$inventario->proveedor->nombre}}</a></td>
                                <td>{{$inventario->cantidad}}</td>
                                <td style="width: 1%; white-space: nowrap;">
                                    <a data-target="#stock_modal-{{$inventario->id}}" data-toggle="modal" class="btn btn-primary btn-circle">
                                        <i class="fas fa-dolly-flatbed"></i>
                                    </a>
                                    <a data-target="#edit_modal-{{$inventario->id}}" data-toggle="modal" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div style="float: right; margin: 10px">
                        {{$inventarios->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>




@endsection

