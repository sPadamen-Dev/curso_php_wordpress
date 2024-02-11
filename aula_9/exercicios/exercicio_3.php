<?php
// <!-- Crie uma f00unção que receba 2 notas (F1 e F2) de um aluno e retorne um indicando se o aluno passou (passou se maior que 7).  -->
    function resultado($f1, $f2){
       $res =  ($f1 + $f2)/2 >= 7 ?  print_r("Voce passou de ano") :  print_r("Voce repetiu de ano");
        return $res;
    }

resultado(4,10)

?>