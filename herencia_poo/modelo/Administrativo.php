<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    protected $salario;

    public function ingresar(){
        echo "Ingresamos desde administrativo...<br/>";
    }

    abstract public function despedir();

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

}