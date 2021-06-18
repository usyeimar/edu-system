<?php
class Errores extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('error/index');
        echo "<h1>Error al cargar el recurso</h1>";
    }
}
?>