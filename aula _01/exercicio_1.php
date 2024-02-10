<?php
/*
1)Faça um script que solicite do usuário dois número e  imprima a soma
2) Faça um script que solicite do usuário e imprima a soma de dois números e concatene com a seguinte frase: “foi o resultado da soma”
3) Faça um script que solicite a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius. Utilize a seguinte fórmula: C = (5 * (F-32) / 9).
4) Faça um script que calcule seu peso ideal de uma pessoa. Você deve solicitar do usuário o sua altura. Considere as fórmulas abaixo para o calculo do peso.
5) Para homens: (72.7*h) - 58
6) Para mulheres: (62.1*h) - 44.7

*/
// 1)
$primeiro_numero= readline();
$segundo_numero= readline();

// echo $resultado= $primeiro_numero + $segundo_numero;

// --------------------------------------------------------------

//2)

$primeiro_numero= readline();
$segundo_numero= readline();

$resultado= $primeiro_numero + $segundo_numero;

// echo $cocatena = "Foi o resultado da soma: ". $resultado;

//---------------------------------------------

//3)
$grau_ferenheit = readline("Qual seu grau ferenheit?");
echo $resultado = (5 * ($grau_ferenheit-32) / 9)

// ---------------------------------

// 4)

$homem_ou_mulher = readline("Voce e homem ou mulher? ");

if ($homem_ou_mulher == "mulher") {
    $altura_mulher = readline("qual sua altura?");
    echo "Seu peso ideal e: ". (62.1* $altura_mulher) - 44.7
} else {
    $altura_homem = readline("qual sua altura?");
    echo "Seu peso ideal e: ". (62.1* $altura_homem) - 44.7;
}


$altura_homem = readline("Qual sua altura?");



?>