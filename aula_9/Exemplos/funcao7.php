<?php


function contarChamadas()
{
    static $contador = 0;
    $contador++;
    echo "Esta é a chamada número " . $contador . "\n";
}


$contador = 1;

contarChamadas(); //1
contarChamadas(); //2
contarChamadas(); //3

echo $contador;
