<?php

$codigo = filter_input(INPUT_GET, 'cod');

if($codigo != NULL){

    $valor = $codigo;
    if(isset($_COOKIE["carrinho"])){
        $valor = $_COOKIE["carrinho"].",".$valor;
    }

    setcookie("carrinho",$valor,time() + 60 * 60 * 24 * 2);
    header("location: loja.php");
}