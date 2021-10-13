<?php 
    function apagarArquivosPasta($pasta){
        $itenspasta = scandir($pasta);//Tudo oq tem dentro da pasta

        foreach($itenspasta as $item){
            if($item != "." && $item != ".."){//. representa a propria pasta e o .. representa o voltar
                unlink($pasta."/".$item);
            }
        }
    }
    if($_POST){
        $pasta = filter_input(INPUT_POST,'pasta');

        if(file_exists($pasta) && is_dir($pasta)){//verifica se existe e se é uma pasta

           apagarArquivosPasta($pasta);
            rmdir($pasta);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removendo uma pasta com PHP</title>
</head>
<body>
    <form action="exemplo02.php" method="post">
        <label>Nome da pasta: <input type="text" name="pasta"></label>
        <br>
        <button>Remover</button>
    </form>
</body>
</html>