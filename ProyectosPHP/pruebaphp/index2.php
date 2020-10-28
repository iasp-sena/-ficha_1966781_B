<?php

define("MI_CONSTANTE", ["Pedro","Andres"]);

$a = 13;

switch($a){
    case 1: echo "Es uno.<br/>";
    case 2: echo "Es dos.<br/>"; break;
    case 3: echo "Es tres.<br/>"; break;
    case 4: echo "Es cuatro.<br/>";
    default: echo "No es ningun caso.<br/>";
}

function pintar(&$i) {
    $i++;
    echo "............vamos pal siguiente...............";
}

$saludo = "Hola";
for($i=0,$j=10,$k=20  ; $saludo != "Hola0123456" ; pintar($i) ){
    if($i==4){
        $saludo .= $i;
        continue;
    }
    $saludo .= $i;
    echo "$i - $j - $k - $saludo <br/>";
}

echo "..............................................<br/>";
$i=10;
do {
    echo "$i <br/>";
    $i++;
} while($i<10);

echo "..............................................<br/>";
$i=10;
while($i<10){
    echo "$i <br/>";
    $i++;
}
echo "..............................................<br/>";


$miarray = [1,2,3,4,5];
array_unshift($miarray, 6,7,8);
foreach($miarray as $valor){
    echo "$valor<br/>";
}
echo "..............................................<br/>";

array_shift($miarray);
foreach($miarray as $valor){
    echo "$valor<br/>";
}


foreach(MI_CONSTANTE as $valor){
    echo "$valor<br/>";
}






