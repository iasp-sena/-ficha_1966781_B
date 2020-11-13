<?php

function autoloadControlador($nombreClase){
    $rutaArchivo = DIR_CONTROLLER . $nombreClase . ".php";
    //echo("Vamos a cargar la clase $nombreClase desde el la ruta: $rutaArchivo<br/>");
    if(file_exists($rutaArchivo)){
        require_once($rutaArchivo);
    }
}

function autoloadModelo($nombreClase){
    $rutaArchivo = DIR_MODEL . $nombreClase . ".php";
    //echo("Vamos a cargar la clase $nombreClase desde el la ruta: $rutaArchivo<br/>");
    if(file_exists($rutaArchivo)){
        require_once($rutaArchivo);
    }
}

function autoloadVista($nombreClase){
    $rutaArchivo = DIR_VIEW . $nombreClase . ".php";
    //echo("Vamos a cargar la clase $nombreClase desde el la ruta: $rutaArchivo<br/>");
    if(file_exists($rutaArchivo)){
        require_once($rutaArchivo);
    }
}

function autoloadServicio($nombreClase){
    $rutaArchivo = DIR_SERVICE . $nombreClase . ".php";
    //echo("Vamos a cargar la clase $nombreClase desde el la ruta: $rutaArchivo<br/>");
    if(file_exists($rutaArchivo)){
        require_once($rutaArchivo);
    } else{
        die("No se pudo cargar el archivo de la clase $nombreClase");
    }
}

spl_autoload_register("autoloadControlador");
spl_autoload_register("autoloadModelo");
spl_autoload_register("autoloadVista");
spl_autoload_register("autoloadServicio");