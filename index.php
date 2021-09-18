<?php
    require_once('AutoLoad.php');

    if(isset($_GET['controller']) && isset($_GET['method']))
    {
        $controller=$_GET['controller'];
        $method=$_GET['method'];
    }
    else
    {
        $controller="Home";
        $method="Inicio";
    }

    if(class_exists($controller) && method_exists($controller, $method))
    {
        $class=new $controller;
        $class->$method();
    }
    else
    {
        echo "clase no existe o metodo incorrecto";
    }

    spl_autoload_register('AutoLoad');
?>