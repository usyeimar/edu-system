<?php
// Primero conectamos siempre a la base de datos mysql
require '../../Class/ConexionDB.php';
$conexion = new ConexionDB();
// Sentencia SQL
$consulta = "SELECT * FROM tbusuarios";
 
//Envía una consulta a la base de datos
$resultado = $conexion->EstablecerConexion()->query($consulta);
// Obtenemos el número de filas
$total = mysqli_num_rows($resultado);
 
// Imprimimos en pantalla el número generado
echo 'El total de registros de la tabla es: '.$total.'';
?>  