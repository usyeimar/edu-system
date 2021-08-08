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
                                            <div class="row user">
                                                <div class="col-md-12">
                                                    <div class="profile">
                                                        <?php
                                                        //require_once("../../Class/ConexionDB.php");
                                                        //$Conexion = new ConexionDB();
                                                        //$NomUser = $_SESSION['usuario'];
                                                        //$sql = "SELECT * FROM tbusuarios WHERE NomUsuario = '$NomUser'";
                                                        //$consulta = $Conexion->EstablecerConexion()->query($sql);
                                                        //$resultado = mysqli_fetch_array($consulta);
                                                        //$imagen = $resultado['AvatarUsuario'];

                                                        ?>
                                                        <?php //$imagen = "images/2AE2G3R.jpg"; 
                                                        ?>
                                                        <div class="info"><img class="user-img" src="<?php //echo $imagen; 
                                                                                                        ?>">
                                                            <h4><?php //echo strtoupper($resultado['NomUsuario'] . " " . ucwords($resultado['ApellidoUsuario'])); 
                                                                ?></h4>
                                                            <p>FrontEnd Developer</p>
                                                            <button class="btn btn-primary shadow-lg " type="button" data-toggle="modal" data-target="#ModalAvatar"><i class="fas fa-sync-alt"></i> Cambiar Avatar</button>

                                                        </div>
                                                        <div class="cover-image" src=""></div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="tile p-0">
                                                        <ul class="nav flex-column nav-tabs user-tabs">
                                                            <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Datos Personales</a></li>
                                                            <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Historial del Sistema</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="user-timeline">
                                                            <h4>DATOS PERSONALES <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#ModalUpdateUsuario" type="button"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></h4>
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 150px;">Identificacion</td>
                                                                        <td><?php echo $resultado['idUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre:</td>
                                                                        <td><?php echo $resultado['NomUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Apellidos :</td>
                                                                        <td><?php echo $resultado['ApellidoUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email(Usuario) :</td>
                                                                        <td><?php echo $resultado['EmailUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Contraseña :</td>
                                                                        <td><?php echo $resultado['PassUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ciudad :</td>
                                                                        <td><?php echo $resultado['CiudadUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Direccion :</td>
                                                                        <td><?php echo $resultado['DireccionUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Telefono :</td>
                                                                        <td><?php echo $resultado['TelefonoUsuario']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fecha Nacimiento :</td>
                                                                        <td><?php echo $resultado['FechaNacimiento']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fecha de Registro :</td>
                                                                        <td><?php echo $resultado['FechaInsert']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="tab-pane fade" id="user-settings">
                                                            <div class="shadow p-3 mb-2 bg-body rounded">
                                                                <div class="tile user-settings">
                                                                    <h4 class=" tile-title">MI INFORMACION</h4>
                                                                    <h4 class="line-head"></h4>


                                                                    <div class="tab-pane fade" id="user-password-reset">
                                                                        <form>
                                                                            <div class="shadow p-3 mb-2 bg-body rounded">
                                                                                <div class="row">
                                                                                    <div class="col-md-10">
                                                                                        <div class="tile">
                                                                                            <h3 class="tile-title">ACTUALIZAR MI CONTRASEÑA</h3>
                                                                                            <div class="tile-body">
                                                                                                <form>
                                                                                                    <div class="form-group">
                                                                                                        <label for="password" class="control-label">Contraseña</label>
                                                                                                        <input class="form-control" type="password" placeholder="Nueva contraseña" name="password" id="password" </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="control-label"></label>
                                                                                                            <input class="form-control" type="password" placeholder="Ingrese de nuevo su contraseña">
                                                                                                        </div>
                                                                                                        <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                                                                                                </form>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
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
                    </div>
                </section>
            </div>
        </div>


        <?php
        require_once("Views/Modals/CrearUsuario.php");
        require_once("Views/Modals/SubirAvatar.php");
        require_once("Views/templates/FooterAdmin.php");

        //require_once("./Core/ActualizarAvatar.php");

        ?>
    </div>