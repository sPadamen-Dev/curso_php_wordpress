<?php
// 1)

$primeiro_numero = readline("Digite um numero: ");
$segundo_numero = readline("Digite outro numero: ");

if($primeiro_numero > $segundo_numero){
    $resultado = "O primeiro numero e maior do que o segundo";
}else{
    $resultado = "O segundo numero e maior do que o primeiro";
}

// echo resultado

// 2)

$primeiro_numero = readline("Digite um numero: ");
$segundo_numero = readline("Digite outro numero: ");

if($primeiro_numero + $segundo_numero > 10){
    $resultado = "O produto e maior que 10 "
}
// echo resultado

// 3)

$primeiro_numero = readline("Digite um numero: ");
$segundo_numero = readline("Digite outro numero: ");
$terceiro_numero = readline("Digite outro numero: ");

if($primeiro_numero > $segundo_numero || $primeiro_numero > $terceiro_numero){
    $numero_maior = $primeiro_numero
}
elseif($segundo_numero > $primeiro_numero || $segundo_numero > $terceiro_numero){
    $numero_maior = $segundo_numero
}
elseif($terceiro_numero > $primeiro_numero || $terceiro_numero > $segundo_numero){
    $numero_maior = $terceiro_numero
}else{
    echo "Todos os numeros digitados sao iguais."
}


if($primeiro_numero < $segundo_numero || $primeiro_numero < $terceiro_numero){
    $numero_menor = $primeiro_numero
}
elseif($segundo_numero < $primeiro_numero || $segundo_numero < $terceiro_numero){
    $numero_menor = $segundo_numero
}
elseif($terceiro_numero < $primeiro_numero || $terceiro_numero < $segundo_numero){
    $numero_menor = $terceiro_numero
}

echo "O maior numero e: ".$numero_maior "\n" . " e o menor e: " .$numero_menor

// 4)
$primeiro_numero = readline("Digite um numero: ");
$segundo_numero = readline("Digite outro numero: ");
$terceiro_numero = readline("Digite outro numero: ");

if($segundo_numero + $terceiro_numero < $primeiro_numero){
    echo "Os valores formam lados de um triangulo!"
}else{
    acho "Os valores nao forma lado de um triangulo!"
}
