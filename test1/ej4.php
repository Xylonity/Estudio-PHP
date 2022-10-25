# Opción 1

<?php

echo "EJ4\n\n[x]Dime dos números (por separado)\n\n> ";
$n = (int) readline();
echo "\n> ";
$n2 = (int) readline();
if ($n === $n2) {
        echo "Los dos números son iguales";
        break 1;
    }
    elseif ($n > $n2){
        echo "$n es mayor que $n2";
        break 1;
    }
    else {
        echo "$n es menor que $n2";
        break 1;
    }
?>

# Opción 2

<?php

echo "EJ4\n\n[x]Dime dos números (por separado)\n\n> ";
$n = (int) readline();
echo "\n> ";
$n2 = (int) readline();
while ((filter_var($n, FILTER_VALIDATE_INT) == true) && (filter_var($n2, FILTER_VALIDATE_INT) == true)) {
    if ($n === $n2) {
        echo "Los dos números son iguales";
        break 1;
    }
    elseif ($n > $n2){
        echo "$n es mayor que $n2";
        break 1;
    }
    else {
        echo "$n es menor que $n2";
        break 1;
    }
}
?>