<?php

class Orcamento{
    protected Array $itens;

    public function addItens(InterfaceItem $item){
        $this->itens[] = $item;
    }

    public function imprime(){
        $total = 0;
        foreach($this->itens as $item){
            echo "<li>".$item->getDados()."</li>";
            $total += $item->getValor();
        }
        echo "Total: R$ $total";
    }
}