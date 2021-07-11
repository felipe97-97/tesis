@extends('layouts.index')

@section('title', 'Mis Asignaturas')  

@section('content')
<div class="container-fluid">

    
    @include('alerts.success')
    <!-- GRADIENTE DIV HEADER -->
    <div class="custom-div-tesis-gradient shadow mb-4">
        <div>
            <a href="{{url('/fichas/detail/'.$paciente->id)}}" class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-undo-alt"></i>
            </a>
            <div>
                <h1 class="h1 mb-1 text-white-800">Odontograma</h1>
                <p class="mb-3">{{'Paciente: '.$paciente->nombre.' '.$paciente->apellido}}</p>
            </div>
        </div>
        <div class="custom-div-tesis-gradient-image">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height: 15rem;" src="{{asset('img/anamnesis.svg')}}" alt="...">
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-12">
            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detalle Odontograma</h6>
                </div>
                <div class="card-body">
                    <input class="form-control" name="id_paciente" type="text" value="{{$paciente->id}}" hidden>
                    <label for="exampleFormControlSelect1">Permanente</label>
                        @foreach($paciente->ficha->odontograma as $odontograma)
                            @include('odontograma.modal')
                            @if($odontograma->pieza == '1-8' or $odontograma->pieza == '4-8' or $odontograma->pieza == '5-5' or $odontograma->pieza == '8-5')
                                <div class="row" style="display: flex; align-items: center; justify-content: center">
                            @endif
                            @if(($odontograma->numero > 16 and $odontograma->numero < 33) or ($odontograma->numero > 42 and $odontograma->numero < 53))
                                <div style="display: flex; flex-direction: column; align-items: center"  class="div-odontograma-hover"
                                data-target="#modal-{{$odontograma->id}}" data-toggle="modal">
                                    @if($odontograma->numero < 25 or ($odontograma->numero > 42 and $odontograma->numero < 48))
                                        <div class="odontograma-circle-2" style="display: flex; justify-content: center; align-items: center">
                                            <div class=" {{$odontograma->profundidad}}  {{'color-'.$odontograma->estado_clase}}" style="margin-top: 1px"></div>
                                        </div>
                                    @else
                                        <div class="odontograma-circle-2 flipX-circle-tesis" style="display: flex; justify-content: center; align-items: center">
                                            <div class=" {{$odontograma->profundidad}}  {{'color-'.$odontograma->estado_clase}}" style="margin-top: 1px"></div>
                                        </div>                              
                                    @endif
                                    <div class="odontograma-{{$odontograma->pieza}}">
                                        <div class="{{$odontograma->estado_clase}}-inferior"></div>
                                    </div>
                                </div>
                            @else
                                <div style="display: flex; flex-direction: column; align-items: center"  class="div-odontograma-hover"
                                data-target="#modal-{{$odontograma->id}}" data-toggle="modal">
                                    <div class="odontograma-{{$odontograma->pieza}}">
                                        <div class="{{$odontograma->estado_clase}}"></div>
                                    </div>
                                    @if($odontograma->numero < 9 or ($odontograma->numero > 32 and $odontograma->numero < 38))
                                        <div class="odontograma-circle" style="display: flex; justify-content: center; align-items: center">
                                            <div class="{{$odontograma->profundidad}} {{'color-'.$odontograma->estado_clase}}" style="margin-bottom: 4px"></div>
                                        </div>
                                    @else
                                        <div class="odontograma-circle flipX-circle-tesis" style="display: flex; justify-content: center; align-items: center">
                                            <div class="{{$odontograma->profundidad}} {{'color-'.$odontograma->estado_clase}}" style="margin-bottom: 4px"></div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                            @if($odontograma->pieza == '2-8' or $odontograma->pieza == '3-8' or $odontograma->pieza == '6-5' or $odontograma->pieza == '7-5')        
                                </div>
                            @endif      
                            @if($odontograma->pieza == '2-8' or $odontograma->pieza == '6-5')
                                <hr>
                            @endif
                            @if($odontograma->pieza == '3-8')
                                <label for="exampleFormControlSelect1" style="transform: translateY(100px)">Temporal</label>
                            @endif

                        @endforeach
                </div>
            </div>
            
        </div>

    </div>

</div>


@endsection