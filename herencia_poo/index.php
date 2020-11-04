<?php

require_once("modelo/Aprendiz.php");
require_once("modelo/Instructor.php");
require_once("modelo/Coordinador.php");

$aprendiz = new Aprendiz();
$instructor = new Instructor();
$coordinador = new Coordinador();
$coordinador->setSalario(30000);

echo "Obj aprendiz: ";
$aprendiz->ingresar();
echo "Obj instructor: ";
$instructor->ingresar();
echo "Obj coordinador: ";
$coordinador->ingresar();
$coordinador->despedir();

echo "Todo va bién...<br/>";