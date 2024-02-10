<?php

// 1) Faça uma calculadora eletrônica que faz contas entre dois números. O usuário deverá digitar os números e escolher a operação entre o primeiro e o segundo, nesta ordem. Operadores = +, -, *, /

$operation_math = readline("Escolhar o tipo de operacao: + = 1, - = 2, * = 3, / = 4 ?");
$one_number = readline("enter a number: ");
$two_number = readline("enter another number: ");

function cal($num1, $num2, $operacao){
     if($operacao == 1){
         $res = $num1 + $num2;
     }elseif($operacao == 2){
         $res = $num1 - $num2;
     }elseif($operacao == 3){
         $res = $num1 * $num2;
     }elseif($operacao == 4){
         $res = $num1 / $num2;
     }else{
         echo "Você escolheu uma opção de operação invalida!";
     };
     
     echo $res;
};

cal($one_number, $two_number, $operation_math);


?>