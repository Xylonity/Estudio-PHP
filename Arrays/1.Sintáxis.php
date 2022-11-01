<?php

# Sintáxis para crear arrays
# Se pueden incluir una gran cantidad de valores

$array1 = [];

$array2 = array();


# El bucle foreach recoge cada valor dentro de un array

$array3 = [1, 2, 3];

foreach($array3 as $a) {

    # Le otorgo cada valor del array a la variable "a" por ciclo

    printf("$a");
}


# Hay diferentes métodos de especificar qué valor dentro del array queremos (o qué operaciones utilizar)

array_sum($array); --> Suma todos los valores del array 
count($array); --> Cuenta la cantidad de valores dentro del array 
end($array); --> Usa el último valor dentro del array 


?>