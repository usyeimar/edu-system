<?php
require_once("./template/HeaderAdmin.php");
require_once("../../Class/ConexionDB.php");
// $Objeto = new ConexionDB();
// $sql = "SELECT * FROM tbusuarios (idUsuario, 'NomUsuario', 'ApellidoUsuario', 'EmailUsuario', 'PassUsuario', 'CiudadUsuario', 'DireccionUsuario', 'TelefonoUsuario', 'DateCreate')";
// $Resultado = mysqli_query($Objeto->EstablecerConexion(),$sql);
?>

<body>
  <div class="d-flex" id="content-wrapper">

    <?php
    require_once("./template/SidebarAdmin.php");
    ?>
    <div class="w-100">

      <?php
      require_once("./template/NavBarAdmin.php");
      ?>

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">

        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h1 class="font-weight-bold mb-0">Usuarios</h1>
                <p class="lead text-muted">Revisa la última información</p>
              </div>

            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-11 my-1">
                <div class="card rounded-0">
                  <div class="card-body">
                    <div class="shadow p-3 mb-4 bg-body rounded">

                      <section>
                        <main class="app-content">
                          <div class="app-title">
                            <div>
                              <h1><i class="fas fa-users"></i> Usuarios </h1>
                              <button class="btn btn-primary shadow-lg " type="button" data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-plus-circle"></i> Nuevo</button>
                              <p>Pulsa el boton de + parar agregar registros.</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="tile">
                                <div class="tile-body">
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                      <thead>
                                        <tr>
                                          <th>Documento</th>
                                          <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Email</th>
                                          <th>Contraseña</th>
                                          <th>Ciudad</th>
                                          <th>Direccion</th>
                                          <th>Telefono</th>
                                          <th>Status</th>
                                          <th>Accion</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        // while ($UserData = mysqli_fetch_row($Resultado)) {
                                        // }

                                        // ?>
                                        // <tr>
                                        //   <td><?php echo $UserData['idUsuario'] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>
                                        //   <td><?php echo $UserData[''] ?></td>

                                          <td style="width:150px;">
                                            <div>
                                              <span class="btn btn-success btn-sm">
                                                <span <i class="fas fa-edit"></i></span>
                                            </div>
                                            <div>
                                              <span class="btn btn-danger btn-sm">
                                                <span class="fas fa-trash-alt"></span>
                                            </div>


                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </main>

                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  </div>


  <?php
  require_once("./Modals/ModalForm.php");
  require_once("./template/FooterAdmin.php");
  ?>