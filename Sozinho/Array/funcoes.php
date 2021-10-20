<?php

$array = [
    'banana',
    'goiaba',
    'laranja'
];
$array[] = 'pera';//Add na ultima posição disponivel
$array[6] = 'maça';
$array[2] = 'uva';

echo "<pre>";
print_r($array);
echo "</pre>";



echo "<hr>";

echo count($array);

echo "<hr>";

echo "<pre>";
print_r(array_keys($array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(array_values($array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump(in_array('banana',$array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump(array_search('uva',$array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump(isset($array[2]));
echo "</pre>";
//Não contabiliza valores nulos

echo "<hr>";

echo "<pre>";
var_dump(array_key_exists(0,$array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo array_key_first($array);
echo "</pre>";


echo "<pre>";
echo reset(array_keys($array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo end(array_keys($array));
echo "</pre>";

echo "<pre>";
echo array_key_last($array);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(array_flip($array));
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo implode(', ',$array);//separador, array/ lista dos dados de um array
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo explode(', ','banana,laranja,abacaxi');//separador, string/ transforma a string e um array
echo "</pre>";