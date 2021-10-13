<?php

require_once "conectaBD.php";//A diferença do once para o normal é que o once permite requerer somente uma vez
//include "conectaBD.php";//O include mesmo se der erro continua a execução

$sql = "CREATE DATABASE matutino";//Criando o banco de dados e nomeando

$resultado = mysqli_query($connect,$sql);//execulta. PRECISA da conexão e do codigo sql. E PODE TER TBM o tipo de resultado opcional

if($resultado){
    echo "Criou o BD<br>";
}else{
    echo "Deu n". mysqli_error($connect)."<br>";//erro de execução
}

mysqli_close($connect);