<?php
    require_once "includes/conectaBD.php";

    

    if(isset($_SESSION["erro"])){
        $erro = $_SESSION["erro"];
        unset($_SESSION["erro"]);
    }
    $erro = "";
    if($_SERVER["REQUEST_METHOD"] = "POST"){
      
        $login = filter_input(INPUT_POST,"login");
        $senha = sha1(filter_input(INPUT_POST,"senha"));

        $sql = "SELECT * FROM usuario WHERE login = ?  LIMIT 1";//Essa consulta so retorna um resultado por causa do Limit

        $preparada = mysqli_prepare($con,$sql);//Preparando o codigo sql, statment
        mysqli_stmt_bind_param($preparada,"s",$login);//trocar o paramentro coringa. dentro da preparada, vc vai substituir o coringa que é uma string pelo login
        mysqli_stmt_execute($preparada);//executo 

        //$resultado = mysqli_query($con,$sql);
        //$quant = mysqli_num_rows($resultado);
        $resultado = mysqli_stmt_get_result($preparada);//pegar o resultado
        $quant = mysqli_num_rows($resultado);

        if($quant == 1){
          //$usuarioBanco = mysqli_fetch_assoc($resultado);
          $usuarioBanco = mysqli_fetch_assoc($resultado);
            if($senha != $usuarioBanco["senha"]){
                $erro = "USUARIO OU SENHA ESTÂO INVALIDOS!";
            }else{
                $_SESSION["logado"] = true;
                $_SESSION["usuario"] = $login;
                $_SESSION["id_usuario"] = $usuarioBanco["id"];

                header("location: painel.php"); 
            }
        }else{
            $erro = "USUARIO NÃO ENCONTRADO!";
        }
    }
?>

<?php include_once "topo.php"; ?>
<form action="login.php" method="post">
<div class="mb-3">
    <h1 class="display-1">Sistema de Blog</h1>
</div>

<?php if($erro !=  ""){?>
    <div class="alert alert-danger" role="alert">
  <?=$erro?>
</div>

<?php }?>    


<div class="mb-3">
  <label for="login" class="form-label">Login</label>
  <input type="text" class="form-control" id="login" name="login">
</div>
<div class="mb-3">
  <label for="senha" class="form-label">Senha</label>
  <input type="password" class="form-control" id="senha" name="senha">
</div>
<div class="mb-3">
<button type="submit" class="btn btn-success">Entrar</button>
</div>
</form>
<?php include_once "rodape.php"; ?>

