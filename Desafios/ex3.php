<?php

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

$imcFormatado = number_format($imc, 2, ',', '.');

echo "<h1>🥗 NutriVida</h1>";

echo "<h2>📊 Resultado do IMC</h2>";

echo "👤 Paciente: " . $nome . "<br>";
echo "⚖️ Peso: " . $peso . " kg<br>";
echo "📏 Altura: " . $altura . " m<br>";
echo "📊 IMC: " . $imcFormatado . "<br>";


if ($imc < 18.5) {

    echo "ℹ️ Classificação: Abaixo do peso<br><br>";

    echo "💡 O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.";
} elseif ($imc >= 18.5 && $imc <= 24.9) {

    echo "ℹ️ Classificação: Peso normal<br><br>";

    echo "💡 Continue mantendo uma alimentação equilibrada e hábitos saudáveis. Procure um profissional para uma avaliação individualizada.";
} elseif ($imc >= 25 && $imc <= 29.9) {

    echo "ℹ️ Classificação: Sobrepeso<br><br>";

    echo "💡 O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.";
} else {

    echo "ℹ️ Classificação: Obesidade<br><br>";

    echo "💡 Procure um profissional de saúde para receber orientações adequadas para sua situação e uma avaliação individualizada.";
}

echo "<br><br>";

echo "📅 Quer cuidar melhor da sua saúde?<br>";
echo "Agende uma consulta com nossa nutricionista!";
