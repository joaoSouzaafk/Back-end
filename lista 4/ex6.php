<?php
$idade_cliente = 40;
$pcd = true;
$gestante = false;

if($idade_cliente >=60 || $pcd == true || $gestante == true){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}
