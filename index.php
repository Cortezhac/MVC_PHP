<?php 
/* Punto de entrada del programa, se cargan los instrucciones necesarias para inicar la aplicacion */
require('controler/system/Conexion.php');

// Definir controlador por defecto
$controller = MAIN_CONTROLER;

// Comprobamos si la C del controlador fue asignada
// Es decir si se escribio algo en la URL
if(!isset($_REQUEST['C'])){
    // Carga el controlador por defecto de la carpeta controler/EjemploController.php de manera dinamica
    require_once('controler/'.$controller.'Controller.php');

    //Preparamos el controlador para instanciar sus metodos
    // formato utilizado EjemploController
    $Controller = $controller."Controller";

    $Controller = new $Controller();

    $Controller->Index();
}else{
    // Controlador especificado en la URL
    $controller = $_REQUEST['C'];
    // Cargar el archivo del controlador
    require_once('controler/'.$controller."Controller.php");
    //Si se especifico una accion en el controlador ejecutarla sino ejecutar la funcion Index() por defecto
    $accion = isset($_REQUEST['A']) ? $_REQUEST['A'] : 'Index';

    //Preparamos el controlador para instaciarlo
    $Controller = new $controller();

    // Ejecuta la funcion especificada
    call_user_func(array($Controller, $accion));
}

?>