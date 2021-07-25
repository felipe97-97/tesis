<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$anamnesisOdontologica->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Anamnesis Odontológica</h5>
            </div>
            {!!Form::model($anamnesisOdontologica,['method'=>'GET','route'=>['anamnesis_odontologica.update',$anamnesisOdontologica->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_anamnesisOdontologica" type="text" value="{{$anamnesisOdontologica->id}}" hidden>

                <label for="exampleFormControlInput1">Última Consulta</label>
                <input class="form-control" name="ultima_consulta" type="date" value="{{$anamnesisOdontologica->ultima_consulta}}">
                </br>
                <label for="exampleFormControlInput1">Tratamientos Realizados</label>
                <textarea class="fix-tesis-form" name="tratamientos_realizados" rows="3">{{$anamnesisOdontologica->tratamientos_realizados}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Reacciones Adversas</label>
                <textarea class="fix-tesis-form" name="reacciones_adversas" rows="3">{{$anamnesisOdontologica->reacciones_adversas}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Hábitos Higiene</label>
                <textarea class="fix-tesis-form" name="habitos_higiene" rows="3">{{$anamnesisOdontologica->habitos_higiene}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Hábitos Parafuncionales</label>
                <textarea class="fix-tesis-form" name="habitos_parafuncionales" rows="3">{{$anamnesisOdontologica->habitos_parafuncionales}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Examen Tejidos Blandos</label>
                <textarea class="fix-tesis-form" name="examen_tejidos_blandos" rows="3">{{$anamnesisOdontologica->examen_tejidos_blandos}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Observaciones</label>
                <textarea class="fix-tesis-form" name="observaciones" rows="3">{{$anamnesisOdontologica->observaciones}}</textarea>
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