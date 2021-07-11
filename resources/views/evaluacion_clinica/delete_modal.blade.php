<!-- Modal -->
<div class="modal fade" id="delete_modal-{{$evaluacionClinica->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
            </div>
            {!!Form::model($evaluacionClinica,['method'=>'GET','route'=>['evaluacion_clinica.delete',$evaluacionClinica->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_evaluacionClinica" type="text" value="{{$evaluacionClinica->id}}" hidden>

                <label for="exampleFormControlInput1">¿Seguro de eliminar Evaluación Clínica?</label>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>