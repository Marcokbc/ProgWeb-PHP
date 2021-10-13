<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefas</title>
</head>
<body>
    <h1>Gestão de Tarefas</h1>
    <form action="acaoCriarTarefa.php" method="post">
        <label>Descrição:
            <input type="text" name="descricao" maxlength="200">
        </label>
        <br>
        <label>Data:
            <input type="date" name="data">
        </label>
        <br>
        <label>Realizada:
            <input type="checkbox" name="realizada" value="1">
        </label>
        <br>
        <button>Salvar</button>
    </form>
</body>
</html>