<?php

function duplicar(&$numero)
{
    $numero *= 2;
}

function somar($numero)
{
    echo $numero + 5;
}

$valor = 10;
echo "Valor antes da função $valor \n";
duplicar($valor);
somar($valor);
// echo "Valor apos a função: $valor";
