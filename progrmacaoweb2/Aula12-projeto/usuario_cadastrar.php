<?php
require_once "includes/conectaBD.php";

$erro = "";
$msg = "";
$nome = "";
$login = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST,"nome");
    $login = filter_input(INPUT_POST,"login");
    $senha = filter_input(INPUT_POST,"senha");
    $confirma = filter_input(INPUT_POST,"confirma");

    if($nome == ""){
        $erro = "Nome do Usuário é um campo obrigatório";
    }else if($login == ""){
        $erro = "O login do Usuário é um campo obrigatório";
    }else if($senha == ""){
        $erro = "A senha é um campo Obrigatorio";
    }else if($senha != $confirma){
        $erro = "As senhas estão diferentes";
    }else{
        $sql = "SELECT * FROM usuario WHERE login = ?";
        //preparar a declaração sql
        $stmt = mysqli_prepare($con,$sql);
        //substituir o coringa por um valor real
        mysqli_stmt_bind_param($stmt,"s",$login);
        //executa a declaração preparada
        mysqli_stmt_execute($stmt);
        //recupera o resultado
        $resultado = mysqli_stmt_get_result($stmt);

        $quant = mysqli_num_rows($resultado);

        if($quant > 0){
            $erro = "login já utilizado no sistema";
        }

    }
    if($erro == ""){
      $senha = sha1($senha);

      $sql = "INSERT INTO usuario(nome,login,senha) VALUES (?,?,?)";

      $stmt = mysqli_prepare($con,$sql);
      mysqli_stmt_bind_param($stmt,"sss",$nome,$login,$senha);
      if(!mysqli_stmt_execute($stmt)){
        $erro = "Houve um erro no cadastro do usuario no banco";
      }else{
        $id = mysqli_stmt_insert_id($stmt);
        $msg = "Usuario com o id $id cadastrado com sucesso!";
        $login = "";
        $nome = "";
      }


    }

}


include_once "topo.php";
include_once "menu.php";
?>
<h2>Cadastrar Usuario:</h2>
<a href="usuarios.php" class="btn btn-light">Voltar</a>

<?php include_once "mensagens.php"?>

<form method="post" action="usuario_cadastrar.php">
  <div class="form-group row">
    <label for="nome" class="col-4 col-form-label">Nome</label> 
    <div class="col-8">
      <input id="nome" name="nome" value="<?=$nome?>" placeholder="Digite seu nome" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="login" class="col-4 col-form-label">Login</label> 
    <div class="col-8">
      <input id="login" name="login" value="<?=$login?>" placeholder="Digite seu login" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="senha" class="col-4 col-form-label">Senha</label> 
    <div class="col-6">
      <input id="senha" name="senha" placeholder="Digite sua senha" type="password" class="form-control">
    </div>
    <div class="col-2">
    <button class="bi bi-eye-fill" id="btnmostras">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
      </button>
      </div>
  </div>
  <div class="form-group row">
    <label for="confirma" class="col-4 col-form-label">Repita a Senha</label> 
    <div class="col-6">
      <input id="confirma" name="confirma" placeholder="Confirme sua senha" type="password" class="form-control">
    </div>
    <div class="col-2">
    <button class="bi bi-eye-fill" id="btnconfirma">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
      </button>
      </div>
  </div> 
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>
<script type="text/javascript">
  let btn = document.getElementById('btnmostras');
  let btncon = document.getElementById('btnconfirma');

  btn.addEventListener('click',function(event){
    event.preventDefault();
    let senha = document.getElementById('senha');

    if(senha.type == "password"){
      senha.type = "text";
    }else{
      senha.type = "password";
    }

    
  })
  btncon.addEventListener('click',function(event){
    event.preventDefault();
    let senhacon = document.getElementById('confirma');

    if(senhacon.type == "password"){
      senhacon.type = "text";
    }else{
      senhacon.type = "password";
    }
  });

</script>

<?php include_once "rodape.php" ?>