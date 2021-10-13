<?php

$turno = filter_input(INPUT_POST, 'turno');

switch($turno){
    case "matutino":
        echo "<h3>BOM DIA!</h3>";
        break;
    case "vespertino":
        echo "<h3>BOA TARDE!</h3>";
        break;
    case "noturno":
        echo "<h3>BOA NOITE!</h3>";

}