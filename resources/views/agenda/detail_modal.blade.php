<?php 
use App\Models\Agenda;
$agendas = Agenda::with(['paciente','personal'])->where('day', '>=', date('Y-m-d'))->get();   

?>

<!-- Modal -->
<div class="modal fade" id="detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Horas Agendadas</h5>
            </div>

            <div class="modal-body">
                @if(sizeof($agendas) != 0)
                    @foreach($agendas as $agenda)
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body">
                                <div class="card-flex-tesis">
                                    <div>
                                        {{$agenda->title}}
                                        <div class="text-white-50 small">{{'Paciente: '.$agenda->paciente->nombre.' '.$agenda->paciente->apellido.', Rut: '.$agenda->paciente->rut}}</div>
                                        <div class="text-white-50 small">{{'Dr/a: '.$agenda->personal->nombre.' '.$agenda->personal->apellido}}</div>
                                        <div class="text-white-50 small">{{ 'Fecha: '.$agenda->day.', Inicio: '.$agenda->start_date.' - Fin: '.$agenda->end_date }}</div>
                                    </div>
                                
                                    <span class="icon text-white-100">
                                        <a href="agenda/delete/{{$agenda->id}}">
                                            <i class="fas fa-trash" style="text-decoration: none; color: white"></i>
                                        </a>        
                                    </span>
                                </div>
                                
                                
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-center">No hay horas agendadas</h3>
                @endif
            </div>
            {{-- {!!Form::model($agendas,['method'=>'GET','route'=>['agendas.delete',$agendas->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_agendas" type="text" value="{{$agendas->id}}" hidden>

                <label for="exampleFormControlInput1">¿Seguro de eliminar anamnesis?</label>
            </div>
            
            {{Form::Close()}} --}}

            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>