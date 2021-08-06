<!-- Modal -->
<div class="modal fade" id="modal-{{$odontograma->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Pieza {{$odontograma->pieza}}</h5>
            </div>
            {!!Form::model($odontograma,['method'=>'GET','route'=>['odontograma.update',$odontograma->id]])!!}
            <div class="modal-body">
                <label for="exampleFormControlInput1">Estado Actual</label><br>
                <div class="container">
                    <label for="estado">Estado : {{$odontograma->estado ? $odontograma->estado : 'Por defecto'}}</label><br>
                    <label for="estado">Superficie : 
                        @if($odontograma->profundidad == 'a') Todas las superficies @endif
                        @if(str_contains($odontograma->profundidad, 'bcdef')) Todas las superficies
                        @else  
                            @if(str_contains($odontograma->profundidad, 'b')) Oclusal,  @endif
                            @if(str_contains($odontograma->profundidad, 'c')) Vesticular, @endif
                            @if(str_contains($odontograma->profundidad, 'd')) Distal,  @endif
                            @if(str_contains($odontograma->profundidad, 'e')) Palatino,  @endif
                            @if(str_contains($odontograma->profundidad, 'f')) Mesial  @endif
                            @if($odontograma->profundidad == '') No aplica  @endif
                        @endif
                    </label>
                </div>
                <hr>


                <input class="form-control" name="id_odontograma" type="text" value="{{$odontograma->id}}" hidden>
                <input class="form-control" name="id_paciente" type="text" value="{{$odontograma->ficha->paciente->id}}" hidden>

                <label for="exampleFormControlInput1">Estado</label>
                
                <select class="form-control form-control-user" name="estado">
                    <option defaultValue hidden>{{$odontograma->estado ? $odontograma->estado : 'Seleccione Estado'}}</option>
                    <option values="caries">Caries</option>
                    <option values="resina-adaptada">Resina Adaptada</option>
                    <option values="resina-desadaptada">Resina Desadaptada</option>
                    <option values="amalgama-adaptada">Amalgama Adaptada</option>
                    <option values="amalgama-desadaptada">Amalgama Desadaptada</option>
                    <option values="diente-sano">Diente Sano</option>
                    <option values="sellante-bueno">Sellante Bueno</option>
                    <option values="sellante-desadaptado">Sellante Desadaptado</option>
                    <option values="fractura">Fractura</option>
                    <option values="diente-ausente">Diente Ausente</option>
                    <option values="provisional">Provisional</option>
                    <option values="extraccion-indicada">Extracción Indicada</option>
                    <option values="corona-buena">Corona Buena</option>
                    <option values="corona-desadaptada">Corona Desadaptada</option>
                    <option values="endodoncia-buena">Endodoncia Buena</option>
                    <option values="endodoncia-mala">Endodoncia Mala</option>
                    <option values="perno-bueno">Perno Bueno</option>
                    <option values="perno-malo">Perno Malo</option>
                    <option values="implante-bueno">Implante Bueno</option>
                    <option values="implante-malo">Implante Malo</option>
                    <option values="pontico">Póntico</option>
                </select>
                </br>
                <label for="exampleFormControlInput1">Superficie</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="all">
                        <label class="form-check-label" for="flexCheckDefault">Todas las superficies</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="oclusal">
                        <label class="form-check-label" for="flexCheckDefault">Oclusal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="vesticular">
                        <label class="form-check-label" for="flexCheckDefault">Vesticular</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="distal">
                        <label class="form-check-label" for="flexCheckDefault">Distal</label>
                    </div>
                    @if(($odontograma->numero > 0 and $odontograma->numero < 17))
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="palatino">
                            <label class="form-check-label" for="flexCheckDefault">Palatino</label>
                        </div>
                    @endif
                    @if(($odontograma->numero > 16 and $odontograma->numero < 33))
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lingual">
                            <label class="form-check-label" for="flexCheckDefault">Lingual</label>
                        </div>     
                    @endif
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="mesial">
                        <label class="form-check-label" for="flexCheckDefault">Mesial</label>
                    </div>
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