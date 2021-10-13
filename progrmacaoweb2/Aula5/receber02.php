<?php

$idade = filter_input(INPUT_GET, 'idade_inicial');
$quantofalta = 0;
do{
    echo $idade."<br>";
    if($idade < 18){
    $quantofalta++;
    }
    $idade++;
}while($idade <= 18);

echo "faltam $quantofalta"; 