<?php

function contarChamadas()
{
    static $contador = 0;
    $contador++;
    echo "Esta é a chamada número " . $contador . "\n";
}
