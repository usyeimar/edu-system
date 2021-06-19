<?php
require_once("Views/templates/HeaderAdmin.php");
?>

<body>
  <div class="d-flex" id="content-wrapper">

    <?php
    require_once("Views/templates/SidebarAdmin.php");
    ?>
    <div class="w-100">

      <?php
      require_once("Views/templates/NavBarAdmin.php");
      ?>

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">

        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">

                <h1 class="font-weight-bold mb-0" id="tablaGestorArchivos">Administrador de Archivos</h1>
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


                        <div>
                          <h1><i class="fas fa-archive"></i> Archivos</h1>
                          <button class="btn btn-primary shadow-lg " type="button" data-toggle="modal" data-target="#ModalArchivos"><i class="fas fa-plus-circle"></i> Agregar Archivos</button>
                          <p>Pulsa el boton de + parar agregar registros.</p>
                        </div>

                        <?php

                        ?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="tile">
                              <div class="tile-body">
                                <div class="table-responsive">
                                  <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                      <tr>
                                        <th>Nombre</th>
                                        <th>Tipo de Archivo</th>
                                        <th>Descargar</th>
                                        <th>Visualizar</th>
                                        <th>Eliminar</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                          <span class="btn btn-danger btn-sm">
                                            <span class="fas fa-trash-alt"></span>
                                          </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
            </div>
          </div>
        </section>

      </div>

    </div>
  </div>


  <?php
  require_once("Views/Modals/ModalArchivos.php");
  require_once("Views/templates/FooterAdmin.php");

  ?>