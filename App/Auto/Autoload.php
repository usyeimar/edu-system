<?php 

function app_autoload($ClassName)
{
    require_once("../../Class/".$ClassName.".php");
}
spl_autoload_register('app_autoload')


?>