<?php
class User extends Model
{


    public function __construct()
    {
        parent::__construct();
    }
    public function insert($datos)
    {
        $query = $this->db->Conexion()->prepare('INSERT INTO tbusuarios(
            idUsuario,
            NomUsuario,
            ApellidoUsuario,
            EmailUsuario,
            PassUsuario,
            CiudadUsuario,
            DireccionUsuario,
            TelefonoUsuario,
            FechaNacimineto)
            VALUES(
            :documento,
            :nombre,
            :apellido,
            :correo,
            :password,
            :ciudad,
            :direccion,
            :telefono,
            $fechanacimiento,
            NOW())');
        echo 'Insertar datos en la DB';
        $query->execute([
            'documento' => $datos['documento'],
            'nombre' => $datos['nombre'],
            'apellido' => $datos['apellido'],
            'correo' => $datos['correo'],
            'password' => $datos['password'],
            'ciudad' => $datos['ciudad'],
            'direccion' => $datos['direccion'],
            'telefono' => $datos['telefono'],
            'fechanacimiento' => $datos['fechanacimiento']
        ]);
    }
}
