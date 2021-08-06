<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$colaborador->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Ficha Colaborador</h5>
            </div>
            {!!Form::model($colaborador,['method'=>'GET','route'=>['personal.update',$colaborador->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_colaborador" type="text" value="{{$colaborador->id}}" hidden>
       
                <label for="exampleFormControlInput1">Nombres</label>
                <input class="form-control" name="nombre" type="text" value="{{old('nombre', $colaborador->nombre)}}">
                @error('nombre')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Apellidos</label>
                <input class="form-control" name="apellido" type="text" value="{{old('apellido', $colaborador->apellido)}}">
                @error('apellido')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Rut</label>
                <input class="form-control" name="rut" type="text" value="{{old('rut', $colaborador->rut)}}">
                @error('rut')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Sexo</label>
                <select class="form-control form-control-user" name="sexo">
                    <option hidden>{{$colaborador->sexo}}</option>
                    <option>Mujer</option>
                    <option>Hombre</option>
                </select>
                @error('sexo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Cargo</label>
                <input class="form-control" name="cargo" type="text" value="{{old('cargo', $colaborador->cargo)}}">
                @error('cargo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Correo</label>
                <input class="form-control" name="correo" type="text" value="{{old('correo', $colaborador->correo)}}">
                @error('correo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Dirección</label>
                <input class="form-control" name="direccion" type="text" value="{{old('direccion', $colaborador->direccion)}}">
                @error('direccion')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Teléfono</label>
                <input class="form-control" name="telefono" type="text" value="{{old('telefono', $colaborador->telefono)}}">
                @error('telefono')
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