<?php

$variavelGlobal = "Eu sou global";

function minhaFuncao()
{
    global $variavelGlobal;
    $variavelGlobal .= " - Acessada de dentro da funçao";
    echo $variavelGlobal;
}

minhaFuncao();
echo $variavelGlobal;
