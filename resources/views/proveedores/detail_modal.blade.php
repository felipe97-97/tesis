<!-- Modal -->
<div class="modal fade" id="detail_modal-{{$inventario->proveedor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles preveedor: {{$inventario->proveedor->nombre}}</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input class="form-control form-control-user" name="nombre" type="text" value="{{$inventario->proveedor->nombre}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Rut</label>
                    <input class="form-control form-control-user" name="rut" type="text" value="{{$inventario->proveedor->rut}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Total implementos administrados</label>
                    <input class="form-control form-control-user" name="total" type="text" value="{{$inventario->proveedor->implementos->count()}}" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>