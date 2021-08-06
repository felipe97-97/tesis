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
                <input class="form-control" name="nombre" type="text" value="{{old('nombre', $paciente->nombre)}}">
                @error('nombre')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Apellidos</label>
                <input class="form-control" name="apellido" type="text" value="{{old('apellido', $paciente->apellido)}}">
                @error('apellido')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Rut</label>
                <input class="form-control" name="rut" type="text" value="{{old('rut', $paciente->rut)}}">
                @error('rut')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Sexo</label>
                <select class="form-control form-control-user" name="sexo">
                    <option hidden>{{$paciente->sexo}}</option>
                    <option>Mujer</option>
                    <option>Hombre</option>
                </select>
                @error('sexo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                <input class="form-control" name="fecha_nacimiento" type="date" value="{{old('fecha_nacimiento', $paciente->fecha_nacimiento)}}">
                @error('fecha_nacimiento')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Ocupación</label>
                <input class="form-control" name="ocupacion" type="text" value="{{old('ocupacion', $paciente->ocupacion)}}">
                @error('ocupacion')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Correo</label>
                <input class="form-control" name="correo" type="text" value="{{old('correo', $paciente->correo)}}">
                @error('correo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Teléfono</label>
                <input class="form-control" name="telefono" type="text" value="{{old('telefono', $paciente->telefono)}}">
                @error('telefono')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Dirección</label>
                <input class="form-control" name="direccion" type="text" value="{{old('direccion', $paciente->direccion)}}">
                @error('direccion')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Tutor</label>
                <input class="form-control" name="tutor" type="text" value="{{old('tutor', $paciente->tutor)}}">
                @error('tutor')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Contacto Emergencia</label>
                <input class="form-control" name="contacto_emergencia" type="text" value="{{old('contacto_emergencia', $paciente->contacto_emergencia)}}">
                @error('contacto_emergencia')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
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