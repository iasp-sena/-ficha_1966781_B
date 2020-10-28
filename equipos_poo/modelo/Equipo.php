<?php

class Equipo{

    private $nombre = "";
    private $jugadores = [];

    public function Equipo($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getJugadores(){
        return $this->jugadores;
    }

    public function setJugadores($jugadores){
        $this->jugadores = $jugadores;
    }

    public function contratarJugador($jugador){
        if(!$this->jugadores){
            $this->jugadores = [];
        }
        array_push($this->jugadores, $jugador);
    }

}