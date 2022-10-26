<?php

$array = [-2, -1, 0, 1, 2];

$a = 0;
for($i=0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
        $array[$i] = 0;
        $a++;
    }
}
echo "Se han realizado $a cambios"
?>