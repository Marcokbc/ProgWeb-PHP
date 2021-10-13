<?php
$nome = filter_input(INPUT_POST, 'nome'); 
$curso = filter_input(INPUT_POST, 'curso');
$aceita = filter_input(INPUT_POST, 'aceita');

if($aceita == true){
    echo "ACEITOU";

}else{
    echo "Não Aceitou";
}