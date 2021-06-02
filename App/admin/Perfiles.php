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
                <h1 class="font-weight-bold mb-0">Mi Perfil</h1>
                <p class="lead text-muted">Revisa la última información</p>
              </div>
              <div class="col-lg-3 col-md-4 d-flex">
                <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-11 my-1">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Alumnos</h6>
                  </div>
                  <div class="card-body">
                    <section>
                      <div class="shadow p-3 mb-4 bg-body rounded">
                        <form class="row g-3 needs-validation" novalidate>

                          <div class="col-12 col-md-2">
                            <label for="id">Documento</label>
                            <input type="text" name="id" id="id" class="form-control" placeholder="Documento">
                          </div>
                          <div class="col-12 col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                          </div>
                          <div class="col-12 col-md-4">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-12 col-md-3">
                            <label for="correo">Email</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">
                          </div>
                          <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Ciudad</label>
                            <select class="form-control" id="validationCustom04" required>
                              <option selected disabled value="">Seleccione una ciudadd</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid state.
                            </div>
                          </div>

                          <div class="col-12 col-md-4">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">
                          </div>

                          <div class="col-12 col-md-3">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                          </div>

                          <div class="col-12 col-md-3">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese Usuario">
                          </div>

                          <div class="col-12">
                            <br>
                            <button class="btn btn-success" type="submit">Registrar</button>
                          </div>
                        </form>
                      </div>
                    </section>
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
  require_once("./template/FooterAdmin.php");
  ?>