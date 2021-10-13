<?php

function calculakm($km){
    static $total; //valor estatico. Assim ele n muda
    $total += $km;
    echo "<p>Foi feita uma viagem de $km km e o carro percorreu $total km</p>";

}

calculakm(100);
calculakm(300);