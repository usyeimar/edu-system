<?php
class Roles extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('roles/index');
    }

    
    

}
?>