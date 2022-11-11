<?php

echo "CONVERSOR HORAS-MINUTOS-SEGUNDOS\n\n[x]Introduce una cantidad en minutos\n\n> ";
$n = (int) readline();
    $valor2 = $n * 60;
    $valor3 = $n / 60;
    echo "\n\nEl resultado en segundos es: $valor2";
    echo "\n\nEl resultado en horas es: $valor3";
?>