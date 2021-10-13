<?php

require_once "Aluno.php";

class AlunoSubsequente extends Aluno{
    protected $numeroMatricula = 123;

    public function matricular(){
        echo "<h5>Matriculado Subsequente</h5>";
    }

    /*
        Sobrecarga de métodos -> não é aceita na linguagem PHP, pois o PHP é uma linguagem com tipagem fraca de dinamica. No Java pode.
    */

    public function chamada(...$parametro){
        //Quando se usa os 3 pontos pode se receber multiplos parametros
        if(gettype($parametro[0]) == "string"){
            echo "Chamada pelo Nome";
        }else if(gettype($parametro[0]) == "int"){
            echo "Chamada pela matricula";
        }
    
    }
}