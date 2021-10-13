<?php 
    if($_POST){
        $nome = filter_input(INPUT_POST,'pasta');
        if(file_exists($nome)){//Verificar se já existe
            echo "já existe";
        }else{
            if($nome){
                mkdir($nome,0777);//Fazer um diretorio
                echo "Pasta criada com sucesso";
            }else{
                echo "Insira um nome";
            }
        }
        
    }
    /*
        0777 - permissão de escrita
        0555 -  somente leitura

    
    */

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
    <form action="exemplo01.php" method="post">
        <label>Nome da pasta: <input type="text" name="pasta"></label>
        <button>Criar</button>
    </form>
</body>
</html>