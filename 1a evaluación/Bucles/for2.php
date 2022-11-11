<?php

echo "Haz una tabla de multiplicación: ";
$a = (int) readline();

for ( $x; $x <= 10; $x++ ) {
    $b = $a*$x;
    echo "\n$a x $x = $b";
}

?>
