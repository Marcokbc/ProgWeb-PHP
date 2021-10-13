<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
</head>
<body>
    <?php 
        $avaliacao_1 = 20;
        $avaliacao_2 = "10";

        $soma_Notas = $avaliacao_1 + $avaliacao_2;

        echo $soma_Notas;

        echo "<br>";

        $idade = "20 anos";

        if($idade >= 18){
            echo "Maior de idade";

        }else{
            echo "Menor de idade";
        }
        echo "<br>";

        $teste = 'teste';

        echo $teste;
    
    ?>
</body>
</html>

<link href="estilo.css" rel="stylesheet">