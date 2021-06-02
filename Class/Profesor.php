<?php
require_once './Class/ConexionDB.php';
require_once 'Persona.php';

class Profesor extends Persona
{
    protected $nick;
    protected $imagen;
    protected $ipacceso;
    protected $estado;
   

    public function __construct($id,$nombre,$nick,$apellido,$email,$imagen,$ipacceso,$estado,$idadmin,$idLog) {
       
        $this->Id = $id;
        $this->Nombre = $nombre;
        $this->Nick = $nick;
        $this->Apellido = $apellido;
        $this->Email = $email;
        $this->Imagen = $imagen;
        $this->Ipacceso = $ipacceso;
        $this->Estado = $estado;
        $this->Admin = $idadmin;
        $this->Log = $idLog;
        
    }

    public function Insertarprofesor()
    {

    $id = $this->Id;
    $nombre = $this->Nombre;
    $nick = $this->Nick;
    $apellido = $this->Apellido;
    $email = $this->Email;
    $imagen = $this->Imagen;
    $ipacceso = $this->ipacceso;
    $estado = $this->Estado;
    $idadmin = $this->Admin;
    $idLog = $this->Log;

    $conexion = new ConexionDB();
    
    $conexion->EstalecerConexion()->query("INSERT INTO tbprofesor(IdProfesor, NomProfesor, NickProfesos, ApellidoProfesor, EmailProfesor, ImagenProfesor, IpAccesoProfesor, EstadoProfesor, idAdmin, IdLog) VALUES ('$id','$nombre','$nick','$apellido','$email','$imagen','$ipacceso','$estado','$idadmin','$idLog')");

    }

}

?>




    
   
   