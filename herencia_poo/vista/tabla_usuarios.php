<?php
session_start();
require_once("../modelo/Instructor.php");
require_once("../modelo/Aprendiz.php");

$usuarioRegistrado = unserialize($_SESSION["usuarioRegistrado"]);

if($usuarioRegistrado){
    echo "Nombres: ". $usuarioRegistrado->getNombres()."<br/>";
    echo "Apellidos: ". $usuarioRegistrado->getApellidos()."<br/>";
    $usuarioRegistrado->ingresar();
} else{
    echo "No hay ningun usuario registrado...";
}