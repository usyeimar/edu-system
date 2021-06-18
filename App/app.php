<?php
require_once 'Controllers/errores.php';
class App{
function __construct()
{
    echo "<h1>Nueva App</h1>";
    $url = $_GET['url'];
    $url = rtrim($url,'/');
    $url = explode('/',$url);

   // var_dump($url);
   $ArchivoController = 'Controllers/' . $url[0] . '.php';

   if (file_exists($ArchivoController)) {
    require_once $ArchivoController;
    $controllers = new  $url[0];
    if (isset($url[1])) {
        $controllers->{$url[1]}();
    }
   }else{
       $controllers = new Errores();
   }
  

}

}
?>