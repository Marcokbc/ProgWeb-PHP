<?php

$idade = filter_input(INPUT_GET,'idade_inicial');
$quantofalta = 0;

while($idade <= 18){
    echo $idade."<br>";
    if($idade < 18){
        $quantofalta++;
    }
    $idade++;

}

echo "Faltam $quantofalta anos para essa pessoa completar 18 anos";

