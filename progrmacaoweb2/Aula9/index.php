<?php 

    $pasta = "arquivos";
    $arquivos = scandir($pasta);//recupera todos os elementos

    array_splice($arquivos,0,2);//remove itenas de um array, no caso começa na posição 0 e remove os dois seguintes

    $imagens = [];
    $pastas = [];
    foreach($arquivos as $arquivo){
        if(is_dir("$pasta/$arquivo")){
            array_push($pastas,$arquivo);
        }else{
            array_push($imagens,$arquivo);
        }
    }

    $erro = filter_input(INPUT_GET,"erro");
    $msgErro = "";

    if($erro != NULL){
        switch($erro){
            case 1:
                $msgErro = "O tipo de Arquivo não é permitido";
            break;
            case 2:
                $msgErro = "O tamanho do arquivo é maior do que o permitido"; 
            break;
            case 3:
                $msgErro = "Houve um erro na transferencia do arquivo";
            break;
            case 4:
                $msgErro = "Ouve um erro ao excluir o arquivo";
            break;
            case 5:
                $msgErro = "Arquivo não existe para ser excluido";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Arquivos</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Arquivo:<input type="file" name="arquivo"></label>
        <br>
        <label>Pasta:<input type="text" name="pastaSalvamento" list="pastas">
            <datalist id="pastas">
                <?php 
                    foreach($pastas as  $p){
                    }
                ?>
            </datalist>
        </label>
        <button>Enviar Arquivo</button>
    </form>
    <div><?=$msgErro?></div>
    <div id="imagens">
       
        <?php 
            foreach($imagens as $imagem){
                //if(!is_dir("$pasta/$arquivo")){ 
                echo "<img src='$pasta/$imagem' width='200'>";
                echo "<a href='excluir.php?arquivo=$pasta/$imagem'>Excluir</a>";
                echo "<hr>";
                //}
            }
        ?>

    </div>
</body>
</html>