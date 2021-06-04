<?php
require_once("./Class/Usuario.php");
if (isset($_POST['btnAgregar'])) {
     $id = trim($_POST['documento']);
     $name = trim($_POST['nombre']);
     $apellido = trim($_POST['apellido']);
     $email = trim($_POST['correo']);
     $password = trim($_POST['password']);
     $ciudad = trim($_POST['ciudad']);
     $direccion = trim($_POST['direccion']);
     $telefono = trim($_POST['telefono']);
     $usuario = trim($_POST['usuario']);

    $RegistrarUsuario = new RegistrarUsuario($id,$name,$apellido,$email,$password,$ciudad,$direccion,$telefono,$usuario);
    $RegistrarUsuario->AgregarUsuario();
}
