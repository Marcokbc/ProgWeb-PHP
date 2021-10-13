<?php

$final = filter_input(INPUT_POST, 'final');

while($final >= 0){
    echo $final." ";
    $final--; //$final = $final -1;
}