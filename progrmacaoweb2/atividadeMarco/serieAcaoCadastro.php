<?php

require_once "conectaBD.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST,"nome");
    $nota = filter_input(INPUT_POST,"nota");

    $sql = "INSERT INTO series(nome,nota) VALUES (?,?)";

    //preparow a declaração sql => porteger
    $preparada = mysqli_prepare($con,$sql);
    //Substituir
    mysqli_stmt_bind_param($preparada,"sd",$nome,$nota);
    //executo o cod preparado
    if(mysqli_stmt_execute($preparada)){
        echo "serie cadastrada com sucesso";
        echo "<a href='serie_cadastrar.php'>Voltar</a>";
    }

}else{
    header("location: serie_cadastrar.php");
}