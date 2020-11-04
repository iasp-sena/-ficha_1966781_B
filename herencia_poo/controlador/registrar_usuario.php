<?php
session_start();

echo("<br/>GET: ");
var_dump($_GET);

echo("<br/>POST: ");
var_dump($_POST);

echo("<br/>REQUEST: ");
var_dump($_REQUEST);


echo("<br/>SESSION: ");
var_dump($_SESSION);
//$_SESSION["mivariable"] = "Fabio";

echo("<br/>hola desde registrar.... $nombre");
echo("<br/>El valor de session es: " . $_SESSION["mivariable"]);

//session_destroy();



require_once("../modelo/Aprendiz.php");
require_once("../modelo/Instructor.php");

$nombres = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$perfil = $_POST["perfil"];

if($perfil){
    switch($perfil){
        case "AP": 
            $usuario = new Aprendiz($nombres, $apellidos); break;
        case "INS": 
            $usuario = new Instructor($nombres, $apellidos); break;
    }
    $_SESSION["usuarioRegistrado"] = serialize($usuario);
} else{
    echo"Debe seleccionar un perfil de usuario...";
}

?>
<a href="../vista/registro.php">Regresar</a>