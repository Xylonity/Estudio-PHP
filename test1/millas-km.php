<?php

echo "CONVERSOR Millas-Kilómetros\n\n[1]Kilómetros-Millas\n[2]Millas-Kilómetros\n\n> ";
$n = (int) readline();
if ($n == 1) {
    echo "Escriba la cantidad que desee: ";
    $valor1 = (float) readline();
    $valor2 = $valor1 * 1.621371;
    echo "El resultado en millas es: $valor2";
}
elseif ($n == 2) {
    echo "Escriba la cantidad que desee: ";
    $valor1 = (float) readline();
    $valor2 = $valor1 * 0.621371;
    echo "El resultado en kilómetros es: $valor2";
}
else {
    echo "No has escrito un caracter permitido";
}
?>