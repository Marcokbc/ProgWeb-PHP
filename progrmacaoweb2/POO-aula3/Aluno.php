<?php

/*
Uma classe abstrata (abstract), classe base para que seja herdada(extends). Não podendo ser instaciado diretamente (Criar objetos diretamente por ela).

*/

abstract class Aluno{
    protected $nome;
    protected $idade;
    protected $curso;

    /*
        Método Abstrato funciona como um contrato e só pode ser criado em classes abstratas, so traz uma assinatura e serve como um contrato para que as classes estendidas sejam obrigadas a implementar
    */

    abstract public function matricular();

    public function imprimirDados(){
        echo "<h3>{$this->nome} -> {$this->curso}</h3>";
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getCurso(){
        return $this->curso;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
}