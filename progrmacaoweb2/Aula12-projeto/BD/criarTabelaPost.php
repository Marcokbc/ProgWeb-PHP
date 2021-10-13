<?php

require_once "../includes/conectaBD.php";

$sql = "CREATE TABLE post(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200),
    conteudo TEXT,
    imagem VARCHAR(200),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
    )";

$resultado = mysqli_query($con,$sql);

if(!$resultado){
    die("ERRO AO CRIAR A TABELA USUARIO".mysqli_error($con));
}else{
    echo "Tabela criada com sucesso!";
}