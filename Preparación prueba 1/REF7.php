<?php

# Daniel Jáñez

$array=[ "FC Barcelona" => 85000,
        "Real Madrid" => 61000,
        "Atletico Madrid " => 57813,
        "Real Betis" => 50373,
        "Athletic club" => 45710,
        "Sevilla" => 44200,
        "Valencia FC" => 40000,
];
foreach ($array as $key => $value) {
    printf("| %-16s | %10d socios|\n", $key, $value);
}