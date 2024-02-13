<?php

function exibeAno()
{
    $ano = date("Y");
    return $ano;
}

$mutiplicar = exibeAno() * 2;
echo $mutiplicar;
// echo exibeAno();
