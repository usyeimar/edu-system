<?php
if(!empty($_POST)){
	if(isset($_POST["IdUsuario"]) &&isset($_POST["Nombre"]) &&isset($_POST["Apellido"]) &&isset($_POST["Email"]) &&isset($_POST["Ciudad"]) &&isset($_POST["Direccion"]) &&isset($_POST["Telefono"]) &&isset($_POST["FechaNa"])){
		if($_POST["Nombre"]!=""&& $_POST["Apellido"]!=""&&$_POST["Direccion"]!=""){
			require_once("../../../Class/ConexionDB.php");
			
			$sql = "UPDATE tbusuarios SET NomUsuario=\"$_POST[Nombre]\",ApellidoUsuario=\"$_POST[Apellido]\",EmailUsuario=\"$_POST[Email]\",DireccionUsuario=\"$_POST[Direccion]\",TelefonoUsuario=\"$_POST[Telefono]\",FechaNacimiento=\"$_POST[FechaNa]\" WHERE id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}


 
?>
// require_once("../../../Class/ConexionDB.php");
// $Conexion = new ConexionDB();

// $idUsuario = $_POST['IdUsuario'];
// $NomUsuario  = $_POST['Nombre'];
// $ApellidoUsuario = $_POST['Apellido'];
// $EmailUsuario = $_POST['Email'];
// $CiudadUsuario = $_POST['Ciudad'];
// $DireccionUsuario = $_POST['Direccion'];
// $TelefonoUsuario = $_POST['Telefono'];
// $FechaNacimiento = $_POST['FechaNa'];

// $query = $Conexion->EstablecerConexion()->prepare("UPDATE tbusuarios SET NomUsuario = :Nombre,ApellidoUsuario = :Apellido,EmailUsuario = :Email,CiudadUsuario = :Ciudad,DireccionUsuario = :Direccion,TelefonoUsuario = :Telefono,FechaNacimiento = :FechaNa WHERE idUsuario = :IdUsuario;");
// $query->bind_Param(':IdUsuario',$idUsuario);
// $query->bind_Param(':Nombre',$NomUsuario);
// $query->bind_Param(':Apellido',$ApellidoUsuario);
// $query->bind_Param(':Email',$EmailUsuario);
// $query->bind_Param(':Ciudad',$CiudadUsuario);
// $query->bind_Param(':Direccion',$DireccionUsuario);
// $query->bind_Param(':Telefono',$TelefonoUsuario);
// $query->bind_Param(':FechaNa',$FechaNacimiento);


// if ($query->execute()) {
//     return header("location: Perfil.php");
// }
// else{
//     return "Error";
// }