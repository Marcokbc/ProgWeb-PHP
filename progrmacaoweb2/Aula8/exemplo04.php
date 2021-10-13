<?php 

function criarPasta($pasta){
    if(!file_exists($pasta)){
        mkdir($pasta);
    }
}
//$_FILES é responsavel por receber os arquivos
//Envio de arquivo é só post
//$_SERVER retorna os dados da requisição, o indice REQUEST_METHOD retorna se foi utilizado o metodo post ou get
    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        $arquivo = $_FILES["arquivo"];
        $pasta = filter_input(INPUT_POST,'pasta');//Poderia ser $_POST["pasta"]; tbm mas o filter input faz uma filtragem
        $nome = filter_input(INPUT_POST,'nomearq');

        criarPasta($pasta);
    
        $nomearquivoarray = explode(".",$arquivo["name"]);
        $ext = end($nomearquivoarray);
        // echo $arquivo["name"];
        // echo "<br>";
        // echo $arquivo["size"];
        // echo "<br>";
        // echo $arquivo["type"];

        $origem = $arquivo["tmp_name"];//Localização temporaria do arquivo no meu servidor
        $destino = $pasta."/".$nome.".".$ext;//LOcalização onde sera salva

        move_uploaded_file($origem, $destino);
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
    <form action="exemplo04.php" method="post" enctype="multpart/form-data"><!-- Tem que add isso para poder enviar arquivos  -->
        <label>Arquivo: <input type="file" name="arquivo"></label><br>
        <label>Pasta: <input type="text" name="pasta"></label><br>
        <label>Nome do arquivo: <input type="text" name="nomearq"></label><br>
        <button>Enviar arquivo</button>
    </form>
</body>
</html>