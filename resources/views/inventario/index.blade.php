@extends('layouts.index')

@section('title', 'Inventario')  

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Inventario</h1>

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Implementos Registrados</h6>
                </div>
                <div class="card-body">
                    <input class="form-control form-control-user" type="text" placeholder="Buscar ..." style="float: right; margin-bottom: 15px">
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
                            <tr>
                                <th scope="row">{{$inventario->id}}</th>
                                <td>{{$inventario->item}}</td>
                                <td>{{$inventario->marca}}</td>
                                <td>{{$inventario->codigo ? $inventario->codigo : 'NN'}}</td>
                                <td>{{$inventario->proveedor->nombre}}</td>
                                <td>{{$inventario->cantidad}}</td>
                                <td style="width: 1%; white-space: nowrap;">
                                    <a href="#" class="btn btn-warning btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
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

