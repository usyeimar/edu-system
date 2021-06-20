<?php
require_once 'Controllers/errores.php';
class App{
function __construct()
{
    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url,'/');
    $url = explode('/',$url);

    if (empty($url[0])) {
        $ArchivoController = 'Controllers/home.php';
        require_once $ArchivoController;
        $controllers = new  Home();
        $controllers->LoadModel('home');
        return false;
    }
   // var_dump($url);
   $ArchivoController = 'Controllers/' . $url[0] . '.php';

   if (file_exists($ArchivoController)) {
    require_once $ArchivoController;
    $controllers = new  $url[0];
    $controllers->loadModel($url[0]);
    if (isset($url[1])) {
        $controllers->{$url[1]}();
    }
   }else{
       $controllers = new Errores();
   }
  

}

}
?>