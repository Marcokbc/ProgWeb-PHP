<?php
$num1 = filter_input(INPUT_GET,'num1');
$num2 = filter_input(INPUT_GET,'num2');


$soma = $num1 + $num2;
$sub = $num1 - $num2;
$mult = $num1 * $num2;
$divi = $num1 / $num2;
$resto = $num1 % $num2;


echo "<h3>$soma</h3>";
echo "<br>";
echo "<h3>$sub</h3>";
echo "<br>";
echo "<h3>$mult</h3>";
echo "<br>";
echo "<h3>$divi</h3>";
echo "<br>";
echo "<h3>$resto</h3>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESULTADOS DAS OPERAÇÕES DE <?=$num1?> e <?=$num2?></h1>
</body>
</html>
