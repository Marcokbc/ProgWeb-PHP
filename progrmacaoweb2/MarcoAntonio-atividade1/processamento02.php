<?php

$nome = filter_input(INPUT_POST,'nome');
$num1 = filter_input(INPUT_POST,'num1');
$num2 = filter_input(INPUT_POST,'num2');
$num3 = filter_input(INPUT_POST,'num3');

$media = (($num1 + $num2 + $num3)/3);

if($media == 10){
    echo "<h3>$nome foi APROVADO COM DISTINÇÃO!</h3>";
}else if($media >= 6 && $media <= 9.9 ){
    echo "<h3>$nome foi APROVADO!</h3>";
}else {
    echo "<h3>$nome foi REPROVADO!</h3>";
}
