<?php

require_once "conectaBD.php";
mysqli_select_db($connect,"matutino");

if($_SERVER["REQUEST_METHOD"] == "POST"){//verifica o metodo requisitado
    $descricao = filter_input(INPUT_POST,'descricao');
    $data = filter_input(INPUT_POST,'data');
    $realizada = filter_input(INPUT_POST,'realizada');
    $id_tarefa = filter_input(INPUT_POST,'id_tarefa');

    $realizada = ($realizada == NULL) ? 0: $realizada;

    $sql = "UPDATE tarefas SET descricao = '$descricao', data = '$data', realizada = $realizada WHERE id_tarefas = $id_tarefa";

    $resultado = mysqli_query($connect,$sql);

    if($resultado == true){
        if(mysqli_affected_rows($connect) == 0){
            echo "TAREFA EDITADA COM SUCESSO";
        }else{
            echo "A tarefa não foi editada";
        }
    }else{
        echo "ERRO AO EDITAR".mysqli_error($connect);
    }
}

