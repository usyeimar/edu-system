<?php
require_once("ConexionDB.php");

class MostrarDatos extends ConexionDB
{
    public function __construct()
    {
        
    }
    
    public function ObtenerUsuarios()
    {


        $Conexion = new ConexionDB();
        $sql = "SELECT * FROM tbusuarios"; 
        $Resultado = $Conexion->EstablecerConexion()->query($sql);
        return $Resultado;

        
    }
    

    public function ContarRegistros()
    {
        
        $conexion = new ConexionDB();
        // Sentencia SQL
        $consulta = "SELECT * FROM tbusuarios";
        
        //Envía una consulta a la base de datos
        $resultado = $conexion->EstablecerConexion()->query($consulta);
        // Obtenemos el número de filas
        $total = mysqli_num_rows($resultado);
        
        // Imprimimos en pantalla el número generado
        echo 'El total de registros de la tabla es: '.$total.'';
    }
}

?>