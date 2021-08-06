<!-- Modal -->
<div class="modal fade" id="edit_password_modal-{{auth()->user()->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Contraseña</h5>
            </div>
            {!!Form::model(auth()->user(),['method'=>'GET','route'=>['home.update_pass',auth()->user()->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_paciente" type="text" value="{{auth()->user()->id}}" hidden>
       
                <label for="exampleFormControlInput1">Nueva Contraseña</label>
                <input class="form-control" name="pass1" type="text" placeholder="Ingrese nueva contraseña" required>
                </br>
                <label for="exampleFormControlInput1">Confirmar Contraseña</label>
                <input class="form-control" name="pass2" type="text" placeholder="Confirme nueva contraseña" required>
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