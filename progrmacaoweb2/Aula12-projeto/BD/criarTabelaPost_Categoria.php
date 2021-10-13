<?php

require_once "../includes/conectaBD.php";

$sql = "CREATE TABLE post_categoria(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_post INT,
    id_categoria INT,
    FOREIGN KEY (id_post) REFERENCES post(id),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
    )";

$resultado = mysqli_query($con,$sql);

if(!$resultado){
    die("ERRO AO CRIAR A TABELA USUARIO".mysqli_error($con));
}else{
    echo "Tabela criada com sucesso!";
}