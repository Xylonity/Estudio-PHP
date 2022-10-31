<?php

printf("Dime la cantidad de productos: ");
$a = (int) readline();
$array = [];
for($i=0;$i<$a;$i++) {
    $array[$i] = readline("Dime el precio del producto: ");
}
printf("La suma es: ".array_sum($array));
?>