<?php
class Main extends Controller{
    function __construct()
    {
        parent::__construct();
        echo '<h1>Nuevo Controlador Home </h1>';
        $this->view->render('home/index');
    }

    
    

}
?>