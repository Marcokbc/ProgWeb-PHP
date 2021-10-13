<?php
    require_once "conectaBD.php";

    $id = filter_input(INPUT_GET,"id");

    $sql = "SELECT * FROM series WHERE id = ?";
    $preparada = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($preparada,"i",$id);
    mysqli_stmt_execute($preparada);

    //Retornar o resultado da consulta preparada execultada anteriormente
    $resultado = mysqli_stmt_get_result($preparada);

    $dados = mysqli_fetch_assoc($resultado);
    $nome = $dados["nome"];
    $nota = $dados["nota"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Edição</title>
</head>
<body>
    <div class="container">
    <form action="serieAcaoEditar.php?id=<?=$id?>" method="post">
        <label>
            Nome da serie:
            <input type="text" name="nome" value="<?=$nome?>">
        </label>
        <label>
            Nota da serie: 
            <input type="number" step="0.1" name="nota" value="<?=$nota?>">
        </label>
        <button>Editar</button>


    </form>
    </div>
</body>
</html>