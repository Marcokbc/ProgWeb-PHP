<?php

session_start();

if(isset($_SESSION["teste"])){//Verifica se uma variavel foi setada ou n
    echo $_SESSION["teste"];
    session_destroy();//poderia ser o unset tbm. Destroi a sessão
}else{
    echo "Não existe a Sessão!";
}
