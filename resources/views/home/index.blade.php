@extends('layouts.index')

@section('title', 'Intranet')  

@section('content')
<div class="container-fluid">

  <div class="row">
      <div class="col-md-8">
          <!-- GRADIENTE DIV HEADER -->
            <div class="custom-div-tesis-gradient-2 shadow mb-4" style="height: 94%">
                <div class="custom-div-tesis-gradient-home shadow mb-4 ">
                    <div>
                        <div>
                            <p class="mb-1 text-primary" style="margin-left: 10px">Bienvenido {{auth()->user()->personal->nombre}}</p>
                            <h1 class="h1 mb-1 custom-gradient-text-tesis">VIVADENT</h1>
                            <p class="mb-1" style="margin-left: 10px">Intranet Clínica</p>
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
            <div class="card-body" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div style="display: flex; align-items: center; justify-content: center; padding-left: 15px;">
                    <img class="img-account-profile rounded-circle mb-2" src="{{auth()->user()->personal->sexo == 'Hombre' ? asset('img/undraw_profile_2.svg') : asset('img/undraw_profile_3.svg')}}" style="width: 10rem;" alt="">
                    <div style="margin-left: 20px;">
                        <h3 class="m-0 font-weight-bold text-primary">{{auth()->user()->name}}</h3>
                        <p>{{auth()->user()->personal->rut}}</p>
                    </div>
                </div>
                <div style="display: flex; justify-content: center; align-items: flex-start; margin-top: 20px; flex-direction: column">
                    <h3>
                        <span class="badge bg-primary text-white ms-2">Correo</span>
                        <span class="badge bg-light text-body me-2">{{auth()->user()->email}}</span>
                    </h3>
                    <h3>
                        <span class="badge bg-primary text-white ms-2">Teléfono</span>
                        <span class="badge bg-light text-body me-2">{{auth()->user()->personal->telefono}}</span>
                    </h3>
                    <h3>
                        <span class="badge bg-primary text-white ms-2">Cargo</span>
                        <span class="badge bg-light text-body me-2">{{auth()->user()->personal->cargo}}</span>
                    </h3>
                </div>
            </div>
        </div>
      </div>
  </div>



  <div class="row">
    <div class="col-md-4">
      <div class="card shadow mb-4" style="height: 94%; overflow-y: scroll">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-white text-uppercase mb-1">
                                    Horas agendadas para hoy
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-white-800">{{$agenda->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-primary text-white shadow" style="margin-top: 10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-white text-uppercase mb-1">
                                    Número de pacientes
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-white-800">{{$pacientes->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-primary text-white shadow" style="margin-top: 10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-m font-weight-bold text-white text-uppercase mb-1">
                                    Total personal
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-white-800">{{$personal->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-nurse fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="col-md-8">
        <div class="custom-div-tesis-gradient-2 shadow mb-4 ">
            <div class="custom-div-tesis-gradient-home shadow mb-4" style="height: 92%">
                <!-- Card Body -->
                <?php	
                    setlocale(LC_ALL,"es_CL.UTF-8","es_CL","esp");
                    date_default_timezone_set('America/Santiago');
                    $mes = strftime("%B");
                    $days_dias = array(
                        'Monday'=>'Lunes',
                        'Tuesday'=>'Martes',
                        'Wednesday'=>'Miércoles',
                        'Thursday'=>'Jueves',
                        'Friday'=>'Viernes',
                        'Saturday'=>'Sábado',
                        'Sunday'=>'Domingo'
                    );
                ?>
                <div class="card-body">
                    <div class="fecha-flex">
                        <p class="dia-numero-home-tesis">{{date('d', mktime(0, 0, 0, date("m"), date("d"),   date("Y")))}}</p>
                        <div class="fecha-div">
                            <p class="dia-letra-home-tesis">{{$days_dias[date('l', mktime(0, 0, 0, date("m"), date("d"),   date("Y")))]}}</p>
                            <p class="mes-home-tesis">{{$mes}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@endsection