<?php

require_once 'Classes/Produto.php';
require_once 'sla/Produto.php';

use Marco\Estudo\Classes\Produto as prodclass;//Para poder utilizar as classes  
use Marco\Estudo\Sla\Produto as prodsla;

$p1 = new prodclass();
$p1->mostrarDetalhes();

echo "<hr>";

$p2 = new prodsla();
$p2->mostrarDetalhes();     

echo "<hr>";
