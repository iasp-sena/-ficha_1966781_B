<?php
class Jugador
{

    private $nombre;
    private $numero;
    private $posicion;

    public function __construct($nombre, $numero, $posicion)
    {
        $this->nombre   = $nombre;
        $this->numero   = $numero;
        $this->posicion = $posicion;
    }

    public function getNombre()
    {

        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getPosicion()
    {
        return $this->posicion;
    }

    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    }
}
