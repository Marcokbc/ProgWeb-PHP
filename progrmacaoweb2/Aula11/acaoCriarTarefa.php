<?php

require_once 'conectaBD.php';
mysqli_select_db($connect,'matutino');

if($_POST){
    $descricao = filter_input(INPUT_POST,'descricao');
    $data = filter_input(INPUT_POST,'data');
    $realizada = filter_input(INPUT_POST,'realizada');

    $realizada = $realizada == NULL ? 0 : $realizada;

    $sql = "INSERT INTO tarefas(descricao,data,realizada)
    VALUES ('$descricao','$data','$realizada')
    ";

    $resultado = mysqli_query($connect,$sql);

    if($resultado){
        echo "TAREFA CADASTRADA!<br>";
        echo "COD:". mysqli_insert_id($connect);
    }else{
        echo "TAREFA NÃO CADASTRADA<br>". mysqli_error($connect);
    }
}