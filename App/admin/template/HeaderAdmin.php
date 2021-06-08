<?php
session_start();
error_reporting(0);
$UserSession = $_SESSION['usuario'];
$idUserSession = $_SESSION['idUsuario'];
if(!isset($UserSession)){
  header("location: ../../");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../Library/bootstrap4.3.1.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../Library/datatables.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="./assets/style.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
<!--Favicon Icon-->
<link  rel="icon"   href="./assets/img/usuario.png" type="image/png" />

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>.::Edu-System::.</title>
</head>