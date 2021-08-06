<!-- Modal -->
<?php
    use App\Models\Proveedor;
?>
<div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo ítem</h5>
            </div>
            <form method="GET" action="inventario/create">
                <div class="modal-body">

                    <?php 
                        $proveedores = Proveedor::all();
                    ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Ítem</label>
                                <input class="form-control form-control-user" name="item" type="text" placeholder="Ingrese nombre ítem" required>
                                @error('item')
                                    <span>
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Marca</label>
                                <input class="form-control form-control-user" name="marca" type="text" placeholder="Ingrese marca" required>
                                @error('marca')
                                    <span>
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Código</label>
                                <input class="form-control form-control-user" name="codigo" type="text" placeholder="Opcional - Ingrese código">
                                @error('codigo')
                                    <span>
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Cantidad</label>
                                <input class="form-control form-control-user" name="cantidad" type="number" placeholder="Ingrese cantidad" required>
                                @error('cantidad')
                                    <span>
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Proveedor</label>
                        <select class="form-control form-control-user" name="id_proveedor" required>
                            <option defaultValue hidden>Seleccione Proveedor</option>
                            @foreach($proveedores as $proveedor)
                                <option value="{{$proveedor->id}}">{{$proveedor->nombre.' - '.$proveedor->rut}}</option>
                            @endforeach
                        </select>
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