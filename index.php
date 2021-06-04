<?php
session_start();
error_reporting(0);
$UserSession = $_SESSION['usuario'];
if (isset($UserSession)) {
  header("location: ./App/admin/AdminPanel.php");
}else{
  require_once('./Class/ValidarUsuario.php');
  require_once('./Views/login.php');
}




?>