<?php
//escopo global
$total = 0;
$teste = 0;
function calculaKm($km){
    //escopo local
    global $total;//Para pegar algo que não é do escopo local
    $total += $km;
    echo "<p>A viagem foi de: $total km</p>";
}

calculaKm(100);
calculaKm(400);
//echo $teste;
echo $total;

