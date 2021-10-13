<?php
require_once "conectaBD.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST,"nome");
    $nota = filter_input(INPUT_POST,"nota");
    $id = filter_input(INPUT_GET,"id");

    $sql = "UPDATE series SET nome = ?, nota = ? WHERE id = ?";
    $preparada = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($preparada,"sdi",$nome,$nota,$id);

    if(mysqli_stmt_execute($preparada)){
        echo "<h2>Serie Editada com Sucesso</h2>";
        echo "<a href='serie_editar.php?id=$id'>Voltar</a>";
    }
}