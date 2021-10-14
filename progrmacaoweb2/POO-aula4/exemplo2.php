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

*/

require_once "Produto.php";
require_once "Carrinho.php";

$p1 = new Produto("TV",2000);

$car1 = new Carrinho();
$car1->addProduto($p1);
$car1->imprime();