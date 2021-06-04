<?php
session_start();
require_once("../../../Class/Categoria.php");
$Categoria = new Categorias();
$datos = array(
    "idUsuario"=> $_SESSION['idUsuario'],
    "categoria" => $_POST['categoria'] 

);
echo $Categoria->AgregarCategoria($datos);
?>