<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="salvar.php" method="post">
        <label>Nome:<input type="text" name="nome"></label><br>
        <label>Telefone:<input type="tel" name="telefone"></label><br>
        <button>Salvar</button>
    </form>
    <?php
        $textoDoArquivo = file_get_contents("alunos.txt");
        $dados = explode("\n",$textoDoArquivo);
        array_pop($dados);

        foreach($dados as $aluno){
            $dadosAluno = explode(";",$aluno);
            echo "<li>$dadosAluno[0]</li>";
        }
    ?>
</body>
</html>