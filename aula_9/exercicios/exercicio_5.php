<?php
// Faça uma função que recebe um valor inteiro e verifica se o valor é par.
//  A função deve retornar um valor booleano (true ou false).

function isPar($number){
    if($number % 2 == 0){
        return "true \n";
    }else{
        return "false \n";
    };
};

echo isPar(3);
?>