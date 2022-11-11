<?php

# Ejercicio 2

# Daniel Díez

printf("CLASIFICACIÓN POR CONCENTRACIÓN\n\n");
printf("Inferior a 75: blanda \n");
printf("De 75 a 150: semidura \n");
printf("De 151 a 300: dura \n");
printf("Superior a 300: muy dura\n");
echo "\nDime la concentración: ";
$con = (int) readline();

if ($con < 75) {
    echo "BLANDA";
}

else if ($con <= 150) {
    echo "SEMIDURA";
}

else if ($con <= 300) {
    echo "DURA";
}

else {
    echo "MUY DURA";
}


?>