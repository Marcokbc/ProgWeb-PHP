<?php

define('SERVER','localhost');//constante(nome, valor);
define('USER','root');
define('PASSWORD','');

$connect = mysqli_connect(SERVER,USER,PASSWORD);//fazer a conexão

if(!$connect){
    die("Conexão falhou:".mysqli_connect_error());//Tambem tem como colocar mensagens no die. Essa função mostra erros na conexão mysqli

}else{
    echo "Foi.<br>";
}