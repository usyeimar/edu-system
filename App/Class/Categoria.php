<?php
require_once("ConexionDB.php");
class Categorias extends ConexionDB{


    public function AgregarCategoria($datos){
        $Conexion = new ConexionDB();
        $sql = "INSERT INTO tbCategoria_file (idUsuario,NomCAtegoria) VALUES(?,?)";
        $query = $Conexion->EstablecerConexion()->prepare($sql);
        $query->bind_param("is",
        $datos['idUsuario'],
        $datos['categoria']);
        
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }
} 



?>