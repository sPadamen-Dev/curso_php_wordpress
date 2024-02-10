<?php

// Faça um script php que receba 10 números inteiros e, após receber todos, acuse qual é o  maior número.
$numero_maior = readline("Digite um numero: ");
for($i = 1; $i <= 10; $i++){
$segundo_numero = readline("Digite outro numero: ");
if( $numero_maior < $segundo_numero){
    $numero_maior = $segundo_numero;
}
}
echo $numero_maior;

?>