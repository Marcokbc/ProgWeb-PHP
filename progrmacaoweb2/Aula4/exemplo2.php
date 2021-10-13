<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle</title>
</head>
<body>
    <h1>Estrutura de Controle SWITCH</h1>
    <form action="receber02.php" method="post">

        <label>
            Categoria de Produto:
            <select name="categoria">
                <option value="1">Vestuario</option>
                <option value="2">Cama e Mesa</option>
                <option value="3">Ferramentas</option>
                <option value="4">Telefonia</option>
                <option value="5">Eletronicos</option>
                <option value="6">Informatica</option>
            </select>
        </label>
        <br>
        <label>
            Valor do produto:
            <input type="number" name="valor" step="0.1">
        </label>
        <br>
        <button>Enviar</button>

    </form>
</body>
</html>