<?php
class Usuarios extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('usuarios/index');
    }

    
    

}
?>