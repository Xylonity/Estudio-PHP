<?php

# Ejercicio 6

# Daniel Díez

$array = [
    "Sin plomo 95" => 1.718,
    "Sin plomo 98" => 1.876,
    "Gasóleo A+" => 1.723,
    "Gasóleo B" => 1.155,
    "Gasóleo C" => 1.227,
];

$a = 0;

echo "<table>\n";
foreach($array as $key => $value) {
    printf("   <tr><td>$key</td><td>$value</td></tr>\n", $key, $value);
}
echo "</table>";

?>