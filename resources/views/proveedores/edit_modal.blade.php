<!-- Modal -->
<div class="modal fade" id="edit_modal-{{$proveedor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar preveedor: {{$proveedor->nombre}}</h5>
            </div>
            {!!Form::model($proveedor,['method'=>'GET','route'=>['proveedores.update',$proveedor->id]])!!}
            <div class="modal-body">
                <input class="form-control" name="id_proveedor" type="text" value="{{$proveedor->id}}" hidden>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input class="form-control form-control-user" name="nombre" type="text" value="{{old('nombre',$proveedor->nombre)}}" required>
                    @error('nombre')
                        <span>
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Rut</label>
                    <input class="form-control form-control-user" name="rut" type="text" value="{{old('rut',$proveedor->rut)}}" required>
                    @error('rut')
                        <span>
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" type="submit">Actualizar Datos</button>
            </div>
            {{Form::Close()}}
        </div>
    </div>
</div>