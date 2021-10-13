<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPETIÇÃO FOR EACH</title>
</head>
<body>
    <form action="receber05.php" method="post">
        <label> 
            <input type="text" name="nome[]"><!--Transforma em um campo de multiplos valores -->
        </label>
        <br>
        <label> 
            <input type="text" name="nome[]">
        </label>
        <br>
        <label> 
            <input type="text" name="nome[]">
        </label>
        <br>
        <label> 
            <input type="text" name="nome[]">
        </label>
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>