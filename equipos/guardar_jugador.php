<?php
session_start();

$datos = $_POST;
if($datos["numero"] && $datos["nombre"] && $datos["posicion"] && $datos["btnEnviar"]){
    $_SESSION["datos_jugador"] = $datos;
    echo "Guardado... <br/>";
    echo "<a href='registrar_jugador.php'>Registrar nuevo</a><br/>";
    echo "<a href='mostrar_info_jugador.php'>Mostrar información</a><br/>";
    var_dump($_SESSION);
}