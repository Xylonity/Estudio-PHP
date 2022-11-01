<?php

echo "EJ3\n\n[x]Introduce tu edad\n\n> ";
$n = (int) readline();

while ($n >= 0) {
    if (($n >= 0) && ($n <= 16)){
        echo "Estás en edad escolar con $n años";
        break 1;
    }
    elseif (($n > 16) && ($n <= 64)){
        echo "Estás en edad laboral con $n años";
        break 1;
    }
    else {
        echo "Estás jubilado con $n años";
        break 1;
    }
}
?>