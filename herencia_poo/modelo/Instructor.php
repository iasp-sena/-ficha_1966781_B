<?php
require_once("Usuario.php");

class Instructor implements Usuario {

    private $nombres;
    private $apellidos;


    public function __construct($nombres, $apellidos){
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function ingresar(){
        echo "Ingresamos desde instructor...<br/>";
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