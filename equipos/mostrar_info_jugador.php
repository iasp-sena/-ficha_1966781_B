<?php

session_start();

echo "Aaaaaaaaaaa";
$datos = $_SESSION["datos_jugador"];
var_dump($datos);
if($datos["numero"] && $datos["nombre"] && $datos["posicion"] && $datos["btnEnviar"]){
    var_dump($datos);
}