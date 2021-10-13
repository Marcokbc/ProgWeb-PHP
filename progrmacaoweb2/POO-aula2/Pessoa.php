<?php

/*
SETTERS -> SET -> Permite que você modifique ou adicione valor a atributos protegidos ou privados.
GETTERS -> GET -> Permite que você acesse ou leia o valor de atributos protegidos ou privados.
*/

class Pessoa{
    private $nome;
    protected $idade;
    private $cpf;

    public function __construct($nome,$idade,$cpf){
        $this->setNome($nome);
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
    public function setNome($nome){
        if(strlen($nome) < 2){//conta os caracteres
            echo "NOME COM MENOS DE 2 CARACTERES";
        }else{
            $this->nome = $nome;
        }
    }

    public function getNome(){
        return strtoupper($this->nome);//transforma as letras em maiusculas
    }


}

$p1 = new Pessoa("Marco",17,16895043578);
$p1-> setNome("Marco Antonio");

echo $p1->getNome();
