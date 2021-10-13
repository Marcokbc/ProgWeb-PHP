<?php

/*
Métodos Mágicos -> Getters e Setters
*/

class Livro{
    private $titulo;
    private $editora;
    private $ano;
    private $autor;

    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

}

$l1 = new Livro();
$l1->titulo = "Senhor dos aneis";
$l1->editora = "Moderna";
$l1->ano = 1970;
$l1->editora = "Tolkien";
