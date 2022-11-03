<?php

$array=[ "FC Barcelona" => 85000,
        "Real Madrid" => 61000,
        "Atletico Madrid" => 57813,
        "Real Betis" => 50373,
        "Athletic club" => 45710,
        "Sevilla" => 44200,
        "Valencia FC" => 40000,
];
echo "<inicio>\n";
foreach ($array as $key => $value) {
    echo "\t<equipo><nombre>";
    printf("%s</nombre><socios>%d", $key, $value);
    echo "</socios></equipo>";
    echo "\n\t<*|*>\n";
}
echo "</fin>";

?>