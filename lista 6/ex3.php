<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1 - Consulta saldo, 2 - Fazer Saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 3;

switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650,81";
        break;
    case 2:
        echo "Qual valor?";
        break;
    case 3:
        echo "Qual valor do depósito?";
        break;
    case 4:
        echo "Extrato:<br>-R$100,00<br>+R$20,50<br>-R$10,90<br>+R$780,00";
        break;
    case 5:
        echo "Você saiu";
        break;
    default:
        echo "Opção invalida";
        break;
}
?>