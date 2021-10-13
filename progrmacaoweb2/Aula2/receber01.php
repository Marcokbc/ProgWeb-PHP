<?php

$nome = $_GET['nomecompleto'] ?? '';
$idade = isset($_GET['idade']) ? $_GET[ 'idade'] : '';

$curso = filter_input(INPUT_GET, 'curso');

echo "<h1>$nome</h1>";
echo "<h2>$idade</h2>";
echo "<h3>Curso de $curso</h3>";