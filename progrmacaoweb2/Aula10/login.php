<?php
    session_start();
    $erro = filter_input(INPUT_GET,'erro');

    if($_POST){
        $login = filter_input(INPUT_POST,'login');
        $senha = filter_input(INPUT_POST,'senha');

        if($login == "admin" && $senha == "1234"){
            $_SESSION["logado"] = true;
            $_SESSION["usuariologado"] = $login;
            header("location: Areaprotegida.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
        if(isset($_SESSION["erro"])){
            echo "<p style='background:red;color:white'>".$_SESSION["erro"]."</p>";
            unset($_SESSION["erro"]);
        }
    ?>
    <form action="login.php" method="post">
        <label>
            Login:<input type="text" name="login">
        </label>
        <br>
        <label>
            Senha:<input type="password" name="senha">
        </label>
        <br>
        <button>Entrar</button>
    </form>
</body>
</html>