<?php
$valorPedido = 100;
$valorMinimoEntrega = 50;
$idade_cliente = 18;
$idadeMinimaBebidaAlcoolica = 18;
$estoque = 35;
$quantidadePedida = 3;
$statusPedido = "pago";

if($valorPedido >= $valorMinimoEntrega){
    echo "Entrega liberada";
}
else{
    echo "Pedido não atingiu o valor mínimo de entrega";
}
echo "<br>";
if($idade_cliente >=18){
    echo"Pode consumir bebida alcólica";
}
else{
    echo"Não pode consumir bebiba alcólica";
}
echo "<br>";
if($quantidadePedida <= $estoque){
    echo"Quantidade em estoque está ok!";
}
else{
    echo"Quantidade não disponivel em estoque";
}
echo "<br>";
if($statusPedido == "pago"){
    echo "Liberado para produção";
}
else{
    echo "Pagamento ainda não foi efetuado";
}
