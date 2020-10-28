<?php
session_start();

$saludo = "Hola desde session_1.php 2";

$arreglo = ["Carlos", "Pedro"];


$_SESSION["misaludo"] = $saludo;
$_SESSION["miarreglo"] = $arreglo;