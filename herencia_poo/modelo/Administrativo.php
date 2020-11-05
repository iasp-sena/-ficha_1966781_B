<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    protected static $propiedadClase = 77777777;
    protected $salario;

    public function ingresar(){
        echo "Valor prop. clase: ". self::$propiedadClase . "<br/>";
        echo "Ingresamos desde administrativo...<br/>";
    }

    abstract public function despedir();

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public static function setPropiedadClase($valor){
        //Administrativo::$propiedadClase;
        //self::$propiedadClase;
        self::$propiedadClase = $valor;
    }

}