<?php

printf("Dame un valor para hacer un salto de línea: ");
$a = (int) readline();
$b = 0;
for($i=0;$i<=100;$i++) {
    echo "*";
    if ($b == $a) {
        printf("\n");
        $b=0;
    }
    $b++;
}
?>

