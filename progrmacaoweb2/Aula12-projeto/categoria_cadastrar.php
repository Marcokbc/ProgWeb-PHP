<?php
require_once "includes/conectaBD.php";

$msg = "";
$erro = "";
$nome = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST,"nome");

    if($nome == ""){
        $erro = "Nome é um campo obrigatorio!";
    }else{
        $sql = "SELECT * FROM categoria WHERE nome = ?";

        $preparada = mysqli_prepare($con,$sql);
        mysqli_stmt_bind_param($preparada,"s",$nome);
        mysqli_stmt_execute($preparada);

        $resultado = mysqli_stmt_get_result($preparada);
        $quant = mysqli_num_rows($resultado);

        if($quant > 0){
            $erro = "Nome de categoria já utilizado";
        }
    }

    if($erro == ""){
        $sql = "INSERT INTO categoria (nome) VALUES (?)";

        $preparada = mysqli_prepare($con,$sql);

        mysqli_stmt_bind_param($preparada,"s",$nome);

        if(mysqli_stmt_execute($preparada)){
            $id = mysqli_stmt_insert_id($preparada);
            $msg = "Categoria com o id $id Cadastrada com sucesso";
            $nome = "";
        }else{
            $erro = "Erro ao cadastrar categoria";
        }
    }
}

include_once "topo.php";
include_once "menu.php";
?>
<h2>Cadastrar Categoria:</h2>
<a href="categorias.php" class="btn btn-light">Voltar</a>

<?php include_once "mensagens.php"?>

<form method="post" action="categoria_cadastrar.php">
  <div class="form-group row">
    <label for="nome" class="col-4 col-form-label">Nome</label> 
    <div class="col-8">
      <input id="nome" name="nome" value="<?=$nome?>" placeholder="Digite seu nome" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>

<?php include_once "rodape.php" ?>