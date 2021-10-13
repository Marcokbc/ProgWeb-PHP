<?php

/*
Encapsulamento
    - Modificadores de Acesso
    -Public -> Qualquer arquivo pode acessar os atributos e metodos que estão com esse modificador
    -Private -> Apenas elementos internos da classe podem acessar os atributos e metodos privados
    -Protected -> Apenas elementos internos e elementos pertencentes a classes filhas (Herdam da classe com o atributo e metodo protegido) podem acessar.
    
    
*/

class Motor{
    protected $ligado = false;
    public $tipo;
    private $quantidadeCombus;

    public function __construct($tipo){
        $this->tipo = $tipo;
    }

    public function ligar(){
        if($this->tipo == "2.0"){
            $quant = 3;
        }else if($this->tipo == "1.0"){ 
            $quant = 1;
        }
        $this->ligado = true;
        $this->quantidadeCombus = $quant;

        echo "O carro foi ligado com $this->quantidadeCombus litros(s)"; 
    }

}
class MotorAlcool extends Motor{
    public function aquecer(){
            $this->ligado = true;
    }
}

$m1 = new MotorAlcool("1.0");
$m1->aquecer();
$m1->ligar();
// $m1 = new Motor("2.0");
// $m1->ligar();
