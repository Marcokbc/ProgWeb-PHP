<?php   

$nome = filter_input(INPUT_POST,"nome");
$telefone = filter_input(INPUT_POST,"telefone");
$aluno = $nome.";".$telefone."\n";

$dados = file_get_contents("alunos.txt");

$dados .= $aluno;//juntou no final dos dados com o novo aluno
file_put_contents("alunos.txt",$dados);

echo "Aluno cadastrado com sucesso";

