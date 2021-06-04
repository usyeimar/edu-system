<?php
require_once('ConexionDB.php');

class ValidarUsuarios
{
    private $user;
    private $pass;
    public function __construct($user,$pass) {
        $this->user = $user;
        $this->pass = $pass;
        
    }
    public function LoginUsuario()
    {
        $user = $this->user;
        $pass = $this->pass;
        $Conexion = new ConexionDB();
        $sql ="SELECT COUNT(*) as UserExist FROM tbusuarios WHERE NomUsuario = '$user' AND PassUsuario = '$pass'";
        $query =$Conexion->EstablecerConexion()->query($sql);
        return $query;
        
    }
    public function CrearSessionId()
    {
        $user = $this->user;
        $pass = $this->pass;
        $Conexion = new ConexionDB();
        $idsql = "SELECT idUsuario FROM tbUsuarios WHERE NomUsuario = '$user' AND PassUsuario = '$pass'";
        $idquerySession =$Conexion->EstablecerConexion()->query($idsql);
        $idUsusario = mysqli_fetch_row($idquerySession)[0];
        return $idUsusario;
    }
    
}
