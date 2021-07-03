<!-- Modal -->
<div class="modal fade" id="delete_modal-{{$anamnesisOdontologica->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
            </div>
            {!!Form::model($anamnesisOdontologica,['method'=>'GET','route'=>['anamnesis_odontologica.delete',$anamnesisOdontologica->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_anamnesis" type="text" value="{{$anamnesisOdontologica->id}}" hidden>

                <label for="exampleFormControlInput1">¿Seguro de eliminar anamnesis odontológica?</label>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>