<?php

$litros = $_POST['litros'];
$combustivel = $_POST['combustivel'];

if ($combustivel == 1) {
    $preco = 6.20;
} elseif ($combustivel == 2) {
    $preco = 4.20;
} elseif ($combustivel == 3) {
    $preco = 6.00;
} else {
    echo "Combustível não encontrado.";
    exit;
}

$total = $litros * $preco;

echo "⛽ Você abasteceu " . $litros . " litros.<br>";
echo "💰 Total: R$ " . number_format($total, 2, ',', '.');
