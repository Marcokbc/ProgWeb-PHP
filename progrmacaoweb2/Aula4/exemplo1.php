<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle</title>
</head>
<body>
    <h1>Estrutura de Controle</h1>
    <form action="receber01.php" method="post">

        <label>
            Nome: <input type="text" name="nome">

        </label>
        <br>
        <label>
            Curso:
            <select name="curso">
                <option value="1">Informatica</option>
                <option value="2">Edificações</option>
            </select>
        </label>
        <br>
        <label>
            Receber informações?:
            <input type="checkbox" name="aceita" value="true">
        </label>
        <br>
        <button>Enviar</button>

    </form>
</body>
</html>