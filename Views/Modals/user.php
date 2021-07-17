<!-- modalUsuarios -->
<div class="modal fade" id="ModalUpdateUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Actualizar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo constant('URL');?>/usuarios/registrarUsuario">
          <div class="row mb-4">
            <div class="col-md-6">
              <label for="idUsuario">Identificacion</label>
              <input class="form-control" name="IdUsario" id="idUsuario" type="text" required="" placeholder="Identificacion" value="<?php echo $resultado['idUsuario']; ?>">
            </div>
            <div class="col-md-6">
              <label for="Nombre">Nombre </label>
              <input class="form-control" type="text" name="Nombre" id="Nombre" required="" placeholder="Nombre" value="<?php echo $resultado['NomUsuario']; ?>">
            </div>
          </div>
          <div class="">
            <div class="col-md-11 mb-1">
              <label for="Apellido" >Apellido</label>
              <input class="form-control" type="text" name="Apellido" id="Apellido" required="" placeholder="Apellido" value="<?php echo $resultado['ApellidoUsuario']; ?>">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-11 mb-1">
              <label id="Email">Email</label>
              <input class="form-control" type="text" name="Email" id="Email" required="" placeholder="Email" value="<?php echo $resultado['EmailUsuario']; ?>">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-11 mb-1">
              <label for="Contraseña">Contraseña</label>
              <input class="form-control" type="password" name="Contraseña" id="Contraseña" required="" placeholder="Password" value="<?php echo $resultado['PassUsuario']; ?>">
            </div>
            <div class="col-md-11 mb-1">
              <input class="form-control" type="password" required="" placeholder=" New Password" >
            </div>
            <div class="col-md-11 mb-1">
              <label for="Ciudad">Ciudad</label>
              <input class="form-control" type="text" name="Ciudad" id="Ciudad" required="" placeholder="Ciudad" value="<?php echo $resultado['CiudadUsuario']; ?>">
            </div>

            <div class="clearfix"></div>
            <div class="col-md-11 mb-1">
              <label for="Direccion">Direccion</label>
              <input class="form-control" type="text" required="" name="Direccion" id="Direccion" placeholder="Direccion" value="<?php echo $resultado['DireccionUsuario']; ?>">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-11 mb-1">
              <label for="Telefono">Telefono</label>
              <input class="form-control" type="text" required="" name="Telefono" id="Telefono" placeholder="Telefono" value="<?php echo $resultado['TelefonoUsuario']; ?>">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-11 mb-1">
              <label for="FechaNa" >Fecha Nacimiento</label>
              <input class="form-control" type="date" required="" name="FechaNa" id="FechaNa" placeholder="Fecha de Nacimiento" value="<?php echo $resultado['FechaNacimiento']; ?>">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="tile-footer">
            <div class="col-md-12">
              <button class="btn btn-info" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Actualizar</button>
              <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i> Cerrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modalViewCliente -->
<div class="modal fade" id="modalViewCliente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Identificación:</td>
              <td id="celIdentificacion">654654654</td>
            </tr>
            <tr>
              <td>Nombres:</td>
              <td id="celNombre">Jacob</td>
            </tr>
            <tr>
              <td>Apellidos:</td>
              <td id="celApellido">Jacob</td>
            </tr>
            <tr>
              <td>Teléfono:</td>
              <td id="celTelefono">Larry</td>
            </tr>
            <tr>
              <td>Email (Usuario):</td>
              <td id="celEmail">Larry</td>
            </tr>
            <tr>
              <td>Identificacioón Tributaria:</td>
              <td id="celIde">Larry</td>
            </tr>
            <tr>
              <td>Nombre Fiscal:</td>
              <td id="celNomFiscal">Larry</td>
            </tr>
            <tr>
              <td>Dirección Fiscal:</td>
              <td id="celDirFiscal">Larry</td>
            </tr>
            <tr>
              <td>Fecha registro:</td>
              <td id="celFechaRegistro">Larry</td>
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