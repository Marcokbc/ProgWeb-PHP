<?php
    session_start();

    if(!isset($_SESSION["logado"])){
        $_SESSION["erro"] = "Usuario não logado";
        header("location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<body>
    <h1>Acesso</h1>
    <h2>Usuário Logado: <?=$_SESSION["usuariologado"]?></h2>
    <a href="logout.php">Sair</a>
</body>
</html>