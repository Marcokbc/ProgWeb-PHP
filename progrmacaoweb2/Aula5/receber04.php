<?php

$saldo_inicial = filter_input(INPUT_GET,'saldo_incial');
$poupar_mes = filter_input(INPUT_GET,'poupar_mes');
$valor_alvo = filter_input(INPUT_GET,'valor_alvo');

for($i = $saldo_inicial; $i < $valor_alvo; $i = $i + $poupar_mes){
    echo $i."<br>";
    $meses++;
}

echo "Levou $meses meses para chegar ao valor de $valor_alvo";

echo "<hr>";

$meuvalor = $saldo_inicial;
$meses2 = 0;
while($meuvalor < $valor_alvo){
    echo $meuvalor."<br>";
    $meses2++;
    $meuvalor += $poupar_mes;
}
echo $meuvalor."<br>";
echo "Levou $meses2 meses para chegar ao valor de $valor_alvo";