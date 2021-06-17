<?php
require_once 'ConexionDB.php';
class Usuario  
{
    private $idUsuario;
    private $NomUsuario;
    private $ApellidoUsuario;
    private $EmailUsuario;
    private $PassUsuario;
    private $CiudadUsuario;
    private $DireccionUsuario;
    private $TelefonoUsuario;
    private $FechaNacimiento;

    public function __construct($idUsuario,$NomUsuario,$ApellidoUsuario,$EmailUsuario,$PassUsuario,$CiudadUsuario,$DireccionUsuario,$TelefonoUsuario,$FechaNacimiento) {
        $this->idUsuario = $idUsuario;
        $this->NomUsuario = $NomUsuario;
        $this->ApellidoUsuario = $ApellidoUsuario;
        $this->EmailUsuario = $EmailUsuario;
        $this->PassUsuario = $PassUsuario;
        $this->CiudadUsuario = $CiudadUsuario;
        $this->DireccionUsuario = $DireccionUsuario;
        $this->TelefonoUsuario = $TelefonoUsuario;
        $this->FechaNacimiento = $FechaNacimiento;
    }

    public function IngresarDatos(){
        $idUsuario = $this->idUsuario;
        $NomUsuario = $this->NomUsuario;
        $ApellidoUsuario = $this->ApellidoUsuario;
        $EmailUsuario = $this->EmailUsuario;
        $PassUsuario = $this->PassUsuario;
        $CiudadUsuario = $this->CiudadUsuario;
        $DireccionUsuario = $this->DireccionUsuario;
        $TelefonoUsuario = $this->TelefonoUsuario;
        $FechaNacimiento = $this->FechaNacimiento;

        $conexion = new ConexionDB();
        $conexion->EstablecerConexion()->query("INSERT INTO tbusuarios(
        idUsuario, 
        NomUsuario, 
        ApellidoUsuario, 
        EmailUsuario, 
        PassUsuario, 
        CiudadUsuario, 
        DireccionUsuario, 
        TelefonoUsuario, 
        FechaNacimiento
        )
        
        VALUES(
        $idUsuario,
        '$NomUsuario',
        '$ApellidoUsuario',
        '$EmailUsuario',
        '$PassUsuario',
        '$CiudadUsuario',
        '$DireccionUsuario',
        '$TelefonoUsuario',
        '$FechaNacimiento'
        )");
    }
}

?>