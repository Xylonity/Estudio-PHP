<?php

echo "CONVERSOR HORAS-MINUTOS-SEGUNDOS\n\n[x]¿En qué sistema quieres introducir el valor?\n\n[1]Minutos\n\n[2]Horas\n\n[3]Segundos\n\n> ";
$n = (int) readline();
    while (($n != 1) && ($n != 2) && ($n != 3)) {
        echo "Escribe un caracter válido: ";
        $n = (int) readline();
    }
    while (($n > 0) && ($n < 4)){
        if ($n == 1) {
            echo "\n\nIntroduce el valor que desee: ";
            $n2 = (float) readline();
            $valor2 = $n2 * 60;
            $valor3 = $n2 / 60;
            echo "\n\nEl resultado en segundos es: $valor2";
            echo "\n\nEl resultado en horas es: $valor3\n ";
                break 1;
        }
        elseif ($n == 2) {
            echo "\n\nIntroduce el valor que desee: ";
            $n2 = (float) readline();
            $valor2 = $n * 60;
            $valor3 = $n * 3600;
            echo "\n\nEl resultado en minutos es: $valor2";
            echo "\n\nEl resultado en segundos es: $valor3\n ";
                break 1;
        }
        elseif ($n == 3) {
            echo "\n\nIntroduce el valor que desee: ";
            $n2 = (float) readline();
            $valor2 = $n / 3600;
            $valor3 = $n / 60;
            echo "\n\nEl resultado en horas es: $valor2";
            echo "\n\nEl resultado en minutos es: $valor3\n ";
                break 1;
        }
    }
?>