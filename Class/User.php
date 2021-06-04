<?php

include_once 'ConexionDB.php';

class User extends ConexionDB{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $md5pass = md5($pass);

        $query = $this->EstablecerConexion()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        // if($query->rowCount({
        //     return true;
        // }else{
        //     return false;
        // }
    }

    public function setUser($user){
        $query = $this->EstablecerConexion()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>
