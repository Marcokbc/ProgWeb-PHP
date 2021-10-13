<?php
session_start();

unset($_SESSION["logado"]);//Apagar o valor de session logado
unset($_SESSION["usuariologado"]);
//session_destroy();

header("location: login.php");
die();