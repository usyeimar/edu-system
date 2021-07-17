<?php 
class Login extends Model
{


    public function __construct()
    {
        parent::__construct();
    }
    
    function ValidarUsuario($login,$password){
        $param = $this->db->Conexion()->prepare("SELECT * FROM tbusuario WHERE user=? AND password=?");
        $param->bind_param('ss',$a,$b);
       

    }
}
