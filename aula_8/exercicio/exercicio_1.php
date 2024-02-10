<?php
$numero = readline("Digite um valor? ");

if($numero > 0){
    echo "O número $numero é positivo";
}elseif($numero < 0){
    echo "O número $numero é negativo";
}else{
    echo "O número $numero é igual a zero";
};

?>