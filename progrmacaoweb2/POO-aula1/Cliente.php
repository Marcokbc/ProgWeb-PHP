<?php

class Cliente{
    public $nome;
    public $idade;

    public function __construct($nome,$idade){
        echo "Criando Objeto agora";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct(){
        echo "Destruindo objeto";
        var_dump($this);
    }
}