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
        $sql = "SELECT * FROM tbusuarios (, 'NomUsuario', 'ApellidoUsuario', 'EmailUsuario', 'PassUsuario', 'CiudadUsuario', 'DireccionUsuario', 'TelefonoUsuario', 'DateCreate')";
        $Resultado = $Conexion->EstablecerConexion()->prepare($sql);
        $Resultado->execute();
        $UserData = 0;
        return $Resultado;

        
    }
}

?>