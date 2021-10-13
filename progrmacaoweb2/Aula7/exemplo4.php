<?php

$arquivo = fopen('dados.txt', "r");

//feof -> function END OF FILE. Qunado o arquivo acaba

//repita enquanto o meu arquivo não estiver no fim
while( !feof($arquivo) ){ 
    $texto = fgets($arquivo);//captura uma única linha de dados do arquivo e a retorna como uma sequência.
    if($texto != ""){  
    echo "<p>".$texto."</p>";
    }
}


fclose($arquivo);
 