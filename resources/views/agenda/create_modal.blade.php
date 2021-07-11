<!-- Modal -->
<?php
    use App\Models\Paciente;
    use App\Models\Personal;
?>
<div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agendar nueva atención</h5>
            </div>
            <form method="GET" action="agenda/create">
                <div class="modal-body">

                    <?php 
                        $pacientes = Paciente::all();
                        $personals = Personal::all();
                    ?>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Motivo</label>
                        <select class="form-control form-control-user" name="tipo" required>
                            <option defaultValue hidden>Seleccione Motivo</option>
                            <option>Consulta</option>
                            <option>Chequeo</option>
                            <option>Control</option>
                            <option>Extracción</option>
                            <option>Otro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Día</label>
                        <input class="form-control form-control-user" name="dia" type="date" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Hora Inicio</label>
                                <input class="form-control form-control-user" name="inicio" type="time" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Hora Fin</label>
                                <input class="form-control form-control-user" name="fin" type="time" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Paciente</label>
                        <select class="form-control form-control-user" name="id_paciente" required>
                            <option defaultValue hidden>Seleccione Paciente</option>
                            @foreach($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->rut.' - '.$paciente->nombre.' '.$paciente->apellido}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Personal</label>
                        <select class="form-control form-control-user" name="id_personal" required>
                            <option defaultValue hidden>Seleccione Personal</option>
                            @foreach($personals as $personal)
                                <option value="{{$personal->id}}">{{$personal->nombre.' '.$personal->apellido}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success" type="submit">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>