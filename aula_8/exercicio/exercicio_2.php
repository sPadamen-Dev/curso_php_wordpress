<?php
$nome = readline("Digite seu nome? ");
$idade = readline("Digite sua idade? ");

if($idade >= 18){
    echo "$nome é maior que 18 e tem $idade anos";
}else{
    echo "$nome é menor que 18 e tem $idade anos";
};

?>