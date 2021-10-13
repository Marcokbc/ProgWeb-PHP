<?php

//Iniciar o uso de sessões
session_start();

$teste = "valor 1";

//Atribui um valor a um indicie da minha sessão
$_SESSION["teste"] = $teste; //Permite salvar um valor dentro da sessão. Primeiro o nome da seção e depois o valor