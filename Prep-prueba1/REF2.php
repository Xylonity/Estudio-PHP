<?php

printf("Dime el peso de un vehículo de transporte (en toneladas)\n");
printf("Categoría N1: Peso máximo inferior a 3,5t\n");
printf("Categoría N2: Peso máximo entre 3,5 y 12t\n");
printf("Categoría N3: Peso máximo superior a 12t\n");
printf("\n> ");
    $a = (float) readline();

    # Funciones

    if ($a < 3.5) {
        printf("Categoría N1");
    }
    else if (($a >= 3.5)&&( $a <= 12)) {
        printf("Categoría N2");
    }
    else {
        printf("Categoría N3");
    }

?>