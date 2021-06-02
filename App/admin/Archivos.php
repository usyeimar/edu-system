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
                <h1 class="font-weight-bold mb-0">Administrador de Archivos</h1>
                <p class="lead text-muted">Revisa la última información</p>
              </div>
              
            </div>
          </div>
        </section>

        <section>
          
        </section>

      </div>

    </div>
  </div>

  <?php
  require_once("./template/FooterAdmin.php");
  ?>