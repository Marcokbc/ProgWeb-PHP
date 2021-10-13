<?php

require_once "../includes/conectaBD.php";

$sql = "CREATE TABLE usuario (
    id INT AUTO_INCREMNET PRIMARY KEY,
    nome VARCHAR(200),
    login VARCHAR (100),
    senha VARCHAR (200),
    )
    ";

$resultado = mysqli_query($con,$sql);

if(!$resultado){
    die("ERRO AO CRIAR A TABELA USUARIO".mysqli_error($con));
}