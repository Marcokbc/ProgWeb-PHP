<?php
    require_once "conectaBD.php";

    $sql = "SELECT * FROM series";
    $resultado = mysqli_query($con,$sql);

    $quant = mysqli_num_rows($resultado);
    //mysqli_fetch_assoc -> retorna no formato de array uma linha de cada vez 
    // while ($dados = mysqli_fetch_assoc($resultado)){    
    // }

    $dados = mysqli_fetch_all($resultado,MYSQLI_ASSOC);//array associativo
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Listagem</title>
</head>
<body>
    <div class="container">
        <table class="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
        </thead>
    <?php
       foreach($dados as $dado){

    ?>
    <tr>
    <td><?=$dado["id"]?></td>
    <td><?=$dado["nome"]?></td>
    <td><?=$dado["nota"]?></td> 
    <!--<li>$dado["nome"]?> - Nota $dado["nota"]?></li>| -->
    </tr>
    
    <?php    
       } 
    ?>
    </table>
    <?php
    foreach($dados as $dado){
        
    ?>
    <a href="serie_editar.php?id=<?=$dado["id"]?>">Editar</a>
    <a href="serie_acao_excluir.php?id=<?=$dado["id"]?>">Excluir</a>
    <?php
    }
    ?>
    <a href="serie_cadastrar.php" class="link">Cadastrar nova serie</a>
    </div>
</body>
</html>