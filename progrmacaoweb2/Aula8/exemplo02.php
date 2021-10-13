<?php 
    if($_POST){
        $original = filter_input(INPUT_POST, 'pastaOriginal');
        $novo = filter_input(INPUT_POST,'pastaNovo');

        /*
        file_exists retorna true quando o arquivo ou pasta já exista
        */

        if(file_exists($original) && !file_exists($novo)){
            rename($original,$novo);//renomeia com o antigo e o novo, e pode mudar a localização
        }else{
            echo "A pasta não existe ou seu novo nome já esta em uma pasta";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma pasta com PHP</title>
</head>
<body>
    <form action="exemplo02.php" method="post">
        <label>Nome da pasta Original: <input type="text" name="pastaOriginal"></label>
        <br>
        <label>Nome da pasta Novo: <input type="text" name="pastaNovo"></label>
        <br>
        <button>renomear</button>
    </form>
</body>
</html>