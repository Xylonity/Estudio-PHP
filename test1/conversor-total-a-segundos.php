<?php

echo "CONVERSOR HORAS-MINUTOS-SEGUNDOS\n\n[x]Introduce una cantidad en horas\n\n> ";
$n = (int) readline();
echo "\n\n[x]Introduce una cantidad en minutos\n\n> ";
$n2 = (int) readline();
echo "\n\n[x]Introduce una cantidad en segundos\n\n> ";
$n3 = (int) readline();
    $valor = $n * 3600 + $n2 * 60 + $n3;
    echo "\n\nEl resultado en segundos son $valor segundos";
?>