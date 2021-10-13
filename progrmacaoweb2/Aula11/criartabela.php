<?php

require_once "conectaBD.php";

mysqli_select_db($connect,'matutino');//conectando ao BD

$sql = "CREATE table tarefas(
    id_tarefas INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(200) NOT NULL,
    data DATE,
    realizada BOOLEAN
)";

$result = mysqli_query($connect,$sql);

if($result){
    echo "TABELA tarefas criada<br>";
}else{
    echo "TABELA tarefas não criada<br>". mysqli_error($connect);
}
