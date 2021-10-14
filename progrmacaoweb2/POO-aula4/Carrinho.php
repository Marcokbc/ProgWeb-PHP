<?php

class Carrinho{
    protected Array $produtos;

    /*
        Agregação -> um objeto de uma outra classe é utilizado como parametro para um metodo. 
    */

    public function addProduto(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function imprime(){

        foreach($this->produtos as $p){
            echo "<li>{$p->nome} - R$ {$p->valor} </li>";
        }
    }
}