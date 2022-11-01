<?php

echo "EJ3\n\n[x]Dime dos números (por separado)\n\n> ";
$n = (int) readline();

echo "\n> ";
$n2 = (int) readline();

while ((filter_var($n, FILTER_VALIDATE_INT) === false) && (filter_var($n2, FILTER_VALIDATE_INT) === false)) {
    if ($n === $n2) {
        echo "Los dos números son iguales";
    }
    elseif ($n != $n2){
        echo "Los dos números son distintos";
    }
}
?>