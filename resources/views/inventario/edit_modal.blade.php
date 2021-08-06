<!-- Modal -->
<?php
use App\Models\Proveedor;
$proveedores = Proveedor::all();
?>
<div class="modal fade" id="edit_modal-{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar {{$inventario->item}}</h5>
            </div>
            {!!Form::model($inventario,['method'=>'GET','route'=>['inventario.update',$inventario->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_inventario" type="text" value="{{$inventario->id}}" hidden>

                <label for="exampleFormControlInput1">Item</label>
                <input class="form-control" name="item" type="text" value="{{$inventario->item}}">
                @error('item')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Marca</label>
                <input class="form-control" name="marca" type="text" value="{{$inventario->marca}}">
                @error('marca')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Código</label>
                <input class="form-control" name="codigo" type="text" value="{{$inventario->codigo}}" placeholder="Opcional - Ingrese Código">
                @error('codigo')
                    <span>
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <label for="exampleFormControlInput1">Proveedor</label>
                <select class="form-control form-control-user" name="id_proveedor" required>
                    <option value="{{$inventario->proveedor->id}}" hidden>{{$inventario->proveedor->nombre.' - '.$inventario->proveedor->rut}}</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->nombre.' - '.$proveedor->rut}}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Actualizar Datos</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>