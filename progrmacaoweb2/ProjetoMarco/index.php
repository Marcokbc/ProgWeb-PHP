<?php
    include 'funcoes.php';

    $msg = "";

    $dados = recuperarDados();

    $indice = filter_input(INPUT_GET, 'indice');
    if($indice != NULL){
        $dados = excluirLivro($indice,$dados);
        $msg = "Item excluido com sucesso!";
    }
    
    $livros = listarDados($dados);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão de livros</title>
    <link href="estilo.css" rel="stylesheet">
    
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Leitor de notícias: ital, wght @ 1.200 & display = swap "rel =" stylesheet ">
</head>
<body>
    <?php include "header.php" ?>
    <main>
        <ul>
            <?php if(count($livros) == 0){ ?>
                <div class="msg">Não existem livros cadastrados</div>    
            <?php } ?>
            
            <?php if($msg != ""){ ?>
                <div class="msg"><?=$msg?></div>    
            <?php } ?>

            <?php foreach($livros as $i => $l){ ?>
        
            <li>
                <h4><?=$l[0]?><a href="index.php?indice=<?=$i?>" title="excluiritem">❌</a></h4>
                <p><?=$l[1]?></p>
                <div class="info">
                    <div class="nota">
                    <?php
                    for($i = 0;$i < $l[2]; $i++){
                        echo"⭐";
                    }
                    ?>
                    </div>
                    <div class="leu">Lido:
                        <?=(trim($l[3]) == "true") ? "✔️" : "🔴"?>
                    </div>
                </div>
            </li>
            <?php } ?>

        </ul>
    </main>
    <?php include "footer.php" ?>
</body>
</html>