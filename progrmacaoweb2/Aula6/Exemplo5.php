<?php

function calculaImposto($valor, $taxa = 15){
    $calculo = $valor * ($taxa / 100);
    return $calculo;
}

echo calculaImposto(10);
echo "<br>";
echo calculaImposto(15);
echo "<br>"; 
echo calculaImposto(20, 5);