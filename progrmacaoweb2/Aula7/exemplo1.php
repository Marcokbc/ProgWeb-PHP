<?php

//funções anonimas
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(10,20);

$dobra = function(int $a):int{
    return $a*2;
};

echo "<br>";

$numeros = [10,20,30,40,50,60,70,80,90,100];
echo "<pre>";
var_dump (array_map($dobra, $numeros)); //passa por todos os elementos e chama uma função para o array
echo "</pre>";