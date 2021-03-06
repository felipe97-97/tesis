<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$evaluacionClinica->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar evaluacionClinica</h5>
            </div>
            {!!Form::model($evaluacionClinica,['method'=>'GET','route'=>['evaluacion_clinica.update',$evaluacionClinica->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_evaluacionClinica" type="text" value="{{$evaluacionClinica->id}}" hidden>
                
                <label for="exampleFormControlInput1">Fecha</label>
                <input class="form-control" name="fecha" type="date" value="{{old('fecha',$evaluacionClinica->fecha)}}">
                @error('fecha')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Actividades</label>
                <textarea class="fix-tesis-form" name="actividad" rows="3">{{old('actividad',$evaluacionClinica->actividad)}}</textarea>
                @error('actividad')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Guardar Cambios</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>