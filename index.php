<?php
require_once 'model/database.php';

$controller = 'login';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))  // TRUE=FALSE  , FALSE=TRUE
{   //echo "AQUI ESTOY TRUE";
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{  
    //echo "AQUI ESTOY FALSE";
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    //$resultado = $condicion            ? 'verdadero'    : 'falso';
    $accion =      isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
