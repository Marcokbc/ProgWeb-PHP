<?php

$nome = filter_input(INPUT_POST, 'nome');
$sal = filter_input(INPUT_POST, 'sala');

if($sal <= 1100){
    $aumento = $sal * 0.2;
    $salajustado = $sal + $aumento;

    echo "<h3>$nome</h3>";
    echo "<br>";
    echo "<h3>O salário antes do reajuste era: $sal</h3>";
    echo "<br>";
    echo "<h3>O percentual de aumento foi 20%</h3>";
    echo "<br>";
    echo "<h3>O valor do aumento foi $aumento</h3>";
    echo "<br>";
    echo "<h3>O novo salário: $salajustado</h3>";
}else if($sal > 1100 && $sal < 1700){
    $aumento = $sal * 0.15;
    $salajustado = $sal + $aumento;

    echo "<h3>$nome</h3>";
    echo "<br>";
    echo "<h3>O salário antes do reajuste era: $sal</h3>";
    echo "<br>";
    echo "<h3>O percentual de aumento foi 15%</h3>";
    echo "<br>";
    echo "<h3>O valor do aumento foi $aumento</h3>";
    echo "<br>";
    echo "<h3>O novo salário: $salajustado</h3>";

}else if($sal > 1700 && $sal < 2500){
    $aumento = $sal * 0.10;
    $salajustado = $sal + $aumento;

    echo "<h3>$nome</h3>";
    echo "<br>";
    echo "<h3>O salário antes do reajuste era: $sal</h3>";
    echo "<br>";
    echo "<h3>O percentual de aumento foi 10%</h3>";
    echo "<br>";
    echo "<h3>O valor do aumento foi $aumento</h3>";
    echo "<br>";
    echo "<h3>O novo salário: $salajustado</h3>";
}else{
    $aumento = $sal * 0.05;
    $salajustado = $sal + $aumento;

    echo "<h3>$nome</h3>";
    echo "<br>";
    echo "<h3>O salário antes do reajuste era: $sal</h3>";
    echo "<br>";
    echo "<h3>O percentual de aumento foi 5%</h3>";
    echo "<br>";
    echo "<h3>O valor do aumento foi $aumento</h3>";
    echo "<br>";    
    echo "<h3>O novo salário: $salajustado</h3>";
}