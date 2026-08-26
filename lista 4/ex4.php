<?php

$email = "seuemail@gmail.com";
$senha = "fghjkl";
$ativo = true;
echo "Login - Facebook <br>";

if($email == "seuemail@gmail.com" &&
    $senha == "suasenhai123" && $ativo == true){
        echo "Login autorizado...";
    }
else{
    echo "Usuários ou senha invalidos";
}
?>