<?php
// Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
// Se o valor da soma for negativo o método deverá retornar o valor 0. 

function soma($numero, $numero2){
    $sum = $numero + $numero2;
    if($sum > 0){
        return "O valor da soma é: $sum e é maior que zero";
    }else{
        return "O valor da soma é abaixo de zero";
    }
}

echo soma(1, -1);

?>