<!-- Faça um programa que receba 5 números. Após digitar cada número, 
o usuário deve receber imediatamente a informação se o número é par 
ou ímpar. Faça uma função para receber este número e retornar 
true se for par e false se for ímpar. -->

<?php

function parOuImpa(){
    for($i = 1; $i <= 5; $i++){
    $numero = readline("Digite seu numero? ");
        if($numero % 2 == 0){
            echo "Esse ". $numero . " e par. \n";
            continue;
        }else{
            echo "Esse ". $numero . " e Impa. \n";
            
        }
    };
    // return 
};

echo parOuImpa();

?>