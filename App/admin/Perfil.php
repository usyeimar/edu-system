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

                                <h1 class="font-weight-bold mb-0" id="tablaGestorArchivos">Mi Perfil</h1>
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

                                        <section>
                                            <main class="app-content">

                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <div class="profile">
                                                            <div class="info"><img class="user-img" src="">
                                                                <h4><?php echo $UserSession?></h4>
                                                                <p>FrontEnd Developer</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="tile p-0">
                                                            <ul class="nav flex-column nav-tabs user-tabs  nav-pills ">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#user-timeline" role="tab" aria-controls="pills-home" aria-selected="true">Historial De Ingresos</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#user-settings" role="tab" aria-controls="pills-profile" aria-selected="false">Perfill</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#user-password-reset" role="tab" aria-controls="pills-profile" aria-selected="false">Actualizar Contraseña</a>
                                                                </li>
                                                            </ul>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="user-timeline">
                                                                <h4>Registro de ingresos al sistema</h4>
                                                            </div>
                                                            <div class="tab-pane fade" id="user-settings">
                                                                <div class="shadow p-3 mb-2 bg-body rounded">
                                                                    <div class="tile user-settings">
                                                                        <h4 class="line-head">Mi Informacion</h4>
                                                                        <form>
                                                                            <div class="row mb-4">
                                                                                <div class="col-md-4">
                                                                                    <label for="idUsuario">Documento</label>
                                                                                    <input class="form-control" name="IdUsario" id="idUsuario" type="text" required="" placeholder="Documento">
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <label>Nombre</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Nombre">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Apellido</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Apellido">
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Correo</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Correo">
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Ciudad</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Ciudad">
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Direccion</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Direccion">
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Telefono</label>
                                                                                    <input class="form-control" type="text" required="" placeholder="Telefono">
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="col-md-8 mb-4">
                                                                                    <label>Fecha Nacimiento</label>
                                                                                    <input class="form-control" type="date" required="" placeholder="Fecha de Nacimiento">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-10">
                                                                                <div class="col-md-12">
                                                                                    <button class="btn btn-info" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Actualizar</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="user-password-reset">
                                                                <form>
                                                                <h4 class="line-head">Actualizar Contraseña</h4>
                                                                <div class="form-group">
                                                                        <label for="exampleInputPassword1">Nueva Contraseña</label>
                                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Password</label>
                                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                                                    </div>
                                                                   
                                                                    <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                                                                </form>
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
                </section>
            </div>
        </div>


        <?php

        require_once("./template/FooterAdmin.php");
        require_once("./Modals/ModalNotas.php");
        ?>
    </div>