<?php

$nomes = filter_input(INPUT_POST,'nome',FILTER_REQUIRE_ARRAY);//esta dizendo que a opção que ele quer é requerir um array. Em vez de por o FILTER_DEFAULT e dps a opção

//para cada item A varivavel dos valores as a varivael que vai receber
foreach($nomes as $indice => $nome){//A varivavel dos valores as variavel dos indicies indice => variavel que recebe os valores
    echo "<li>$indice - $nome</li>";
}