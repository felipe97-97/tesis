<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Ficha Paciente</h5>
            </div>
            {!!Form::model($paciente,['method'=>'GET','route'=>['fichas.update',$paciente->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_paciente" type="text" value="{{$paciente->id}}" hidden>
                
                <label for="exampleFormControlInput1">Nombres</label>
                <input class="form-control" name="nombre" type="text" value="{{$paciente->nombre}}">
                </br>
                <label for="exampleFormControlInput1">Apellidos</label>
                <input class="form-control" name="apellido" type="text" value="{{$paciente->apellido}}">
                </br>
                <label for="exampleFormControlInput1">Rut</label>
                <input class="form-control" name="rut" type="text" value="{{$paciente->rut}}">
                </br>
                <label for="exampleFormControlInput1">Sexo</label>
                <select class="form-control form-control-user" name="sexo">
                    <option hidden>{{$paciente->sexo}}</option>
                    <option>Mujer</option>
                    <option>Hombre</option>
                    <option>Otro</option>
                </select>
                </br>
                <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                <input class="form-control" name="nacimiento" type="date" value="{{$paciente->fecha_nacimiento}}">
                </br>
                <label for="exampleFormControlInput1">Ocupación</label>
                <input class="form-control" name="ocupacion" type="text" value="{{$paciente->ocupacion}}">
                </br>
                <label for="exampleFormControlInput1">Correo</label>
                <input class="form-control" name="correo" type="text" value="{{$paciente->correo}}">
                </br>
                <label for="exampleFormControlInput1">Teléfono</label>
                <input class="form-control" name="telefono" type="text" value="{{$paciente->telefono}}">
                </br>
                <label for="exampleFormControlInput1">Dirección</label>
                <input class="form-control" name="direccion" type="text" value="{{$paciente->direccion}}">
                </br>
                <label for="exampleFormControlInput1">Tutor</label>
                <input class="form-control" name="tutor" type="text" value="{{$paciente->tutor}}">
                </br>
                <label for="exampleFormControlInput1">Contacto Emergencia</label>
                <input class="form-control" name="emergencia" type="text" value="{{$paciente->contacto_emergencia}}">
                </br>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Guardar Cambios</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>