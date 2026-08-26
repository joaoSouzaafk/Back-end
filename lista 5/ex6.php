<?php

$usuario = "joaovictor";
$idade = 27;

if($idade < 13){
    echo "Cadastro nao permitido!";
}
else if($idade >= 13 && $idade <16){
    echo "Só pode usar a platarforma com controle dos Pais!";
}else{
    echo "Plataforma liberda!!!";
}

?>