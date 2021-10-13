<?php
    require_once "includes/conectaBD.php";

    $id = filter_input(INPUT_GET,"id");

    if($id != ""){
        $sql = "DELETE FROM usuario WHERE id = ?";

        if($id != 1){ 
        $stmt = mysqli_prepare($con,$sql);
        mysqli_stmt_bind_param($stmt,"i",$id);
        if(mysqli_stmt_execute($stmt)){
            $_SESSION["msg"] =  "USUARIO EXCLUIDO COM SUCESSO";

        }else{
            $_SESSION["erro"] =  "Erro ao excluir usuario";
        }
    }else{
        $_SESSION["erro"] = "Não é possivel excluir o usuario admin";
    }
        header("location: usuarios.php");
    }