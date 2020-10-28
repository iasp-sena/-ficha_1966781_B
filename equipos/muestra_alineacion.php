<?php

function mostrarAlineacionEquipo($equipo){
    $table = "<table>";
    foreach($equipo as $jugador){
        $table .= "<tr>";
        foreach($jugador as $dato){
            $table .= "<td>$dato</td>";
        }
        $table .= "</tr>";
    }
    $table .= "<table>";
    echo $table;
}