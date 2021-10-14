<?php

/*
Relacionamentos entre classes e objetos

- Associação -> Relacionamento mais comum -> Neste Relacionamento um atributo de uma classe é apontado para um objeto de outra classe.
- Composição -> Um relacionamento em que um objeto de uma classe é instciado dentro de outra classe.
- Apregação -> Objdeto Externo (pertecente a uma outra classe) é utilizado como parametro de um metodo

->Produto
    -> Nome 
    -> Valor

->Carrinho
    ->produtos -> ARRAY COM VARIOS OBJETOS DO TIPO PRODUTO
    +função addProduto(PRODUTO) -> ADICIONAR PRODUTO NO ARRAY

-> PESSOA
    ->nome
    datanascimento
    + METODO SALVAR -> SALVAR A PESSOA NO BANCO DE DADOS
        Pode usar o mysqli_query
        Mas o mais usado é o PDO -> Php Data Object -> Multiplos BDs -> CLASSE


    */

require_once "Pessoadata.php";

$p1 = new Pessoadata();

$p1->setNome("Marco");
$p1->setDataNascimento("2004-02-07");

$p1->salvar();