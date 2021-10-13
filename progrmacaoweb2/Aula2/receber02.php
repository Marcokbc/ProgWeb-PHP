<?php

$nome = filter_input(INPUT_POST, 'nomecompleto');
$idade = $_POST['idade'] ?? '';
$curso = isset($_POST['curso']) ? $_POST['curso'] : '';

$idade2 = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);


echo "<h1>$nome</h1>";
echo "<h2>$idade</h2>";
echo "<h2>$idade2</h2>";
echo "<h3>Curso de $curso</h3>";