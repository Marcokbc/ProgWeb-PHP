<?php

//for(INICIAL ; TESTE ; ALTERAÇÃO)

$idade = filter_input(INPUT_GET,'idade_inicial');
$quantofalta = 0;
for($idade; $idade <= 18; $idade++){
    echo $idade."<br>";
    if($idade < 18){
        $quantofalta++;
    }
}