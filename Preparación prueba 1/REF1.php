<?php

printf("Dime una temperatura (en grados centígrados) para pasarla a Farenheit: ");
$a = (int) readline();
$b = (9/5)*$a + 32;
printf("El resultado son ".$b."ºF");

?>