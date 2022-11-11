<?php

# Ejercicio 4

# Daniel Díez

$array = [];
$b = 0;

$a = (int) readline("Dime una cantidad de valores: ");

for($i=1; $i<=$a; $i++) {
    printf("$i\t");
    $b++;
    if ($b == 12) {
        echo "\n";
        $b = 0;
    }
}

?>