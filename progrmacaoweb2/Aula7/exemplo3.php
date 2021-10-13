<?php

// modo w é para escrever(write)
// exemplo: $arquivo = fopen('dados.txt', "w");

//modo a(append) é o modo de concatenação. Escreve mas n perde oq tem dentro
$arquivo = fopen('dados.txt', "a");

//fwrite escreve em um arquivo.
fwrite($arquivo,"\nModificando o texto do arquivo.\n");
// \n quebra linha


fclose($arquivo);