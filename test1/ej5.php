<?php

echo "EJ5\n\n[x]Dime tu edad\n\n> ";
$n = (int) readline();
    if ($n < 10) {
        echo "Tu entrada es gratis";
    }
    elseif ($n >= 10 && $n <= 16){
        echo "Entrada 3€";
    }
    elseif ($n > 16 && $n <= 25){
        echo "Entrada 4€";
    }
    else {
        echo "Entrada 9€";
    }
?>