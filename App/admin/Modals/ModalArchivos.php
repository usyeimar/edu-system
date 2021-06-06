<!-- Modal nuevo Archivo-->
<!-- Modal -->
<div class="modal fade" id="ModalArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-upload"></i>Subir Archivos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="ModalArchivos" enctype="multipart/form-data" method="POST" class="formHorizontal">
          <div class="form-group">
            <label class="control-label">Categoria <span class="required">*</span></label>
            <div id="LoadCategorias"></div>
            <input class="form-control" id="txtNombreCategoria" name="txtNombre" type="text" placeholder="Nombre del Categoria" required="">
          </div>
          <div class="form-group">
            <input class="form-control" id="UploadFile" name="UploadFile" type="file" required="">
          </div>

          <div class="tile-footer">
            <button id="btnFormArchivo" class="btn btn-info" type="submit"><i class="fas fa-upload" aria-hidden="true"></i><span id="btnText" > Subir</span></button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i> Cancelar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- modalViewCategoria -->
<div class="modal fade" id="modalViewCategoria" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos de la categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>ID:</td>
              <td id="celId">654654654</td>
            </tr>
            <tr>
              <td>Nombres:</td>
              <td id="celNombre"></td>
            </tr>
            <tr>
              <td>Descripción:</td>
              <td id="celDescripcion"></td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td id="celEstado"></td>
            </tr>
            <tr>
              <td>Foto:</td>
              <td id="imgCategoria"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>