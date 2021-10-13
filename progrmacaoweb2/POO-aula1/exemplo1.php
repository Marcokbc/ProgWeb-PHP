<?php

require_once "Carro.php";

$c1 = new Carro("Fiat","Palio");
//Acessamos as caracteristicas do objeto
// $c1->marca = "Fiat";
// $c1->modelo = "Palio";


$c1->andar(15);
$c1->parar();
//$c2 = new Carro();
var_dump($c1);
echo "<hr>";
var_dump($c2);

