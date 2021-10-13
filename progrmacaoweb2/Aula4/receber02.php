<?php

$categoria = filter_input(INPUT_POST, 'categoria');
$valor = filter_input(INPUT_POST, 'valor');

switch($categoria){
    case 1:
        $imposto = 0.05;
    break;
    case 2:
        $imposto = 0.04;
    break;
    case 3:
        $imposto = 0.07;
    break;
    case 4:
        $imposto = 0.06;
    break;
    case 5:
    case 6:
        $imposto = 0.1;
}

$valoraserpago = $valor * $imposto;
echo "$valoraserpago";