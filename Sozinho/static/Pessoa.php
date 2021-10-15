<?php

    Class Pessoa{
        private $nome;
        private static int $numDePessoas = 0; //Atributos estaticos são da classe e não do objeto instanciado

        public function __construct(string $nome)
        {
            $this->nome = $nome;
            self::$numDePessoas++;//Self poderia ser substituido pelo nome da classe
        }

        public static function getNumDePessoas(){
            return self::$numDePessoas;
        }

        public function getNome(){
            return $this->nome;
        }
    }