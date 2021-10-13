<?php 
/*
?? nullsafe
(teste) ? VERDADEIRO : FALSO
OR => ||

*/
$num3 = filter_input(INPUT_GET,'num3');
$num4 = filter_input(INPUT_GET,'num4');
$num5 = filter_input(INPUT_GET,'num5');

$maiorentre3e4 = ($num3 > $num4) ? $num3 : $num4;
$maiorentre3e5 = ($num3 > $num5) ? $num3 : $num5;

$menorentre3e4 = ($num3 < $num4) ? $num3 : $num4;
$menorentre3e5 = ($num3 < $num5) ? $num3 : $num5;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparando</title>
</head>
<body>
    <h1>Comparando <?=$num3?>, <?=$num4?> e <?=$num5?></h1>
    <p>O maior entre <?=$num3?> e <?=$num4?> = <?=$maiorentre3e4?></p>
    <p>O maior entre <?=$num3?> e <?=$num5?> = <?=$maiorentre3e5?></p>
    <br>
    <p>O menor entre <?=$num3?> e <?=$num4?> = <?=$menorentre3e4?></p>
    <p>O menor entre <?=$num3?> e <?=$num5?> = <?=$menorentre3e5?></p>
</body>
</html>