<?php

$idade = "10";
echo gettype($idade);
echo "<br>";

//echo $idade +1;
$idade2 = (int) $idade;
echo gettype($idade2);
echo "<br>";

$altura = 1.75;
echo gettype($altura);
echo "<br>";

$altura2 = (int) $altura;
echo gettype($altura2);
echo "<br>";    
echo $altura2;
echo "<br>";

settype($altura , 'int');
var_dump($altura);