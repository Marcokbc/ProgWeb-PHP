<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <form action="serieAcaoCadastro.php" method="post">
        <label>
            Nome da serie:
            <input type="text" name="nome">
        </label>
        <label>
            Nota da serie: 
            <input type="number" step="0.1" name="nota">
        </label>
        <button>Salvar</button>
        <a href="serie_listar.php">Listar series</a>

    </form>
    </div>
</body>
</html>