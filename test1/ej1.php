<?php

echo "EJ2\n\n[x]Introduce tu edad\n\n> ";
$n = (int) readline();
if (($n >= 18) && ($n <= 150)){
    echo "Eres mayor de edad con $n años";
}
elseif (($n < 18) && ($n >= 0)){
    echo "Eres menor de edad con $n años";
}
elseif ($n < 0) {
    echo "Es imposible que tengas edad negativa";
}
else {
    echo "¿Tienes tanta edad?";
}
?>