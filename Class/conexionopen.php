<?php

$host = "localhost";
$user = "root";
$pass = "";
$DB = "edusystemdb";

$conexion = new mysqli($host,$user,$pass,$DB);

error_reporting(0);
if($conexion->connect_errno) {

    echo "lo sentimos, huvo un error al conexion ";

}
?>