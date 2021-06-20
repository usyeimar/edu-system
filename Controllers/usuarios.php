<?php
class Usuarios extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('usuarios/index');
    }

    function registrarUsuario()
    {
        echo"Alumno creado";
        $idUsuario = trim($_POST['documento']);
        $NomUsuario = trim($_POST['nombre']);
        $ApellidoUsuario = trim($_POST['apellido']);
        $EmailUsuario = trim($_POST['correo']);
        $PassUsuario = trim($_POST['password']);
        $CiudadUsuario = trim($_POST['ciudad']);
        $DireccionUsuario = trim($_POST['direccion']);
        $TelefonoUsuario = trim($_POST['telefono']);
        $FechaNacimiento = trim($_POST['fechanacimiento']);
        $UsuarioSystem = trim($_POST['usuario']);
        $this->model->UserInsert(['documento'=>$idUsuario,]);

    }

    
    

}
