<!-- Modal -->
<div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo proveedor</h5>
            </div>
            <form method="GET" action="proveedores/create">
                <div class="modal-body">

                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input class="form-control form-control-user" name="nombre" type="text" placeholder="Ingrese nombre de proveedor" required>
                        @error('nombre')
                            <span>
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Rut</label>
                        <input class="form-control form-control-user" name="rut" type="text" placeholder="Ingrese rut del proveedor" required>
                        @error('rut')
                            <span>
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success" type="submit">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>