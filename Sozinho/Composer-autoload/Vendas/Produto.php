<?php

class Produto{
    private $id, $descricao;

    public function cadastrar($id, $descricao){
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public function imprimir(){
        $r = 'Id: '. $this->id. '<br>';
        $r .= 'Descrição: '. $this->descricao. '<br>';

        return $r;
    }
}