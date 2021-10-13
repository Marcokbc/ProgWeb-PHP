<?php
function somar(int $a, int $b):int{
	$soma = $a + $b;
	return $soma;
}

function somarvarios(){
	$parametros = func_get_args(); //recupera todos os parametros passados para uma função
	$quant = func_num_args();//quantidade de parametros
	$soma = 0;
  
	for($i=0;$i<$quant;$i++){
	$soma += $parametros[$i];
}

return $soma;
}

echo somar(5,10);
echo "<br>";
echo somarvarios(10,20,40,100);
