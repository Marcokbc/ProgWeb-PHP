<?php

/*Herança

ALUNO
    -Nome
    -Idade
    -Curso

ALUNO INTEGRADO HERDAR O CODIGO DO ALUNO
    - NumeroMatricula

ALUNO EXTENSAO HERDAR O CODIGO DE ALUNO
    -CPF
*/
require_once "Aluno.php";
require_once "AlunoIntegrado.php";
require_once "AlunoExtensao.php";
require_once "AlunoSubsequente.php";

$a1 = new AlunoIntegrado();
$a1->setNome("João");
$a1->setIdade(17);
$a1->setCurso("Inf");
$a1->matricular();
$a1->imprimirDados();

$a2 = new AlunoExtensao();
$a2->setNome("Julio");
$a2->setIdade(20);
$a2->setCurso("Edificações");
$a2->setCpf("12345-9");
$a2->matricular();
$a2->imprimirDados();

$a3 = new AlunoSubsequente();
$a3->setNome("Pedro");
$a3->setIdade(20);
$a3->setCurso("Edificações");

$a3->chamada(1234,"Pedro",true);

var_dump($a1);