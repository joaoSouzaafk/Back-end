<?php

$valor = $_POST["valor"];
$dinheiro = $_POST["dim"];
if($dinheiro < $valor){
    echo "Falta dinheiro";
}

echo "O número é: ", $dinheiro - $valor;


?>
