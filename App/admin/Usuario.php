<?php
require_once("./template/HeaderAdmin.php");
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
                <h1 class="font-weight-bold mb-0">Usuarios Administradores</h1>
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
                              <h1><i class="fas fa-users"></i> Usuarios</h1>
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
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>Foo</td>
                                          <td>Food</td>
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
  require_once("./template/FooterAdmin.php");
  ?>