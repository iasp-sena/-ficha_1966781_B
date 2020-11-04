<?php
require_once("Usuario.php");

class Aprendiz implements Usuario {

    private $nombres;
    private $apellidos;

    public function Aprendiz($nombres, $apellidos){
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function ingresar(){
        echo "Ingresamos desde aprendiz...<br/>";
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

}