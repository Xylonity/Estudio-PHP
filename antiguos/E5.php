<?php

    //array
    $nums = [1,2,3,4,0,-1,-2,-3,-4,-5];

    // muestra de valores antes del cambio
    echo "\nvalores antes del cambio:\n";
    foreach ($nums as $valores) {
        echo "$valores | ";
    }
    echo "\n";

    // procedimiento para cambiar los negativos por 0
    $cuenta = 0;
    echo "\n\nvalores despues del cambio:\n";
    for ( $i = 0 ; $i < count($nums) ; $i++ ) {
        if ($nums[$i] < 0) {
            $nums[$i] = 0;
            $cuenta++;
        }
        echo $nums[$i]." | ";
    }

    // cuantos valores han sido modificados
    echo "\n\nse han cambiado $cuenta valores";