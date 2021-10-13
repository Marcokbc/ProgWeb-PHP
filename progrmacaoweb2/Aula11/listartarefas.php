<?php
    require_once 'conectaBD.php';
    mysqli_select_db($connect,'matutino');

    $sql = "SELECT * FROM tarefas";

    $resultado = mysqli_query($connect,$sql);

    $quantidade = mysqli_num_rows($resultado);//retorna a quantidade de linhas em resultado
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Tarefas</title>
</head>
<body>
    <h1>Gestão de Tarefas</h1>

    <?php 
        if($quantidade > 0){
            echo "<ul>";
            while($tarefa = mysqli_fetch_assoc($resultado)){//transforma cada nome de campo em um indice do array
                echo "<li>
                 <li>$tarefa[id_tarefas] - $tarefa[data]<br> $tarefa[descricao]</li>;
                <a href='acaoExcluirTarefa.php?id=$tarefa[id_tarefas]'>Excluir</a>
                <a href='editarTarefa.php?id=$tarefa[id_tarefas]'>Editar</a>
                </li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>