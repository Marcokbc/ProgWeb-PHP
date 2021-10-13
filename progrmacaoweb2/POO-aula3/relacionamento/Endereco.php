<?php

class Endereco{
    public $rua;
    public $numero;
    public $bairro;
    public $cidade;

    public function imprimirEndereco(){
        echo "<h4>{$this->rua},{$this->numero} - {$this->bairro} / {$this->cidade}</h4>";
    }
}