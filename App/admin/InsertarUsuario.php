<?php
require_once("../../Class/Usuario.php");
if(!empty($_POST)){
	if(isset($_POST["documento"]) &&isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["correo"]) &&isset($_POST["password"]) &&isset($_POST["ciudad"]) &&isset($_POST["direccion"]) &&isset($_POST["telefono"])&&isset($_POST["usuario"])){
		if($_POST["documento"]!=""&& $_POST["nombre"]!=""&&$_POST["apellido"]!=""){
			
            $RegistrarUsuario = new RegistrarUsuario($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["password"],$_POST["ciudad"],$_POST["direccion"],$_POST["telefono"],$_POST["usuario"]);
            $RegistrarUsuario->AgregarUsuario();
		}
	}
}
?>
