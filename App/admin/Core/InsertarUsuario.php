<?php
//require_once '../../Class/Usuario.php';
require_once '../../Class/ConexionDB.php';
require_once '../../Class/Users.php';
$Conexion = new ConexionDB();

if (isset($_POST['btnAgregar'])) {
    $idUsuario = trim($_POST['documento']);
    $NomUsuario = trim($_POST['nombre']);
    $ApellidoUsuario = trim($_POST['apellido']);
    $EmailUsuario = trim($_POST['correo']);
    $PassUsuario = trim($_POST['password']);
    $CiudadUsuario = trim($_POST['ciudad']);
    $DireccionUsuario = trim($_POST['direccion']);
    $TelefonoUsuario = trim($_POST['telefono']);
    $FechaNacimiento = trim($_POST['fechanacimiento']);
    $UsuarioSystem = trim($_POST['usuario']);
    $AgregarUsuario = new Usuario($idUsuario,$NomUsuario,$ApellidoUsuario,$EmailUsuario,$PassUsuario,$CiudadUsuario,$DireccionUsuario, $TelefonoUsuario,$FechaNacimiento,$UsuarioSystem);
    $AgregarUsuario->IngresarDatos();
    if ($AgregarUsuario->IngresarDatos()) {
        header("location: ../../");
    }
   
}
