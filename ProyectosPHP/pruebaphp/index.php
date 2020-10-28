<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    $equipo = armarEquipo(11);
    mostrarAlineacionEquipo($equipo);
    ?>

    


</body>
</html>