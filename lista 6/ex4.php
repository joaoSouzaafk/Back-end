<?php

$opcao = 3;
echo "1 - Pizza, 2 - Hamburguer, 3 - Refrigerante, 4 - Sobremesa, 5 - Sair<br>";

switch ($opcao) {
    case 1:
        echo "Pizza";
        break;
    case 2:
        echo "Hamburguer";
        break;
    case 3:
        echo "Refrigerante";
        break;
    case 4:
        echo "Sobremesa";
        break;
    case 5:
        echo "Você saiu";
        break;
    default:
        echo "Opção invalida";
        break;
}
?>