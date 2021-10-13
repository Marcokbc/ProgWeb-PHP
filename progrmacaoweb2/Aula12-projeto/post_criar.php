<?php
require_once "includes/conectaBD.php";

$erro = "";
$msg = "";
$titulo = "";
$conteudo = "";

$sql = "SELECT * FROM categoria";
$resultCat = mysqli_query($con,$sql);
$quantCat = mysqli_num_rows($resultCat);

$categorias = mysqli_fetch_all($resultCat,MYSQLI_ASSOC);//retorna todos de uma vez, em vez de um por um. Tem que dizer o metodo a ser retornado, nesse caso foi um array associativo


include_once "topo.php";
include_once "menu.php";
?>
<h2>Criar Post:</h2>
<a href="posts.php" class="btn btn-light">Voltar</a>

<?php include_once "mensagens.php"?>

<form method="post" action="post_criar.php">
  <div class="form-group row">
    <label for="titulo" class="col-4 col-form-label">Titulo</label> 
    <div class="col-8">
      <input id="titulo" name="titulo" value="<?=$titulo?>" placeholder="Digite o titulo" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="conteudo" class="col-4 col-form-label">Conteudo</label> 
    <div class="col-8">
      <textarea id="conteudo" name="conteudo" class="form-control">
          <?=$conteudo?>
      </textarea>
    </div>
    <div class="form-group row">
    <label for="imagem" class="col-4 col-form-label">Imagem</label> 
    <div class="col-8">
      <input type="file" name="imagem" id="imagem" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="usuario" class="col-4 col-form-label">Usuario</label> 
    <div class="col-8">
      <input type="text" name="usuario" id="usuario" class="form-control" readonly value=<?=$_SESSION["usuario"]?>>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Categorias</label> 
    <div class="col-8">
        <?php foreach($categorias as $cat){?>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="Categorias[]" id="<?=$cat["nome"]?>" type="checkbox" class="custom-control-input" value="<?= $cat["id"]?>"> 
          <label for="<?=$cat["nome"]?>" class="custom-control-label"><?=$cat["nome"]?></label>
        </div>
      </div>
      <?php }?>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Criar</button>
    </div>
  </div>
</form>

<?php include_once "rodape.php" ?>