<?php
require_once "includes/conectaBD.php";

$id = filter_input(INPUT_GET,"id");

if($id != ""){
    $sql = "DELETE FROM categoria WHERE id = ?";
    $preparar = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($preparar,"i",$id);
    if(mysqli_stmt_execute($preparar)){
        $_SESSION["msg"] = "Categoria Excluida com sucesso";
        
    }else{
        $_SESSION["erro"] = "Houve um erro no banco";
    }
    header("location: categorias.php");
    


}