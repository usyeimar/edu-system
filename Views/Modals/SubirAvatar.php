<!-- Modal nueva categoria-->
<div class="modal fade" id="ModalAvatar" tabindex=" -1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal"> <i class="fas fa-upload"></i> Nuevo Avatar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="ModalAvatar" name="ModalAvatar" class="formHorizontal" enctype="multipart/form-data">
          <div class="form-group">
            <span>Avatar</span>
            <input class="form-control" id="txtNombreCategoria" name="imagen" type="file" required="">
          </div>
          <div class="tile-footer">
            <button id="btnActionFormCategoria" class="btn btn-info" type="submit"><i class="fa fa-fw fa-lg fas fa-sync-alt" aria-hidden="true"></i><span id="btnText">Actualizar</span></button>&nbsp;&nbsp;&nbsp;&nbsp;
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

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnActionFormCategoria').click(function() {
      var categoria = $('#txtNombreCategoria').val();
      if (categoria == "") {
        swal("Debes Seleccionar una imagen");
        return false;
      } else {
        
        
      }
    });
  });
</script>