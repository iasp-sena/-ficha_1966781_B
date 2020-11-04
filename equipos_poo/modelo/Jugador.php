<?php

class Jugador {

    private $numero;
    private $nombre;
    private $posicion;

    public function __construct(){

    }

    public function __destruct(){
        echo "Se está destruyendo el objeto. " . $this->numero;
    }

    public function jugar($nombre){
        echo "Estoy juagando $nombre...";
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getPosicion(){
        return $this->posicion;
    }

    public function setPosicion($posicion){
        $this->posicion = $posicion;
    }

}
