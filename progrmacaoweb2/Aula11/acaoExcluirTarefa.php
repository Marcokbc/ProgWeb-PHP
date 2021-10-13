<?php
require_once "conectaBD.php";
mysqli_select_db($connect,'matutino');

$id_tarefa = filter_input(INPUT_GET,'id');

if($id_tarefa != NULL){
    $sql = "DELETE FROM tarefas WHERE id_tarefas = $id_tarefa";

    $resultado = mysqli_query($connect,$sql);

    if($resultado == TRUE){
        if(mysqli_affected_rows($connect) == 1){
            echo "Tarefa com o id $id_tarefa foi removido";
        }else{
            echo "A tarefa não foi excluida pois não existe";
        }
        echo "TAREFA COM O ID $id_tarefa foi excluido";
    }else{
        echo "ERRO AO EXLUIR" . mysqli_error($connect);
    }
}