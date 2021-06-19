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

                <h1 class="font-weight-bold mb-0" id="tablaGestorArchivos">Notas Personales</h1>
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
                          <h1><i class="fas fa-sticky-note"></i> Notas</h1>
                          <button class="btn btn-primary shadow-lg " type="button" data-toggle="modal" data-target="#ModalNotas"><i class="fas fa-plus-circle"></i> Nueva</button>
                          <p>Pulsa el boton de + parar agregar registros.</p>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="tile">
                              <div class="tile-body">
                                <div class="table-responsive">
                                  <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Editar</th>
                                        <th>Eliminar </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td style="text-align:center;width:150px">
                                          <div>
                                            <span class="btn btn-warning btn-sm">
                                              <span <i class="fas fa-edit"></i></span>
                                          </div>
                                        </td>

                                        <td style="text-align:center;width:150px">
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
require_once("Views/Modals/ModalNotas.php");
  require_once("Views/templates/FooterAdmin.php");
  
  ?>