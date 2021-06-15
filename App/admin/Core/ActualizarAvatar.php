<?php
session_start();
include('../../../Class/ConexionDB.php');
$Conexion = new ConexionDB();
$imagen = $_FILES['imagen'];
$directorio_destino = "uploads/images";

$tmp_name = $imagen['tmp_name'];


$img_file = $imagen['name'];
$img_type = $imagen['type'];
//echo 1;
// Si se trata de una imagen   
if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
    strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
    //¿Tenemos permisos para subir la imágen?
    //echo 2;
    $destino = $directorio_destino . '/' .  $img_file;
    $NomUser = $_SESSION['usuario'];
    $sql = "UPDATE tbusuarios SET AvatarUsuario = '$destino' WHERE NomUsuario = '$NomUser'";
    $Conexion->EstablecerConexion()->query($sql);
    (move_uploaded_file($tmp_name, $destino));
?>
    <script type="text/javascript">
       
        window.location = "perfil.php";
        
        
        
    </script>
<?php

}

?>