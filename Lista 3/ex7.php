<?php
$nomecompleto = "Nicolas Campos";
$senha = "31080909";
$confirmesenha = "31080909";
$idade = "18";
if($nomecompleto <> "   "){
    echo " Nome Correto ";
    
 } 

 else{
    echo " Nome incorreto ";
} 
 echo"<br>";
if($senha == $confirmesenha){
    echo " senha correta ";
    }
     
else{
   echo " Senha incorreta ";
}
echo"<br>";
if($idade >=18){
    echo" Liberado ";
}
 
else{
    echo"Acesso Negado";
    }
    echo "<br>";
    if($nomecompleto <> ""   &&   $senha == $confirmesenha && $idade >=18){
        echo "Cadrastro Liberado";
    }
    else{
        echo "Acesso Negado";
    }
    





