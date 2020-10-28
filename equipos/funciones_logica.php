<?php

function crearJugador($numero, $nombre, $posicion){
    return [
        "numero"=>$numero,
        "nombre"=>$nombre,
        "posicion"=>$posicion
    ];
}

function getPosicion($numero){
    if($numero > 1 && $numero <= 5){
        return "Defensa";
    } else if(($numero > 5 && $numero < 9 ) || $numero == 10){
        return "Medio";
    } else if($numero <= 11){
        return "Delantero";
    } else{
        return "Arquero";
    }
}

function armarEquipo($cantidadJugadores){
    $equipo = [];
    for($i=1; $i<=$cantidadJugadores; $i++){
        array_push($equipo, crearJugador($i,"Jugador $i", getPosicion($i)));
    }
    return $equipo;
}