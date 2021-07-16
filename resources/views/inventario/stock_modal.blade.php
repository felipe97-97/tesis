<!-- Modal -->
<div class="modal fade" id="stock_modal-{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Stock de {{$inventario->item}}</h5>
            </div>
            {!!Form::model($inventario,['method'=>'GET','route'=>['inventario.stock',$inventario->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_inventario" type="text" value="{{$inventario->id}}" hidden>

                <label for="exampleFormControlInput1">Stock</label>
                <input class="form-control" name="cantidad" type="number" value="{{$inventario->cantidad}}">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Actualizar Stock</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>