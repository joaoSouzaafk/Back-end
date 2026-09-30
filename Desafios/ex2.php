<?php

$nome = $_POST['nome'];
$veiculo = $_POST['veiculo'];
$horas = $_POST['horas'];

if ($veiculo == 1) {
    $preco = 5.00;
} elseif ($veiculo == 2) {
    $preco = 8.00;
} elseif ($veiculo == 3) {
    $preco = 12.00;
} else {
    echo "Veículo não encontrado.";
    exit;
}

$total = $horas * $preco;

echo "🚗 Motorista: " . $nome . "<br>";
echo "⏱️ Tempo: " . $horas . " horas<br>";
echo "💰 Total: R$ " . number_format($total, 2, ',', '.');
