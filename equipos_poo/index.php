<?php

require_once("modelo/Jugador.php");
require_once("modelo/Equipo.php");

$miEquipo = new Equipo("Nacional");

$miJugador = new Jugador();
$miJugador->setNombre("Andres");
$miJugador->setPosicion("Delantero");
$miJugador->setNumero(5);

$miJugador2 = new Jugador();
$miJugador2->setNombre("David");
$miJugador2->setPosicion("Arquero");
$miJugador2->setNumero(1);


$miEquipo->contratarJugador($miJugador);
$miEquipo->contratarJugador($miJugador2);

foreach($miEquipo->getJugadores() as $jugador){
    echo "Nombre: " . $jugador->getNombre() . "<br/>";
    echo "Posicion: " . $jugador->getPosicion() . "<br/>";
    echo "Número: " . $jugador->getNumero() . "<br/>";
    echo "...................................................<br/>";
}


