<?php

//calculadora, troque a operação 4 vezes para testar +, -, *

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo "Soma é: ", $n1 + $n2;
}
else if($operacao == "-"){
    echo "Subtração é: ", $n1 - $n2;
}
else if($operacao == "*"){
    echo "Multiplicação é: ", $n1 * $n2;
}
else if($operacao == "/"){
    echo "Divisão é: ", $n1 / $n2;
}
else{
    echo "operção invalida";
}
?>