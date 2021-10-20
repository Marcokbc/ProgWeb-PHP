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