<?php

//Pode ser utilizada a função time(); para expecificar o prazo 
//Time retorna o timestamp desde o dia 01/01/1970 até hj
//time() somar mais a quantidade de segundos * minutos * horas * dias

//cookie é um arquivo que vai ficar salvo no seu computador
setcookie("primeirocookie","salvar", time() + 60);//primeiro um nome, depois um valor e depois o prazo de validade mas não é obrigatorio