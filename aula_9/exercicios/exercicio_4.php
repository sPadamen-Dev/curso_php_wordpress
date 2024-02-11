<?php
// Faça uma função que recebe a idade de uma pessoa em anos, 
// meses e dias e retorna essa idade expressa em dias. 

$ano_que_nasceu = readline("Em qual ano nasceu? ");
$mes_que_nasceu = readline("Em qual mes nasceu? ");
$dia_que_nasceu = readline("Em qual dia nasceu? ");

function dias_de_vida($ano_que_nasceu,$mes_que_nasceu, $dia_que_nasceu ){
   $idade = (($ano_que_nasceu - 2024) * 12) + $mes_que_nasceu;
   $res_dias_vivo = ($idade * 365) + $dia_que_nasceu;
   return $res_dias_vivo;  
};

echo dias_de_vida($ano_que_nasceu, $mes_que_nasceu, $dia_que_nasceu);

?>