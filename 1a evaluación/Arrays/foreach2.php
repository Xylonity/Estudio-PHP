<?php

# Manuel Serrano

$valores = [1,10,20,50,0,2,5,-9,-6,-2];

$sumpos=0;
foreach ($valores as $p){
    if($p>=0 ){
        $sumpos+=$p;

    }

}
$sumneg=0;
foreach ($valores as $p){
    if($p<0 ){
        $sumneg+=$p;

    }

}

$sumtot=0;
foreach ($valores as $p){

        $sumtot+=$p;



}
echo "suma total de valores positivos: $sumpos  \n";
echo "suma total de valores negativos: $sumneg  \n";

?>