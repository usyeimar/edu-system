<?php
class View{

    function  __construct(){
    echo"<h1>Vista Base</h1>"; 

    }
    
    function render($name){
        require 'views/' . $name . '.php';
    }

}


?>