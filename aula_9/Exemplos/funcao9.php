<?php

function somar($numero1, $numero2)
{
    echo "Soma: " . $numero1 + $numero2 . " \n";
}
function multiplicar($numero1, $numero2)
{
    echo "Multiplicação: " . $numero1 * $numero2 . " \n";
    if($numero1*$numero2>10){
        somar($numero1,$numero2);
    }
    else {
        subtracao($numero1,$numero2);
    }
}
function subtracao($numero1, $numero2)
{
    echo "Subtração: " . $numero1 - $numero2 . " \n";
}

for ($i = 0; $i < 1; $i++) {
    $numero1 = readline("Digite o primeiro numero ");
    $numero2 = readline("Digite o segundo numero ");
    somar($numero1, $numero2);
    multiplicar($numero1, $numero2);
    subtracao($numero1, $numero2);
}
