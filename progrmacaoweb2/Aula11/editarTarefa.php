<?php
    require_once "conectaBD.php";
    mysqli_select_db($connect,'matutino');
    $id_tarefa = filter_input(INPUT_GET,'id');

    $tarefa = ["id_tarefas" => 0, "descricao" => "", "data" => "", "realizada" => 0];//pra n dar erro, pois não fica vazio

    if($id_tarefa != NULL){
        $sql = "SELECT * FROM tarefas WHERE id_tarefas = $id_tarefa";
        $resultado = mysqli_query($connect,$sql);

        if(mysqli_num_rows($resultado) > 0){
            $tarefa = mysqli_fetch_assoc($resultado);
        }
    }   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefas</title>
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="acaoEditarTarefa.php" method="post">
        <label>Descrição:
            <input type="text" name="descricao" maxlength="200" value="<?=$tarefa["descricao"]?>">
        </label>
        <br>
        <label>Data:
            <input type="date" name="data" value="<?=$tarefa["data"]?>">
        </label>
        <br>
        <label>Realizada:
            <input type="checkbox" name="realizada" value="1" <?= ($tarefa["realizada"] == 1) ? "checked": ""?> >
        </label>
        <br>
        <input type="hidden" name="id_tarefa" value="<?=$tarefa["id_tarefas"]?>">
        <button>Salvar</button>
    </form>
</body>
</html>
