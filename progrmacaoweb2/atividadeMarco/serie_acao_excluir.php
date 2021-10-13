<?php

require_once "conectaBD.php";

$id = filter_input(INPUT_GET,"id");

$sql = "DELETE FROM series WHERE id = ?";
$preparada = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($preparada,"i",$id);

if(mysqli_stmt_execute($preparada)){
    echo "<h2>Serie Excluida com Sucesso</h2>";
    echo "<a href='serie_listar.php'>Voltar</a>";
}

