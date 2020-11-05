<?php

require_once("modelo/Aprendiz.php");
require_once("modelo/Instructor.php");
require_once("modelo/Coordinador.php");
require_once("modelo/Administrativo.php");

//$aprendiz = new Aprendiz();
//$instructor = new Instructor();
$coordinador = new Coordinador();
$coordinador->setSalario(30000);
$coordinador2 = new Coordinador();
$coordinador2->setSalario(222222);

/*echo "Obj aprendiz: ";
$aprendiz->ingresar();
echo "Obj instructor: ";
$instructor->ingresar();*/

Administrativo::setPropiedadClase(4444444);
echo "Obj coordinador: ";
$coordinador->ingresar();
$coordinador->despedir();
echo "Obj coordinador2: ";
$coordinador2->ingresar();
$coordinador2->despedir();

echo "Todo va bién...<br/>";