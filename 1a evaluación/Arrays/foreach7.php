<?php

# Manuel Serrano

$nums = [1,2,3,4,0,-1,-2,-3,-4,-5];

echo "\nvalores antes del cambio:\n";
foreach ($nums as $valores) {
    echo "$valores | ";
}
echo "\n";

$cuenta = 0;
echo "\n\nvalores despues del cambio:\n";
for ( $i = 0 ; $i < count($nums) ; $i++ ) {
    if ($nums[$i] < 0) {
        $nums[$i] = 0;
        $cuenta++;
    }
    echo $nums[$i]." | ";
}

echo "\n\nse han cambiado $cuenta valores";