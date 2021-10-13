<?php

$nome = filter_input(INPUT_POST, 'nome');
$curso = filter_input(INPUT_POST, 'curso');
$sexo = filter_input(INPUT_POST, 'sexo');
$disciplinas = filter_input(INPUT_POST,'disciplinas', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);//Informando que estou recebendo o array
$idade = filter_input(INPUT_POST,'idade');
$nascimento = filter_input(INPUT_POST,'nascimento');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');


echo "<h3>$nome</h3>";
echo "<h3>$idade</h3>";
echo "<h3>$nascimento</h3>";
echo "<h3>$email</h3>";
echo "<h3>$senha</h3>";
echo "<h3>$curso</h3>";
echo "<h3>$sexo</h3>";
echo "<h3>"; 
echo implode(', ', $disciplinas);
echo "</h3>"; 