<?php

/* 
Classe -> Planejamento de como serão construindo os seus objetos
*/

class Carro{
    //Atributos -> Caracteristicas
    public $marca;
    public $modelo;
    public $kmtotal = 0;
    public $andando = false;
    //Valores predefinidos nas duas ultimas

    //Metodo -> Ações

    public function __construct($marca,$modelo){    
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function andar($km){
        if($this->andando = false){ 
        echo "Andando $km km <br>";
        //this representa a instacia atual da classe (objeto), o objeto que esta sendo executado
        $this->kmtotal += $km;
    }else{
        echo "ERRO! Carro já está em movimento";
    }
    }
    public function parar(){
        if($this->andando = true){
            echo "Parar";
            $this->andando =  false;
        }else{
            echo "Erro! Carro já esta parado";
        }
    }
}