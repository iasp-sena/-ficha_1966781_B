<?php

define("CONTEXT_APP", "/1966781B/ejemplo_poo_mvc");

define("DOCUMENT_ROOT", $_SERVER["DOCUMENT_ROOT"] . CONTEXT_APP);
define("DIR_CONTROLLER", DOCUMENT_ROOT . "/controlador/");
define("DIR_VIEW", DOCUMENT_ROOT . "/vista/");
define("DIR_MODEL", DOCUMENT_ROOT . "/modelo/");
define("DIR_SERVICE", DOCUMENT_ROOT . "/servicios/");


include("autoload.php");
include("funciones.php");