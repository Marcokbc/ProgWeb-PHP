<?php


$textoarquivo = file_get_contents('dados.txt');
// \n -> quebra a linha -> separador
//explode -> função de strings do PHP que quebra um texto em partes a partir de um separador -> delvolve um array

$dados = explode("\n", $textoarquivo);
array_pop($dados);//remover o ultimo elemento de um array

foreach($dados as $linha){
    echo "<p>".$linha."</p>";
}

$novalinha = "Adicionando uma nova linha 7";
array_push($dados,$novalinha); //Adiciona um elemnto ao final de um array
array_push($dados,"");

$textoarquivo = implode("\n,$dados");//Une os elementos de um array com um separador formando uma String

//file_put_contents("dados.txt", $textoarquivo);Adiciona mas apaga os outros