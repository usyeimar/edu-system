<?php
require_once("../Class/ValidarUsuario.php");
if (isset($_POST['btnLogin'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    if (empty($user)) {
        echo "<alert>Agrega un usuario</alert>";
    }
    session_start();
    ob_start();
    

    $ValidarUsuarios = new ValidarUsuarios($user,$pass);
    $UserArray = mysqli_fetch_array($ValidarUsuarios->LoginUsuario());
    //$idUserSession = mysqli_fetch_array($ValidarUsuarios->CrearSessionId());
    //$ValidarUsuarios->CrearSessionId();
   
    if($UserArray['UserExist'] > 0){
        $_SESSION['usuario'] = $user;
        $_SESSION['idUsuario'] = $idUserSession;
       
        header("location:./admin/Dashboard.php");
    }else{
        echo"DATOS INCORRECTOS";
        header("location:../");
    }


    // if (mysqli_num_rows($ValidarUsuarios->LoginUsuario()) > 0) {
    //   header("location:./admin/AdminPanel.php");
    // }else{
    //    echo"Usuario y o contraseña incorrectos";
    // }
    

}
?>