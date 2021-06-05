<?php
require_once("../Class/ValidarUsuario.php");
if (isset($_POST['btnLogin'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
    session_start();
    ob_start();
    

    $ValidarUsuarios = new ValidarUsuarios($user,$pass);
    $UserArray = mysqli_fetch_array($ValidarUsuarios->LoginUsuario());
    //$ValidarUsuarios->CrearSessionId();
   
    if($UserArray['UserExist'] > 0){
        $_SESSION['usuario'] = $user;
        $_SESSION['idUsuario'] = $idUsuario;
        header("location:./admin/AdminPanel.php");
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