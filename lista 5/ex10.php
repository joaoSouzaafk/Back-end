<?php

$peso = 70;
$altura = 1.75;
$resultado = $peso / ($altura * $altura);

echo "Seu peso é: ", $peso,"<br>";
echo "Sua altura é: ", $altura, "<br>";
echo "Seu IMC é: ", $resultado, "<br>";

if ($resultado < 25) {
    echo "Peso ideal";
}
else if($resultado < 20){
    echo "Peso baixo de mais";
} 
else if ($resultado >= 25 && $resultado < 30) {
    echo "Sobrepeso";
} 
else if ($resultado >= 30 && $resultado < 35) {
    echo "Obesidade grau 1";
} 
else if ($resultado >= 35 && $resultado < 40) {
    echo "Obesidade grau 2";
} 
else if ($resultado >= 40) {
    echo "Obesidade grau 3";
}

?>
