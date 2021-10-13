<?php
//Função que abre o arquivo -> o endereço do arquivo e o modo de acesso(r -> read) e jogando dentro de uma variavel
$arquivo = fopen('dados.txt',"r");

//fread le o arquivo aberto junto ao seu tamanho
$dados = fread($arquivo, 1000);

var_dump($dados);

//fclose fecha o arquivo aberto
fclose($arquivo);
