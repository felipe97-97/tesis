@extends('layouts.index')

@section('title', 'Inventario')  

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

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Inventario</h1>

    <div class="row">

        <div class="col-lg-12">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Implementos Registrados</h6>
                    
                    @if(auth()->user()->personal->cargo == "Administrador" or auth()->user()->personal->cargo == "Administrativo")
                    <a class="btn btn-success btn-circle btn-lg" style="float: right" data-target="#create_modal" data-toggle="modal">
                        <i class="fas fa-plus"></i>
                    </a>
                    @endif
                </div>
                <div class="card-body">
                    <input class="form-control form-control-user" type="text" placeholder="Buscar ..." style="float: right; margin-bottom: 15px" id="myInput" onkeyup="myFunction()">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
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
                          @include('proveedores.detail_modal')
                            <tr>
                                <th scope="row">{{$inventario->id}}</th>
                                <td>{{$inventario->item}}</td>
                                <td>{{$inventario->marca}}</td>
                                <td>{{$inventario->codigo ? $inventario->codigo : 'NN'}}</td>
                                <td><a data-target="#detail_modal-{{$inventario->proveedor->id}}" data-toggle="modal" style="color: blue; cursor: pointer; text-decoration: underline;">{{$inventario->proveedor->nombre}}</a></td>
                                <td><strong>{{$inventario->cantidad}}</strong></td>
                                <td style="width: 1%; white-space: nowrap;">
                                    <a data-target="#stock_modal-{{$inventario->id}}" data-toggle="modal" class="btn btn-primary btn-circle">
                                        <i class="fas fa-dolly-flatbed"></i>
                                    </a>
                                    
                                    @if(auth()->user()->personal->cargo == "Administrador" or auth()->user()->personal->cargo == "Administrativo")
                                    <a data-target="#edit_modal-{{$inventario->id}}" data-toggle="modal" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endif
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


<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

@endsection

