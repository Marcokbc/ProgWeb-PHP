<?php 
    $arquivo = filter_input(INPUT_GET,"arquivo");

    if($arquivo == NULL || $arquivo == ""){
        header("location: index.php?erro=4"); 
    }
    if(!is_file($arquivo)){
        header("location: index.php?erro=5");
    }
    unlink($arquivo);//recebe arquivo a ser excluido
    header("location:index.php");
?>