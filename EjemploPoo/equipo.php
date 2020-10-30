<?php
class Equipo
{

    private $numeroEquipo;
    private $nombreEquipo;
    private $jugadores;

    public function Equipo($nombreEquipo, $numeroEquipo, $jugadores)
    {
        $this->nombreEquipo = $nombreEquipo;
        $this->numeroEquipo = $numeroEquipo;
        $this->jugadores    = $jugadores;
    }

    public function getNumeroEquipo()
    {
        return $this->numeroEquipo;
    }

    public function setNumeroEquipo($numeroEquipo)
    {
        $this->numeroEquipo = $numeroEquipo;
    }

    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;
    }

    public function getJugadores()
    {
        return $this->jugadores;
    }

    public function setJugadores($jugadores)
    {

        $this->jugadores = $jugadores;
    }

}
