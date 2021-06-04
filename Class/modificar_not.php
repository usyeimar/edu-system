

<?php
include_once("./include/header.php");
include_once("class/conexionopen.php");
?>
<div class="row">
    <div class="col-4 col-md-5"></div>
    <?php
 
    if (isset($_GET['idNota'])) {
        $_id = $_GET['idNota'];
        $seleccionar = mysqli_query($conexion, "SELECT * FROM tbnotas WHERE idNota = '$_id'");

        if (mysqli_num_rows($seleccionar) == 1) {
            $row = mysqli_fetch_array($seleccionar);
            $_titulo = $_POST['TitleNota'];
            $_descripcion = $_POST['DescripNota'];
            $_estado = $_POST['EstadoNota'];
            $_admin = $_POST['idAdmin'];
            $_alumno = $_POST['idAlumno'];
            $_profesor = $_POST['idProfesor'];
        }
    }
    if (isset($_POST['btnmodificar'])) {
        $_titulo = $_POST['TitleNota'];
        $_descripcion = $_POST['DescripNota'];
        $_estado = $_POST['EstadoNota'];
        $_admin = $_POST['idAdmin'];
        $_alumno = $_POST['idAlumno'];
        $_profesor = $_POST['idProfesor'];
        mysqli_query($conexion, "UPDATE tbnotas SET TitleNota = '$_titulo', DescripNota = '$_descripcion', EstadoNota = '$_estado', idAdmin = '$_admin' , idAlumno = '$_alumno', idProfesor = '$_profesor' WHERE id = '$_id'");
        header("location:notas.php");
    }
    ?>
    <div class="col-4 col-md-2">
        <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="post">
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
            <input type="text" name="idProfesor" id="idProfesor" class="form-control" placeholder="Profesor"><br><br>
            <input type="submit" value="modificar" class="btn btn-primary" name="btnmodificar">
        </form>
    </div>
    <div class="col-4 col-md-5"></div>
</div>



<?php
include_once("./include/footer.php");
?>

