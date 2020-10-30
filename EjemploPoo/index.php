<?php
require_once "jugador.php";
require_once "equipo.php";

define("NOMBRE_JUGADOR", ["Andres", "Eduardo", "Erika", "Manuel", "Oscar", "Jhonatan", "Milena", "Victor"]);
define("POSICIONES", ["arquero", "lateral_izquierdo", "lateral_derecho", "defenza", "interior", "extremo_izquierdo", "extremo_derecho", "delantero", "mediocampista", "pivot"]);

function crearJugador()
{
    //$posicioNombre = rand(0, sizeof(NOMBRE_JUGADOR) - 1);
    //$nombre = NOMBRE_JUGADOR[rand(0, sizeof(NOMBRE_JUGADOR) - 1)];
    $nombre = NOMBRE_JUGADOR[array_rand(NOMBRE_JUGADOR)];

    $posiciones = POSICIONES[array_rand(POSICIONES)];

    $numero = rand(0, 100);

    $jugador = new Jugador($nombre, $numero, $posiciones);

    return $jugador;

}

define("NOMBRE_EQUIPO", ["america", "nacional", "millorarios", "cali", "santa_fe", "aguilas"]);

function crearEquipo($cantidadJugadores)
{

    $jugadores = [];

    $numero_equipo = rand(0, 11);

    for ($i = 0; $i < $cantidadJugadores; $i++) {

        array_push($jugadores, crearJugador());

    }

    $equipo = new Equipo(NOMBRE_EQUIPO[array_rand(NOMBRE_EQUIPO)], $numero_equipo, $jugadores);

    return $equipo;
}

$equipo = crearEquipo(rand(5, 30));

//var_dump($equipo);

//crearJugador();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title></title>
</head>
<body>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre Equipo</th>
			<th>Numero Equipo</th>

		</tr>

	</thead>
	<tbody>
		<tr>
			<td>
				<?=$equipo->getNombreEquipo()?>
			</td>
			<td>
				<?=$equipo->getNumeroEquipo()?>
			</td>
		</tr>
	</tbody>
</table>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Numero</th>
			<th>Posiciones</th>
		</tr>

	</thead>
	<tbody>
		<?php foreach ($equipo->getJugadores() as $jugador) {?>
		<tr>
			<td>
				<?=$jugador->getNombre()?>
			</td>
			<td>
				<?=$jugador->getNumero()?>
			</td>
			<td>
				<?=$jugador->getPosicion()?>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>






