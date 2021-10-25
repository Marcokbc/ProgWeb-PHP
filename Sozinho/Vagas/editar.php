<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Vaga;

//VALIDAÇÃO 
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//Consulta a vaga
$obVaga = Vaga::getVaga($_GET('id'));

//Validar a vaga

if(!$obVaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;
}

//Validação do post
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $titulo = filter_input(INPUT_POST,'titulo');
    $descricao = filter_input(INPUT_POST,'descricao');
    $ativo = filter_input(INPUT_POST,'titulo');

    $obVaga->titulo = $titulo;
    $obVaga->descricao = $descricao;
    $obVaga->ativo = $ativo;
    $obVaga->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar_exclusao.php';
include __DIR__.'/includes/footer.php';