<?php

# Ejercicio 5

# Daniel Díez

$b = 0;

$array = array(5, 10, 15, 20, 25, 30, 35, 40, 45, 50);

for($i=0;$i<count($array);$i++) {
    $b += $array[$i];
}

$c = $b / count($array);

echo "El precio medio de todos los productos es: $c";


?>