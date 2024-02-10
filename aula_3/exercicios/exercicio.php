<?php
$frase = readline("Escreva uma frase? ");
$vezes_a_se_repete = readline("Quantas vezes quer repete? ");
$incremento = 1;
while($incremento <= $vezes_a_se_repete){
    
    echo "A $frase ta se repetindo " . $incremento . "\n";
    
    $incremento = $incremento + 1;
};

?>