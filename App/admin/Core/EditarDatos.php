<?php
require_once("../../../Class/ConexionDB.php");
if (isset($_POST['actualizar'])) {
  $Conexion = new ConexionDB();
  try {

    $idUsuario = $_GET['IdUsuario'];
    $NomUsuario  = $_POST['Nombre'];
    $ApellidoUsuario = $_POST['Apellido'];
    $EmailUsuario = $_POST['Email'];
    $CiudadUsuario = $_POST['Ciudad'];
    $DireccionUsuario = $_POST['Direccion'];
    $TelefonoUsuario = $_POST['Telefono'];
    $FechaNacimiento = $_POST['FechaNa'];

  $sql = "UPDATE tbusuarios SET
    NomUsuario = '$NomUsuario',
    ApellidoUsuario = '$ApellidoUsuario',
    EmailUsuario = '$EmailUsuario',
    CiudadUsuario = '$CiudadUsuario',
    DireccionUsuario = '$DireccionUsuario',
    TelefonoUsuario = '$TelefonoUsuario',
    FechaNacimiento = '$FechaNacimiento'
  WHERE idUsuario = '$idUsuario'";
  $query = $Conexion->EstablecerConexion()->query($sql);