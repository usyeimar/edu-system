<?php
echo $id = trim($_POST['documento']);
echo "<br>";
echo $nombre = trim($_POST['nombre']);
echo "<br>";
echo $apellido = trim($_POST['apellido']);
echo "<br>";
echo $correo = trim($_POST['correo']);
echo "<br>";
echo $password = trim($_POST['password']);
echo "<br>";
echo $ciudad = trim($_POST['ciudad']);
echo "<br>";
echo $direccion = trim($_POST['direccion']);
echo "<br>";
echo $telefono = trim($_POST['telefono']);
echo "<br>";
echo $usuario = trim($_POST['usuario']);
echo "<br>";


require_once '../../Class/Usuario.php';
require_once '../../Class/prueba.php';
//$RegistrarUsuario = new Usuario($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["password"],$_POST["ciudad"],$_POST["direccion"],$_POST["telefono"],$_POST["usuario"]);
//$RegistrarUsuario->AgregarUsuario();
$prueba = new prueba($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["password"],$_POST["ciudad"],$_POST["direccion"],$_POST["telefono"],$_POST["usuario"]);
$prueba->IngresarDatos();


//if(!empty($_POST)){
//	if(isset($_POST["documento"]) &&isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["correo"]) &&isset($_POST["password"]) &&isset($_POST["ciudad"]) &&isset($_POST["direccion"]) &&isset($_POST["telefono"])&&isset($_POST["usuario"])){
//		if($_POST["documento"]!=""&& $_POST["nombre"]!=""&&$_POST["apellido"]!=""&&$_POST["correo"]!=""&&$_POST["password"]!=""&&$_POST["ciudad"]!=""&&$_POST["direccion"]!="" &&$_POST["telefono"]!=""&&$_POST["usuario"]!=""){
//			
//			
//		}
//	}
//}
?>
