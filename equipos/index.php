<?php

//var_dump($_GET);
//var_dump($_POST);

$numeroJugadores = intval($_GET["cantidad"]);
if($numeroJugadores && $numeroJugadores>0){
    require('funciones_logica.php');
    include('muestra_alineacion.php');


    $equipo = armarEquipo($numeroJugadores);
    mostrarAlineacionEquipo($equipo);

} else{
    echo "<h3>Recuede que la cantidad es obligatoria y debe ser mayor a 0</h3>";
}



