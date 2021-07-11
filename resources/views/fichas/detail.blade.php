@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')

<div class="container-fluid">
    

    @include('alerts.success')
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="52" height="52" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <g fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8v13H3V8"/><path d="M1 3h22v5H1z"/><path d="M10 12h4"/></g>
                </svg>
            </div>
            <div>
                <h1 class="h1 mb-1 text-white-800">{{$paciente->nombre.' '.$paciente->apellido}}</h1>
                <p class="mb-3">{{\Carbon\Carbon::parse($paciente->fecha_nacimiento)->diff(\Carbon\Carbon::now())->format('%y años, %m meses y %d días');}}</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 18rem;" src="{{ $paciente->sexo == 'Hombre' ? asset('img/man.svg') : asset('img/female.svg')}}" alt="...">
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 card-flex-tesis">
                    <h6 class="m-0 font-weight-bold text-primary">Ficha del paciente</h6>
                    <div class="card-footer-tesis">
                        <a class="btn btn-warning btn-icon-split btn-sm" data-target="#edit_modal-{{$paciente->id}}" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Editar</span>
                        </a>
                    </div>
                </div>
                @include('fichas.edit_modal')
                <div class="card-body" style="padding: 5vh 5vw">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Rut</h6>
                                <h6 style="margin-left: 20px">{{$paciente->rut}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Sexo</h6>
                                <h6 style="margin-left: 20px">{{$paciente->sexo}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Creación Ficha</h6>
                                <h6 style="margin-left: 20px">{{$paciente->created_at}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Fecha Nacimiento</h6>
                                <h6 style="margin-left: 20px">{{$paciente->fecha_nacimiento}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Ocupación</h6>
                                <h6 style="margin-left: 20px">{{$paciente->ocupacion}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Correo</h6>
                                <h6 style="margin-left: 20px">{{$paciente->correo}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Dirección</h6>
                                <h6 style="margin-left: 20px">{{$paciente->direccion}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Tutor</h6>
                                <h6 style="margin-left: 20px">{{$paciente->tutor}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Contacto Emergencia</h6>
                                <h6 style="margin-left: 20px">{{$paciente->contacto_emergencia}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-4">
                            <div class="row" style="margin-left: 1em">
                                <h6 class="m-0 font-weight-bold text-primary" >Teléfono</h6>
                                <h6 style="margin-left: 20px">{{$paciente->telefono}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Barra lateral -->
                <div class="col-lg-4">
                    <!-- Card Anamnesis -->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3 card-flex-tesis">
                            <h6 class="m-0 font-weight-bold text-primary">Anamnesis</h6>
                            
                            <div class="card-footer-tesis">
                                <a class="btn btn-success btn-icon-split btn-sm" href="{{url('/anamnesis/new/'.$paciente->id)}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Añadir</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($paciente->ficha->anamnesis->count() > 0)
                                @foreach($paciente->ficha->anamnesis as $anamnesi)
                                    <a href="{{url('/anamnesis/detail/'.$anamnesi->id)}}" style="text-decoration: none"> 
                                        <div class="card bg-primary text-white shadow">
                                            <div class="card-body">
                                                <div class="card-flex-tesis">
                                                    <div>
                                                        <div class="btn btn-light btn-circle btn-sm" style="margin-right: 10px">
                                                            {{$loop->index + 1}}
                                                        </div>
                                                        {{$anamnesi->motivo_consulta }}
                                                        <div class="text-white-50 small" style="margin-left: 45px">{{ 'Fecha: '.$anamnesi->created_at }}</div>
                                                    </div>
                                                    <span class="icon text-white-100">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="empty-ficha-tesis">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem; width: 12rem;" src="{{asset('img/empty.svg')}}" alt="...">
                                    <p style="margin-top: -30px">No hay datos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <!-- Card Anamnesis Odontológica -->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3 card-flex-tesis">
                            <h6 class="m-0 font-weight-bold text-primary">Anamnesis Odontológica</h6>
                            <div class="card-footer-tesis">
                                <a class="btn btn-success btn-icon-split btn-sm" href="{{url('/anamnesis_odontologica/new/'.$paciente->id)}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Añadir</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($paciente->ficha->anamnesis_odontologica->count() > 0)
                                @foreach($paciente->ficha->anamnesis_odontologica as $anamnesisOdontologica)
                                    <a href="{{url('/anamnesis_odontologica/detail/'.$anamnesisOdontologica->id)}}" style="text-decoration: none"> 
                                        <div class="card bg-primary text-white shadow">
                                            <div class="card-body">
                                                <div class="card-flex-tesis">
                                                    <div>
                                                        <div class="btn btn-light btn-circle btn-sm" style="margin-right: 10px">
                                                            {{$loop->index + 1}}
                                                        </div>
                                                        Anamnesis Odontológica
                                                        <div class="text-white-50 small" style="margin-left: 45px">{{ 'Fecha: '.$anamnesisOdontologica->created_at }}</div>
                                                    </div>
                                                    <span class="icon text-white-100">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="empty-ficha-tesis">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem; width: 12rem;" src="{{asset('img/empty.svg')}}" alt="...">
                                    <p style="margin-top: -30px">No hay datos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">   
                    <!-- Card Odontograma-->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Odontograma</h6>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/odontograma/detail/'.$paciente->id)}}" style="text-decoration: none"> 
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        <div class="card-flex-tesis">
                                            <div>
                                                Ver Odontograma
                                            </div>
                                            <span class="icon text-white-100">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </div>
                                        
                                    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Card Evaluación Clínica -->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3 card-flex-tesis">
                            <h6 class="m-0 font-weight-bold text-primary">Evaluación Clínica</h6>
                            
                            <div class="card-footer-tesis">
                                <a class="btn btn-success btn-icon-split btn-sm" href="{{url('/evaluacion_clinica/new/'.$paciente->id)}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Añadir</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($paciente->ficha->evaluacion_clinica->count() > 0)
                                @foreach($paciente->ficha->evaluacion_clinica as $evaluacionClinica)
                                    <a href="{{url('/evaluacion_clinica/detail/'.$evaluacionClinica->id)}}" style="text-decoration: none"> 
                                        <div class="card bg-primary text-white shadow">
                                            <div class="card-body">
                                                <div class="card-flex-tesis">
                                                    <div>
                                                        <div class="btn btn-light btn-circle btn-sm" style="margin-right: 10px">
                                                            {{$loop->index + 1}}
                                                        </div>
                                                        Evaluación Clínica
                                                        <div class="text-white-50 small" style="margin-left: 45px">{{ 'Fecha: '.$evaluacionClinica->fecha }}</div>
                                                    </div>
                                                    <span class="icon text-white-100">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="empty-ficha-tesis">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem; width: 12rem;" src="{{asset('img/empty.svg')}}" alt="...">
                                    <p style="margin-top: -30px">No hay datos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Card Radiografías -->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3 card-flex-tesis">
                            <h6 class="m-0 font-weight-bold text-primary">Radiografías</h6>
                            
                            <div class="card-footer-tesis">
                                <a class="btn btn-success btn-icon-split btn-sm" href="{{url('/radiografias/new/'.$paciente->id)}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Añadir</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($paciente->ficha->radiografias->count() > 0)
                            
                            @else
                                <div class="empty-ficha-tesis">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem; width: 12rem;" src="{{asset('img/empty.svg')}}" alt="...">
                                    <p style="margin-top: -30px">No hay datos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Card Fotografías Clínicas -->
                    <div class="card shadow mb-4 height-card-tesis">
                        <div class="card-header py-3 card-flex-tesis">
                            <h6 class="m-0 font-weight-bold text-primary">Fotografías Clínicas</h6>
                            
                            <div class="card-footer-tesis">
                                <a class="btn btn-success btn-icon-split btn-sm" href="{{url('/anamnesis/new/'.$paciente->id)}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Añadir</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($paciente->ficha->radiografias->count() > 0)
                            
                            @else
                                <div class="empty-ficha-tesis">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 12rem; width: 12rem;" src="{{asset('img/empty.svg')}}" alt="...">
                                    <p style="margin-top: -30px">No hay datos</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection