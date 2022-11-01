<?php

# Manuel Serrano

    // array
    $datos = ["rojo", "azul", "verde", "morado", "violeta", "rosa", "magenta", "naranja"];

    $salida="";
    foreach ($datos as $c) {
        echo $salida.="$c # ";
    }
    $salida = "| $salida |";
    echo $salida;