<?php

$datos = [1,2,3,4,5,-1,-2,-3,-4,-5,0];

echo "Total números almacenados en el array: " .count($datos). "\n\n";

foreach($datos as $n) {
    echo "$n ";
}

$datos2 = [18,19,20,21,22,23,24];

echo "\n\n";


$m = 0;
foreach($datos2 as $e) {
    if ($e > 20) {
        $m++;
    }
}

echo "Personas mayores de 20 años: $m";

?>