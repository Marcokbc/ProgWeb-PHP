<?php

if(!isset($_SESSION["logado"])){
    $_SESSION["erro"] = "Usuario não está logado no Sistema";
    header("location: login.php");
}