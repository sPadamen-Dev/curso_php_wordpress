<?php
// Faça uma função que leia um número não determinado de valores positivos e retorna a média aritmética dos mesmos.
//  (Utilize o número -1 como critério de parada da repetição).
$quantidade = readline("Digite a quantidade de notas");

function somaArimetica($quantidade){
    $incremento = 1;
    $notas= array();
    while($incremento <= $quantidade){
    $pontuacao_das_notas = readline("Valor das notas? ");
    if($pontuacao_das_notas == -1){
        return "A media aritmetica e ". array_sum($notas) / $quantidade;
    }else{
        array_push($notas, $pontuacao_das_notas);
        $incremento++ ;
    };
    };
    return $notas;
};


 var_dump(somaArimetica($quantidade));

?>