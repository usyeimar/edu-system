<?php
require_once("../../Class/ConexionDB.php");
$conexion = new ConexionDB();
$ObtenerDatos= $conexion->EstablecerConexion();
$sql = "SELECT * FROM tbusuarios (, 'NomUsuario', 'ApellidoUsuario', 'EmailUsuario', 'PassUsuario', 'CiudadUsuario', 'DireccionUsuario', 'TelefonoUsuario', 'DateCreate')";
$ObtenerDatos->query($sql);

echo $ObtenerDatos['NomUsuario'];
