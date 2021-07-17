<!-- Modal Notas-->
<div class="modal fade" id="ModalNotas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Notas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  action="Core/AgregarNotas.php" method="POST" id="FormNotas" enctype="multipart/form-data"  class="formHorizontal">
                    <div class="form-group">
                        <input type="text" name="idNota" id="idNota" class="form-control" placeholder="Ingrese un Id" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="TitleNota" class="form-control" placeholder="Ingrese el Titulo de la nota" required="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  name="DescripcionNota" rows="6" placeholder="Descripcion de la Nota" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Seleccione una Prioridad</label>
                        <select class="form-control" id="listStatus" name=listaprioridad" required="">
                            <option value="0">Urgente -> De Prisa</option>
                            <option value="1">Mas Tarde -> Relajado</option>
                            <option value="2">Norma -> Cardio</option>
                            
                        </select>
                    </div>
                    <div class="tile-footer">
                        <button id="btnFormArchivo" class="btn btn-info" type="submit" name="btnIngresar"><i class="fas fa-save" aria-hidden="true"></i><span id="btnText"> Guardar</span></button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 