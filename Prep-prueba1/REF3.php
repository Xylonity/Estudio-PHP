<?php

printf("Dime el número total de ventas de un determinado agente comercial\n");
printf("Hasta 10.000 euros: Regular\n");
printf("Hasta 40.000 euros: Normal\n");
printf("Hasta 100.000 euros: Bueno. Incentivo 200€\n");
printf("Más de 100.000 euros: Muy bueno. Incentivo 600€\n");
printf("\n> ");
    $a = (float) readline();

    # Funciones

    if ($a < 10000) {
        printf("Regular");
    }
    else if ($a < 40000) {
        printf("Normal");
    }
    else if ($a < 100000) {
        printf("Bueno. Incentivo 200€");
    }
    else {
        printf("Muy bueno. Incentivo 600€");
    }

?>