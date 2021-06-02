<?php
require_once 'ConexionDB.php';
require_once 'Persona.php';

class RegistrarUsuario extends Persona
{
    protected $Usuario;
    protected $Password;
    
    public function __construct($nombre,$apellido,$usuario,$email,$idprivilegio,$password)
    {
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->Usuario = $usuario;
        $this->Email = $email;
        $this->Privilegio = $idprivilegio;
        $this->Password = $password;
        ini_set('date.timezone', 'America/Bogota');
        $this->FechaRegistro = date(DATE_RFC2822);
      
    
    }
    public function InsertarUsuario()
    {
        $nombre = $this->Nombre;
        $apellido = $this->Apellido;
        $usuario = $this->Usuario;
        $email = $this->Email;
        $idprivilegio = $this->Privilegio;
        $password = $this->Password;
        $fecharegistro = $this->FechaRegistro;

        $Conexion = New ConexionDB();
        $Conexion->EstalecerConexion()->query("INSERT INTO usuario(nombre, apellido , usuario ,email,id_privilegio,password ,fecha_registro) VALUES ('$nombre','$apellido','$usuario','$email','$idprivilegio','$password','$fecharegistro')");
        


    }
}

?>