<?php

$con = mysqli_connect("localhost","root","","atividadematutino");

$sql = "CREATE TABLE series(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    nota DECIMAL
)";

$r = mysqli_query($con,$sql);

if($r){
    echo "Tabela criada";
}else{
    echo "A tabela não foi criada". mysqli_error($con);
}

