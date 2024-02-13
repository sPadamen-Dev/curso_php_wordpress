<?php

function par_ou_impar($numero)
{
    $resto = $numero % 2;

    if ($resto == 0) {
        return '    PAR    ';
    } else {
        return '    IMPAR    ';
    }
}

// echo par_ou_impar(26);
// echo par_ou_impar(27);
// echo par_ou_impar(33);
// echo par_ou_impar(35);

$valor = par_ou_impar(2);
echo $valor;
