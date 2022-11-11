<?php

# Creación del array

$paises = [
    "Espana" => 48.5,
    "Alemania" => 78.82,
    "Francia" => 67.92,
    "Italia" => 60.12,
    "Grecia" => 35.67,
    "Portugal" => 25.4,
];

# Recorrido para generar con el listado

echo "Listado de países: \n\n";
foreach ($paises as $pais => $hab) {
    printf("| %-16s | %10f mill. de habitantes |\n", $pais, $hab);
}

# Calcular la población total

printf("\n\nLa cantidad total de habitantes es de ".array_sum($paises)." millones.");

?>