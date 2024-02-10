<?php
/*
Dr. João Neto te contratou para criar um programa que faz cinco perguntas para uma pessoa sobre um crime. 


As perguntas são:
"Você telefonou para a vítima?"
"Você esteve no local do crime?"
"Você mora perto da vítima?"
"Você devia para a vítima?"
"Você deu no coco e no relógio da vítima?"

O programa deve no final emitir uma classificação 
sobre a participação da pessoa no crime. Se a pessoa
 responder positivamente a 2 questões ela deve ser
  classificada como "Suspeita", entre 3 e 4 como 
  "Cúmplice" e 5 como "Assassino". Caso contrário,
   ele será classificado como "Inocente".

*/

$primeira_pergunta = readline("Você telefonou para a vítima?");
$segunda_pergunta = readline("Você esteve no local do crime?");
$terceira_pergunta = readline("Você mora perto da vítima?");
$quarta_pergunta = readline("Você devia para a vítima?");
$quinta_pergunta = readline("Você deu no coco e no relógio da vítima?");

$indice = 0;

$vetor = [$primeira_pergunta, $segunda_pergunta, $terceira_pergunta, $quarta_pergunta, $quinta_pergunta];

for ($i=0; $i >= 5 ; $i++) { 
    if($vetor[i] == "sim"){
        return $indice++;
    };
}

if($indice >= 1 || $indice <= 2){
    $resultado = "Suspeita";
}elseif($indice < 3 || $indice == 4){
    $resultado = "Cumplice";
}elseif($indice == 5){
    $resultado = "Assassino";
}else{
    $resultado = "Inocente"
}

echo $resultado