<?php
require_once '../App/admin/template/HeaderAdmin.php';
?>
<?php 
require_once '../../edu-system/Class/conexionopen.php'
?>

<body>
  <div class="d-flex" id="content-wrapper">

    <?php
    require_once '../App/admin/template/SidebarAdmin.php';
    ?>
    <div class="w-100">

      <?php
      require_once '../App/admin/template/NavBarAdmin.php'
      ?>
      <?php
      require_once '../Formalumn.php';
      ?>


      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">
        <?php //estableciendo conexion y insertando los datos
        if (isset($_POST['btningresa'])) {
          require_once '../Class/Estudiante.php';
          $ingresar = new  Estudiante($_POST['IdAlumno'], $_POST['NomAlumno'], $_POST[' ApellidoAlumno'], $_POST['EmailAlumno'], $_POST[' PassAlumno'], $_POST[' CiudadAlumno'], $_POST[' DireccionAlumno'], $_POST[' TelefonoAlumno'], $_POST[' idAdmin'], $_POST['IdLog']);
          $ingresar->Insertarestudiante();
          print "<center>Producto Ingresado Correctamente</center>";
        }

        ?>

      </div>
    </div>
  </div>
  </div>


  <?php
  require_once '../App/admin/template/FooterAdmin.php';
  ?>