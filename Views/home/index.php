<?php

require_once'Views/templates/HeaderAdmin.php';

?>

<body>
    <div class="d-flex" id="content-wrapper">
        <?php
        require_once'Views/templates/SidebarAdmin.php';
        ?>
        <div class="w-100">
            <?php
            require_once'Views/templates/NavBarAdmin.php';
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
                                                        <a href="Usuarios">
                                                            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                                                                <div class="info">
                                                                    <h4>Usuarios</h4>
                                                                    <p><b>45</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Roles">
                                                            <div class="widget-small info coloured-icon"><i class="icon fas fa-user-tag fa-3x"></i>
                                                                <div class="info">

                                                                    <h4>Roles</h4>
                                                                    <p><b>25</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Archivos">
                                                            <div class="widget-small warning coloured-icon"><i class="icon fas fa-archive  fa-3x"></i>
                                                                <div class="info">
                                                                    <h4>Uploads</h4>
                                                                    <p><b>10</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="CategoriasFile">
                                                            <div class="widget-small danger coloured-icon"><i class="icon fas fa-folder-plus fa-3x"></i>
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
                                                        <a href="Notas">
                                                            <div class="widget-small secondary coloured-icon"><i class="icon fas fa-sticky-note fa-3x"></i>
                                                                <div class="info">
                                                                    <h4>Notas</h4>
                                                                    <p><b>5</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Clases">
                                                            <div class="widget-small light coloured-icon"><i class="icon fas fa-thumbs-up fa-3x"></i>
                                                                <div>
                                                                    <h4>Cursos</h4>
                                                                    <p><b>25</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Factura">
                                                            <div class="widget-small success coloured-icon"><i class="icon fas fa-wallet fa-3x"></i>
                                                                <div class="info">
                                                                    <h4>Facturas</h4>
                                                                    <p><b>10</b></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-3">
                                                        <a href="Configuracion">
                                                            <div class="widget-small dark coloured-icon"><i class="icon fas fa-users-cog fa-3x"></i>
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
    require_once("Views/templates/FooterAdmin.php");
    
    ?>