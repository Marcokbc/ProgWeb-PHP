<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Vaga');

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
if(isset($_POST['excluir'])){
    $obVaga->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';