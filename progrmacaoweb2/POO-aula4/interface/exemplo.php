<?php

/*
    Interface -> Um contrato -> Uma forma de assegurar a implementação de metodos por uma classe.

    -InterfaceItem
        getValor() -> Todos que implementarem essa interface são obrigados a escrever o metodo getValor()
        getDados() -> Todos que implementarem essa interface são obrigados a escrever o metodo getDados()


    -Produto Implementar a interface Item
        -Nome
        -Valor
            ->getValor()
            ->getDados()

    -Serviço Implementar a interface Item
        -Nome
        -Preço
            ->getValor()
            ->getDados()

    -Visitas Implementar a interface Item
        -local
        -Taxa
            ->getValor()
            ->getDados()

    ->Orçamento
        ->Itens -> Array com varios produtos
        +Metodo addItens(InterfaceItem)


*/
require_once "InterfaceItem.php";
require_once "Produto.php";
require_once "Servico.php";
require_once "Orcamento.php";

$p1 = new Produto("Mouse",50);

$s1 = new Servico("Formatação",50);

$o1 = new Orcamento();
$o1->addItens($p1);
$o1->addItens($s1);

$o1->imprime();