<?php

printf("Dime la cantidad de productos: ");
$a = (int) readline();
$array = [];
$c = 0;
for($i=0;$i<$a;$i++) {
    $array[$i] = readline("Dime el precio del producto: ");
}
foreach($array as $b) {
    if ($b > 200) {
        $c++;
    }
}
printf("La suma es: ".array_sum($array)." y hay $c productos mayores de 200");
?>