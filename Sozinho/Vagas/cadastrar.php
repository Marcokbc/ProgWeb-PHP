<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Vaga;

//Validação do post
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $titulo = filter_input(INPUT_POST,'titulo');
    $descricao = filter_input(INPUT_POST,'descricao');
    $ativo = filter_input(INPUT_POST,'titulo');

    $obVaga = new Vaga();
    $obVaga->titulo = $titulo;
    $obVaga->descricao = $descricao;
    $obVaga->ativo = $ativo;
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';