<?php

// session_start();
// error_reporting(0);
// $UserSession = $_SESSION['usuario'];
// $idUserSession = $_SESSION['idUsuario'];
// require_once("../../Class/ConexionDB.php");
// $Conexion = new ConexionDB();
// $NomUser = $_SESSION['usuario'];
// $sql = "SELECT * FROM tbusuarios WHERE NomUsuario = '$NomUser'";
// $consulta = $Conexion->EstablecerConexion()->query($sql);
// $resultado = mysqli_fetch_array($consulta);
// $imagen = $resultado['AvatarUsuario'];

// if (!isset($UserSession)) {
//   header("location: ../../");
// }
// $sql = "SELECT * FROM tbusuarios WHERE NomUsuario = '$UserSession'";
// $query = $Conexion->EstablecerConexion()->query($sql);

// $UserData = mysqli_fetch_array($query);
// $imagen = $UserData['AvatarUsuario'];
$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/');
$url = explode('/', $url);

$title  = $url[0];
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Public/Libraries/datatables.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>/Public/css/default.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
  <!--Favicon Icon-->
  <link  rel="icon"    href="./assets/img/usuario.png" type="image/png" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Sistema de educacion |
    <?php echo $title; ?>
  </title>
</head>