<?php
require("config/init.php");

$nombreDelControlador = $_GET["controller"];
$nombreDelMetodo = $_GET["method"];

if($nombreDelControlador){
    $nombreDelControlador .= "Controller";
    $controller = new $nombreDelControlador();
    //$otraCalse = new Usuario();
    $controller->$nombreDelMetodo();
}