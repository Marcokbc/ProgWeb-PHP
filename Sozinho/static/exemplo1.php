<?php

require_once 'Pessoa.php';

$p1 = new Pessoa("Marco");

echo $p1->getNome();
echo "Numero de pessoas: ".Pessoa::getNumDePessoas();
