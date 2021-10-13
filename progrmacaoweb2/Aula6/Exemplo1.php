<?php
function h1($texto)
{
	return tag("h1",$texto);
}

function tag(string  $tag, string $texto):string{//Dps dos dois pontos diz oq vai ser retornado
	return "<$tag>$texto</$tag>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?=h1("Trabalhando com funções")?>
<?=tag("h2","Subtitulo")?>
<?=tag("p","Teste")?>

</body>
</html>