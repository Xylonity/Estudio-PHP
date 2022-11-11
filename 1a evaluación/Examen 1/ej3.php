<?php

# Ejercicio 3

# Daniel Díez

$array = [];
$b = 0;

$a = (int) readline("Dime una cantidad de valores para que introduzcas: ");

for($i=1; $i<=$a; $i++) {
    $array[$i] = readline("Dame un valor: ");
}

foreach($array as $valor) {
    if ($valor == 0) {
        $b++;
    }
}

echo "La cantidad de ceros es: $b";


?>