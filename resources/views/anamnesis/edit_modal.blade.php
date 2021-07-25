<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$anamnesis->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Anamnesis</h5>
            </div>
            {!!Form::model($anamnesis,['method'=>'GET','route'=>['anamnesis.update',$anamnesis->id]])!!}
            <div class="modal-body">
                @csrf
                <input class="form-control" name="id_anamnesis" type="text" value="{{$anamnesis->id}}" hidden>
                <input class="form-control" name="id_ficha" type="text" value="{{$anamnesis->ficha->id}}" hidden>
                
                <label for="exampleFormControlInput1">Motivo Consulta</label>
                <input class="form-control" name="motivo_consulta" type="text" value="{{old('motivo_consulta',$anamnesis->motivo_consulta)}}">
                @error('motivo_consulta')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Antecedentes Médicos</label>
                <textarea class="fix-tesis-form" name="antecedentes_medicos" rows="3">{{old('antecedentes_medicos',$anamnesis->antecedentes_medicos)}}</textarea>
                @error('antecedentes_medicos')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Medicamentos</label>
                <textarea class="fix-tesis-form" name="medicamentos" rows="3">{{old('medicamentos',$anamnesis->medicamentos)}}</textarea>
                @error('medicamentos')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Alergias</label>
                <textarea class="fix-tesis-form" name="alergias" rows="3">{{old('alergias',$anamnesis->alergias)}}</textarea>
                @error('alergias')
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