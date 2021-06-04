<?php
require_once("../Class/ValidarUsuario.php");
if (isset($_POST['btnLogin'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    session_start();
    ob_start();
    

    $ValidarUsuarios = new ValidarUsuarios($user,$pass);
    $UserArray = mysqli_fetch_array($ValidarUsuarios->LoginUsuario());
    if($UserArray['UserExist'] > 0){
        $_SESSION['usuario'] = $user;
        header("location:./admin/AdminPanel.php");
    }else{
        echo"DATOS INCORRECTOS";
    }


    // if (mysqli_num_rows($ValidarUsuarios->LoginUsuario()) > 0) {
    //   header("location:./admin/AdminPanel.php");
    // }else{
    //    echo"Usuario y o contraseña incorrectos";
    // }
    

}
?>