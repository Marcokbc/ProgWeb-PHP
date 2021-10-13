<?php
require_once "includes/conectaBD.php"; 
require_once "protegido.php";

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($con,$sql);
$quant = mysqli_num_rows($resultado);
include_once "topo.php";
include_once "menu.php";
?>
<h2>Usuários</h2>

<a href="usuario_cadastrar.php" class="btn btn-info">Novo Usuário</a>

<h4><?=$quant?> Usuario(s) cadastrados no sistema</h4>

<?php if($quant > 0){ ?>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Login</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
      <?php while($usuario = mysqli_fetch_assoc($resultado)){ ?>

    <tr>
      <th scope="row"><?=$usuario["id"]?></th>
      <td><?=$usuario["login"]?></td>
      <td><?=$usuario["nome"]?></td>
      <td></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>

<?php include_once "rodape.php" ?>