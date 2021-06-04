<?php 
    $_id = $_GET['idNota'];

    include_once("clasess/conexionopen.php");
    $query = "DELETE FROM tbnotas WHERE idNota = '$_id'";
    $registro = mysqli_query($conexion, $query);
    header("location:notas.php");
?>