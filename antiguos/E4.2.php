<?php

    // array
    $datos = ["rojo", "azul", "verde", "morado", "violeta", "rosa", "magenta", "naranja"];

    // procesamiento de datos
    echo "[ \n";
    for ( $i = 0 ; $i < count($datos) ; $i++ ) {
        echo "\t{\n\t\t'color': '$datos[$i]'\t\n\t},\n";
    }
    echo "]";