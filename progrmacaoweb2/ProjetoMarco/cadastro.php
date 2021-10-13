<?php
    include 'funcoes.php';
    
    
    $erro = "";
    $msg = "";

    if($_POST){
        $titulo = filter_input(INPUT_POST,'titulo');
        $descricao = filter_input(INPUT_POST,'descricao');
        $nota = filter_input(INPUT_POST, 'nota');
        $leu = filter_input(INPUT_POST,'leu');

        $leu = ($leu == NULL) ? "false" : $leu;
        if($titulo != ""){
            cadastrarLivro($titulo,$descricao,$nota,$leu);

            $msg = "Cadastro realizado com sucesso";
        }else{
            $erro = "O Titulo é um campo obrigatorio!";
        }

    }
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
        <h2>Cadastro de Livros</h2>
        <form action="cadastro.php" method="post">
            <label> 
                Titulo:<input type="text" name="titulo" >
            </label>
            <label>
                Descrição:<input type="text" name="descricao">
            </label>
            <label>
                Nota:
                <select name="nota">
                <option value="0"> - </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                </select>
            </label>
        <label>
            Leu:<input type="checkbox" value="true" name="leu">
        </label>
        <button>Salvar</button>
        </form>
        <?php
        if($msg != ""){ ?>
        <div class="msg"> 😎 <?=$msg?></div>
        <?php } ?>
        <?php
        if($erro != ""){?> 
        <div class="erro"> 😡 <?=$erro?></div>
        <?php } ?>
    </main>
    <?php include "footer.php" ?>
</body>
</html>