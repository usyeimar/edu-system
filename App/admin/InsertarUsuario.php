<?php
require_once("../../Class/Usuario.php");
if(!empty($_POST)){
	if(isset($_POST["documento"]) &&isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["correo"]) &&isset($_POST["password"]) &&isset($_POST["ciudad"]) &&isset($_POST["direccion"]) &&isset($_POST["telefono"])&&isset($_POST["usuario"])){
		if($_POST["documento"]!=""&& $_POST["nombre"]!=""&&$_POST["apellido"]!=""&&$_POST["correo"]!=""&&$_POST["password"]!=""&&$_POST["ciudad"]!=""&&$_POST["direccion"]!="" &&$_POST["telefono"]!=""&&$_POST["usuario"]!=""){
			$id = trim($_POST['documento']);
			$nombre = trim($_POST['nombre']);
			$apellido = trim($_POST['apellido']);
			$correo = trim($_POST['correo']);
			$password = trim($_POST['password']);
			$ciudad = trim($_POST['ciudad']);
			$direccion = trim($_POST['direccion']);
			$telefono = trim($_POST['telefono']);
			$usuario = trim($_POST['usuario']);
			
			
			


            $RegistrarUsuario = new Usuario($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["password"],$_POST["ciudad"],$_POST["direccion"],$_POST["telefono"],$_POST["usuario"]);
            $RegistrarUsuario->AgregarUsuario();
		}
	}
}
?>
