<?php

/*
Relacionamentos entre classes e objetos

- Associação -> Relacionamento mais comum -> Neste Relacionamento um atributo de uma classe é apontado para um objeto de outra classe.
- Apregação
- Composição

EMPRESA 
    -Nome
    -Endereço -> OBJETO DO TIPO ENDEREÇO

ENDEREÇO 
    -Rua    
    -numero
    -bairro
    -cidade

*/

require_once "Endereco.php";
require_once "Empresa.php";

$end = new Endereco();
$end->rua = "Rua x";
$end->numero = 12;
$end->bairro = "Flores";
$end->cidade = "Brumado";

$emp = new Empresa();
$emp->setNome("Microsoft");
$emp->setEndereco($end);

$emp->imprimir();