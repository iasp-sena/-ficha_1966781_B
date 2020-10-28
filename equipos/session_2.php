<?php
session_start();

$saludoSession1 = $_SESSION["misaludo"];

$arreglo = $_SESSION["miarreglo"];

var_dump($arreglo);
echo "<br/>....................<br/>";

array_push($arreglo,"María");
$_SESSION["miarreglo"] = $arreglo;
echo "<br/>....................<br/>";

echo $saludoSession1."<br/>";

var_dump($arreglo);