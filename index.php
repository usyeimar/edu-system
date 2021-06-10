<?php
session_start();
error_reporting(0);
$UserglobalSession = $_SESSION['usuario'];
if (isset($UserglobalSession)) {
  header("location: ./App/global/Dashboard.php");
}else{
  require_once('./Class/ValidarUsuario.php');
  require_once('./Views/login.php');
}




?>