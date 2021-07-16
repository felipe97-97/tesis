@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')
<div class="container-fluid">

  <div class="row">
      <div class="col-md-8">
          <!-- GRADIENTE DIV HEADER -->
            <div class="custom-div-tesis-gradient-2 shadow mb-4 ">
                <div class="custom-div-tesis-gradient-home shadow mb-4 ">
                    <div>
                        <div>
                            <h1 class="h1 mb-1 custom-gradient-text-tesis">VIVADENT</h1>
                            <p class="mb-1" style="margin-left: 10px">Bienvenido $nombre</p>
                        </div>
                    </div>
                    <div class="custom-div-tesis-gradient-image">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/home.svg')}}" alt="...">
                    </div>
                </div>
            </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow mb-4" style="height: 94%">
            <!-- Card Body -->
            <div class="card-body">
          
            </div>
        </div>
      </div>
  </div>



  <div class="row">
    <div class="col-md-4">
      <div class="card shadow mb-4" style="height: 94%">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
        
          </div>
      </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4" style="height: 94%">
            <!-- Card Body -->
            <?php	
                setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
                $numero = strftime("%d");
                $dia = strftime("%A");
                $mes = strftime("%B");
            ?>
            <div class="card-body">
                <div class="fecha-flex">
                    <p class="dia-numero-home-tesis">{{$numero}}</p>
                    <div class="fecha-div">
                        <p class="dia-letra-home-tesis">{{$dia}}</p>
                        <p class="mes-home-tesis">{{$mes}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@endsection