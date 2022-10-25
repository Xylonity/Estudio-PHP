<?php

$grupos = array("asir1", "asir2", "dam1", "dam2");

echo "Primer elemento: $grupos[0]\n";

echo "Cursos en el array: " .count($grupos). " grupos del centro\n";

for($i = 0; $i < count($grupos); $i++)
    echo "En la posición $i tenemos --> $grupos[$i]\n";

?>