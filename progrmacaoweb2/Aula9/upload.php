<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $arquivo = $_FILES["arquivo"];
    $tipo = $arquivo["type"]; 
    $tamanho = $arquivo["size"]; 
    $erro = $arquivo["error"];
    $temp = $arquivo["tmp_file"];

    // echo "<pre>";
    // var_dump($arquivo);

    $pastaSalvamento = filter_input(INPUT_POST,'pastaSalvamento');

    $pasta = ($pastaSalvamento == NULL) ? "arquivos" : $pastaSalvamento;

    $tiposPermitidos = ["image/png", "image/jpeg","image/jpeg"];
    $tamanhoPermitido = 1000000;
    if(!in_array($tipo,$tiposPermitidos)){//checa se oq tem em um tem no outro e devolve um booleano
        header("location: index.php?erro=1");
    }
    if($tamanho > $tamanhoPermitido){
        header("location: index.php?erro=2");
    }
    if($erro != 0){
        header("location: index.php?erro=3");
    }
    if(!is_file($pasta)){//caso a pasta não exista ela é criada
        mkdir($pasta);
    }

    $localSalvamento = $pasta."/".$arquivo;

    move_uploaded_file($temp,$localSalvamento);//Pega a localização temporaria 

}else{
    header("location: index.php");//redireciona o usuario
}
