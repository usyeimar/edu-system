<?php
class Login extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('login/index');
        echo '<h1>Login </h1>';
    }

    
    

}
?>