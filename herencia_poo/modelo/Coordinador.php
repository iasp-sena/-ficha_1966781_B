<?php
require_once("Administrativo.php");

class Coordinador extends Administrativo {

    public function ingresar(){
        //$this->nombrePropiedad;
        parent::ingresar();
        echo "Ingresamos desde coordinador...<br/>";
        //echo "Salario parent...".parent::salario."<br/>"; No se puede invocar propedades de objeto desde parent
        echo "Salario this...".$this->salario."<br/>";
    }

    public function despedir(){
        echo "Despidiendo desde coordinador...<br/>";
    }

}