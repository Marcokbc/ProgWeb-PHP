<?php

class Conta{
    private $nome;
    private $numero;
    private $saldo = 0;

    public function __construct($nome,$numero,$saldo=0){
        $this->nome = $nome;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getSaldo(){
        return $this->saldo;    
    }

    private function setSaldo($valor){
        $this->saldo = $valor;
    }

    public function depositar($valor){
        $saldo = $this->getSaldo();
        $saldo += $valor;
        $this->setSaldo($saldo);
        echo "<h4>Deposito Realizado no valor de R$ $valor</h4>";
    }

    public function sacar($valor){
        $saldo = $this->getSaldo();
        if($valor <= $saldo){
            $saldo -= $valor;
            $this->setSaldo($saldo);
            echo "<h4>Saque Realizado no valor de R$ $valor</h4>";
        }else{
            echo "<h4>Saldo insuficiente</h4>";
        }
    }
}

$c1 = new Conta("Marco",1234,100);
$c1->depositar(50);
echo "O saldo é de R$ {$c1->getSaldo()} <br>";
$c1->sacar(50);
echo "O saldo é de R$ {$c1->getSaldo()} <br>";
$c1->sacar(110);