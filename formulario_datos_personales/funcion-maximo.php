<?php
//Definicion
function maximo ($aVector){

    //Acá va el código
    $avalorMaximo = 0;
    foreach ($aVector as $aValor){
        if($avalorMaximo < $aValor) {
            $avalorMaximo = $aValor;
        }
    }
    return $avalorMaximo;
}

//Uso
$aNotas = array (8,4,5,9,1);
$aSueldo = array (800,30, 400, 87, 500, 45, 300, 900, 70, 100, 1900, 1800);

echo "La nota maxima es: ". maximo($aNotas). "<br>";
echo "El sueldo máximo es: ". maximo($aSueldo);
?>