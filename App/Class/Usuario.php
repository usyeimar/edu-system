<?php

require_once 'ConexionDB.php';
require_once 'Persona.php';

class Usuario extends Persona
{
    private $Usuario;
    private $Password;

    public function __construct($id, $nombre, $apellido, $email, $password, $ciudad, $direccion, $telefono,$fechanacimiento, $usuario)
    {
        $this->Id = $id;
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->Email = $email;
        $this->Password = $password;
        $this->Ciudad = $ciudad;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
        $this->FechaNacimiento = $fechanacimiento;
        $this->Usuario = $usuario;
    }
    public function AgregarUsuario()
    {
        $id = $this->Id;
        $nombre = $this->Nombre;
        $apellido = $this->Apellido;
        $email = $this->Email;
        $password = $this->Password;
        $ciudad = $this->Ciudad;
        $direccion = $this->Direccion;
        $telefono = $this->Telefono;
        $fechanacimiento = $this ->FechaNacimiento;
        $usuario = $this->Usuario;

        $Conexion = new ConexionDB();
        $Conexion->EstablecerConexion()->query("INSERT INTO tbusuarios(idUsuario,NomUsuario,ApellidoUsuario,EmailUsuario,PassUsuario,CiudadUsuario,DireccionUsuario,TelefonoUsuario,FechaNacimineto) VALUES
        ($id,'$nombre','$apellido','$email','$password','$ciudad','$direccion','$telefono',$fechanacimiento,NOW())");
        echo "Datos registrados";
    }

    
}
