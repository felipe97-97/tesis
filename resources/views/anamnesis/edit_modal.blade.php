<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$anamnesis->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Anamnesis</h5>
            </div>
            {!!Form::model($anamnesis,['method'=>'GET','route'=>['anamnesis.update',$anamnesis->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_anamnesis" type="text" value="{{$anamnesis->id}}" hidden>

                <label for="exampleFormControlInput1">Motivo Consulta</label>
                <input class="form-control" name="motivo" type="text" value="{{$anamnesis->motivo_consulta}}">
                </br>
                <label for="exampleFormControlInput1">Antecedentes Médicos</label>
                <textarea class="fix-tesis-form" name="antecedentes" rows="3">{{$anamnesis->antecedentes_medicos}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Medicamentos</label>
                <textarea class="fix-tesis-form" name="medicamentos" rows="3">{{$anamnesis->medicamentos}}</textarea>
                </br>
                <label for="exampleFormControlInput1">Alergias</label>
                <textarea class="fix-tesis-form" name="alergias" rows="3">{{$anamnesis->alergias}}</textarea>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Guardar Cambios</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>