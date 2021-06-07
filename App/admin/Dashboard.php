<?php
require_once("./template/HeaderAdmin.php");

// Primero conectamos siempre a la base de datos mysql
require '../../Class/ConexionDB.php';
$conexion = new ConexionDB();
// Sentencia SQL
$consulta = "SELECT * FROM tbusuarios";
$consulta1 = "SELECT * FROM tbcategoria";
$consulta2 = "SELECT * FROM tbcursos";
$consulta3 = "SELECT * FROM tbprivilegios";
$consulta4 = "SELECT * FROM tblog";
$consulta5 = "SELECT * FROM tbfactura";

//Envía una consulta a la base de datos
$resultado = $conexion->EstablecerConexion()->query($consulta);
// Obtenemos el número de filas
$total = mysqli_num_rows($resultado);

  
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
                                <h1 class="font-weight-bold mb-0" id="tablaGestorArchivos"> <i class="fas fa-tachometer-alt"></i> Dashboard</h1>
                                <p class="lead text-muted">Explorar Soluciones </rp>

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
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Usuario.php">
                                                        <div class="widget-small btn btn-primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Usuarios</h4>
                                                                <p><b><?php echo $total ?></b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Roles.php">
                                                            <div class="widget-small btn btn-info coloured-icon"><i class="icon fas fa-user-tag fa-3x"></i>
                                                                <div>

                                                                    <h4>Roles</h4>
                                                                    <p><b>25</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Archivos.php">
                                                        <div class="widget-small btn btn-warning coloured-icon"><i class="icon fas fa-archive  fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Uploads</h4>
                                                                <p><b>10</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="CategoriaFile.php">
                                                        <div class="widget-small btn btn-danger coloured-icon"><i class="icon fas fa-folder-plus fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Categorias</h4>
                                                                <p><b>500</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="shadow p-3 mb-4 bg-body rounded">
                                            <section>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Notas.php">
                                                        <div class="widget-small btn btn-secondary coloured-icon"><i class="icon fas fa-sticky-note fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Notas</h4>
                                                                <p><b>5</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Cursos.php">
                                                        <div class="widget-small btn btn-light coloured-icon"><i class="icon fas fa-thumbs-up fa-3x"></i>
                                                            <div>
                                                                <h4>Cursos</h4>
                                                                <p><b>25</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Factura.php">
                                                        <div class="widget-small btn btn-success coloured-icon"><i class="icon fas fa-wallet fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Facturas</h4>
                                                                <p><b>10</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                    <a href="Configuracion.php">
                                                        <div class="widget-small btn btn-dark coloured-icon"><i class="icon fas fa-users-cog fa-3x"></i>
                                                            <div class="info">
                                                                <h4>Configuracion</h4>
                                                                <p><b>500</b></p>
                                                            </div>
                                                        </div>
                                                    </a>
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
    require_once("./template/FooterAdmin.php");
    require_once("./Modals/ModalArchivos.php");
    ?>