<?php
// Crie uma função que receba 2 valores inteiros como argumentos e
//  retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0. 
function maior($valor1, $valor2){
    $maior_valor = $valor1;
    $maior_valor >= $valor2 ? print_r( "O maior valor é :". $maior_valor): print_r("O maior valor é: ".$valor2);
}

echo maior(4, 10);

?>