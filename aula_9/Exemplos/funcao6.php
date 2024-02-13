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
par_ou_impar(2);
echo $resto;
