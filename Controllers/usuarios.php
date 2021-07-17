<?php
class Usuarios extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('usuarios/index');
    }

    function registrarUsuario()
    {
        echo "Alumno creado";
        $idUsuario = trim($_POST['documento']);
        $NomUsuario = trim($_POST['nombre']);
        $ApellidoUsuario = trim($_POST['apellido']);
        $EmailUsuario = trim($_POST['correo']);
        $PassUsuario = trim($_POST['password']);
        $CiudadUsuario = trim($_POST['ciudad']);
        $DireccionUsuario = trim($_POST['direccion']);
        $TelefonoUsuario = trim($_POST['telefono']);
        $FechaNacimiento = trim($_POST['fechanacimiento']);
        //$UsuarioSystem = trim($_POST['usuario']);
        
        if($this->model->insert([
            'documento' => $idUsuario,
            'nombre' => $NomUsuario,
            'apellido' => $ApellidoUsuario,
            'correo' => $EmailUsuario,
            'password' => $PassUsuario,
            'ciudad' => $CiudadUsuario,
            'direccion' => $DireccionUsuario,
            'telefono' => $TelefonoUsuario,
            'fechanacimiento' => $FechaNacimiento
            //'usuario' => $UsuarioSystem
            ])){
            //header('location: '.constant('URL').'nuevo/alumnoCreado');
            $this->view->mensaje = "Alumno creado correctamente";
            $this->view->render('nuevo/index');
        }else{
            $this->view->mensaje = "La matrícula ya está registrada";
            $this->view->render('nuevo/index');
        }
    }
}
