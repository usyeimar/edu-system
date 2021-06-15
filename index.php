<?php
session_start();
error_reporting(0);
$UserglobalSession = $_SESSION['usuario'];
if (isset($UserglobalSession)) {
  header("location: ./App/admin/Dashboard.php");
}else{
  require_once('./Views/login.php');
  require_once('');
}




?>