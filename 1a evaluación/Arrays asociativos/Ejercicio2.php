<?php

# Creación del array

$array = [
        "Tecnologia" => 40,
        "Moda" => 126,
        "Electrodomesticos" => 32,
        "Deportes" => 501,
];

# Se definen las variables

$a = 0;
$b = 0;

# Se escribe la tabla con los datos del array

printf("\n%17s \t  Ctd.\n", "Categorias");

foreach ($array as $x => $z) {
    printf(" | %-20s| %6d |\n", $x, $z);

    # Sumatorios para definir las cantidades de categorías dependiendo del producto

    if ($z < 100) {
        $a++;
    }
    else if ($z > 500) {
        $b++;
    }
}

# Se muestra el valor de los sumatorios ya creados

printf("\nEl número de categorías con cantidad de productos menor a 100 es: $a\n");
printf("El número de categorías con cantidad de productos mayor a 500 es: $b");
?>