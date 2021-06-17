<?php
require_once '../App/admin/template/HeaderAdmin.php';
?>
<?php
require_once '../Class/conexionopen.php';
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
                <div class="row">
                    <div class="col-3 col-md-2"></div>
                    <div class="col-3 col-md-5">
                        <form action="notas.php" method="POST">
                            <label for="idNota"> id:</label>
                            <input type="text" name="idNota" id="idNota" class="form-control" placeholder="id">
                            <label for="TitleNota"> nombre:</label>
                            <input type="text" name="TitleNota" id="TitleNota" class="form-control" placeholder="Titulo">
                            <label for="descripcion"> descripcion:</label>
                            <input type="text" name="DescripNota" id="DescripNota" class="form-control" placeholder="descripcion">
                            <label for="EstadoNota"> estado:</label>
                            <input type="text" name="EstadoNota" id="EstadoNota" class="form-control" placeholder="estado">
                            <label for="idAdmin"> administrador:</label>
                            <input type="text" name="idAdmin" id="idAdmin" class="form-control" placeholder="Admin">
                            <label for="idAlumno"> Alumno:</label>
                            <input type="text" name="idAlumno" id="idAlumno" class="form-control" placeholder="Alumno">
                            <label for="idProfesor"> Profesor:</label>
                            <input type="text" name="idProfesor" id="idProfesor" class="form-control" placeholder="Profesor"><br>
                            <input type="submit" value="Ingresar" class="btn btn-primary" name="btningresar">
                        </form>
                        <?php
                        if (isset($_POST['btningresar'])) {
                            $_id = $_POST['idNota'];
                            $_titulo = $_POST['TitleNota'];
                            $_descripcion = $_POST['DescripNota'];
                            $_estado = $_POST['EstadoNota'];
                            $_admin = $_POST['idAdmin'];
                            $_alumno = $_POST['idAlumno'];
                            $_profesor = $_POST['idProfesor'];
                            $conexion->query("INSERT INTO tbnotas (idNota, TitleNota, DescripNota, EstadoNota, idAdmin, idAlumno, idProfesor) VALUES('$_id','$_titulo','$_descripcion','$_estado','$_admin','$_alumno','$_profesor')");
                        }
                        ?>
                    </div>
                    <div class="col-4 col-md-5">
                        <center>
                            <form action="buscar_not.php" method="post">
                                <label for="Buscar">Buscar por nombre</label>
                                <input type="text" name="buscar" id="Buscar" class="form-control" placeholder="Ingrese nombre del producto"><br>
                                <button class="btn btn-success">Buscar</button>
                            </form>
                        </center>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-4 col-md-6">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITULO</th>
                                <th>DESCRIPCION</th>
                                <th>ESTADO</th>
                                <th>ADMIN</th>
                                <th>ALUMNO</th>
                                <th>PROFE</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM tbnotas";
                            $mostrar = mysqli_query($conexion, $query);
                            while ($consulta = mysqli_fetch_array($mostrar)) {
                            ?>
                                <tr>
                                    <td><?php echo $consulta['idNota']; ?></td>
                                    <td><?php echo $consulta['TitleNota']; ?></td>
                                    <td><?php echo $consulta['DescripNota']; ?></td>
                                    <td><?php echo $consulta['EstadoNota']; ?></td>
                                    <td><?php echo $consulta['idAdmin']; ?></td>
                                    <td><?php echo $consulta['idAlumno']; ?></td>
                                    <td><?php echo $consulta['idProfesor']; ?></td>
                                    <td><a href="eliminar_not.php?id=<?php echo $consulta['idNota']; ?>"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a><a href="modificar_not.php?id=<?php echo $consulta['idNota']; ?>"><button class="btn btn-success"><i class="fas fa-marker"></i></button></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-4 col-md-3"></div>
            </div><br><br><br><br><br><br>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <footer>
            <div class="container-footer-all">
                <div class="conteiner-body">
                    <div class="colum1">
                        <h1> mas informacion de la empresa </h1>
                        <p>
                            Nuestros expertos en análisis, tecnología y negocios
                            desbloquearán el valor de sus datos para alcanzar su
                            máximo rendimiento en la era digital.</p>
                        <p>Para hacer frente a los problemas complejos,
                            que diseñamos soluciones humana centros para entregar
                            cada vez más ambiciosos proyectos de datos.</p>
                    </div>
                    <div class="colum2">
                        <h1> Redes sociales </h1>
                        <div class="row">
                            <img src="icons/descarga.png">
                            <label>siguenos en facebook</label>
                        </div>
                        <div class="row">
                            <img src="icons/instagram.jpg">
                            <label>siguenos en instagram</label>
                        </div>
                        <div class="row">
                            <img src="icons/twitter.png">
                            <label>siguenos en twiter</label>
                        </div>
                        <div class="row">
                            <img src="icons/google.jpg">
                            <label href="https://es-la.facebook.com/r.php">siguenos en google plus</label>
                        </div>
                    </div>
                    <div class="colum3">
                        <h1>informacion contactos</h1>
                        <div class="row2">
                            <img src="icons/home.png">
                            <label>Data Learning,
                                republica de colombia
                                cll 59a 30-04</label>
                        </div>
                        <div class="row2">
                            <img src="icons/tele.png">
                            <label>+57 3215154011</label>
                        </div>
                        <div class="row2">
                            <img src="icons/message.png">
                            <label>adminyeimardb@gmail.com</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <div class="copyright">
                    2018 Todos los derechos reservado | <a href=""> login </a>
                </div>
                <div class="information">
                    <a href=""> Informacion compañia </a> | <a href=""> Politicas y Politicas </a> | <a href=""> Terminos y condiciones </a>
                </div>
            </div>
    </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
</div>