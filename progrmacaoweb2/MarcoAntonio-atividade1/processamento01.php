<?php
$num1 = filter_input(INPUT_POST,'num1');
$num2 = filter_input(INPUT_POST,'num2');
$num3 = filter_input(INPUT_POST,'num3');

if($num1 == $num2 && $num2 == $num3){
    echo "<h3>Os números são iguais. Digite números diferentes para que possa ocorrer a comparação.</h3>";
    }else if($num1 > $num2 && $num1 > $num3){
    echo "<h3>O maior número é: $num1</h3>";
    }else if($num2 > $num3){
    echo "<h3>O maior número é: $num2</h3>";
    }else {
    echo "<h3>O maior número é: $num3</h3>";
    }
    
    echo "<br>";
    
    if($num1 == $num2 && $num2 == $num3){
    echo "<h3>Os números são iguais. Digite números diferentes para que possa ocorrer a comparação.</h3>";
    }else if($num1 < $num2 && $num1 < $num3){
    echo "<h3>O menor número é: $num1</h3>";
    }else if($num2 < $num3){
    echo "<h3>O menor número é: $num2</h3>";
    }else {
    echo "<h3>O menor número é: $num3</h3>";
    }
    

