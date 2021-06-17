<?php
include_once("layout.php");
include_once("clasess/conexionDB.php");
?>

<div class="row">
    <div class="col-4 col-md-4"></div>
    <div class="col-4 col-md-4">

    <?php 
        $_id = $_POST['buscar'];

        $_buscar = mysqli_query($conexion, "SELECT * FROM tbnotas WHERE TitleNota LIKE '$_id%'");
        $consulta = mysqli_fetch_array($_buscar);

    ?>
        <table class="table table-hover">
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
                <tr>
                        <td><?php echo $consulta['idNota']; ?></td>
                        <td><?php echo $consulta['TitleNota']; ?></td>
                        <td><?php echo $consulta['DescripNota']; ?></td>
                        <td><?php echo $consulta['EstadoNota']; ?></td> 
                        <td><?php echo $consulta['idAdmin']; ?></td>
                        <td><?php echo $consulta['idAlumno']; ?></td>
                        <td><?php echo $consulta['idProfesor']; ?></td>  
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-4 col-md-4"></div>
</div>


