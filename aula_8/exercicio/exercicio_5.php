<?php
$numeros_pa = [];
for($i = 10; $i <= 500; $i++){
    if($i%2==0){
     array_push($numeros_pa, $i); 
    }
}
$soma_array = array_sum($numeros_pa);
echo $soma_array . "\n";

?>