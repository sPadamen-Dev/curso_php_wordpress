<?php

$nomes = [];
for($i = 1; $i <= 3; $i++){
    $nome = readline("Digite um nome? ");
    array_push($nomes, $nome);
};
$search = readline("Qual nome deseja procura? ");
$indice_pesquisa = array_search($search, $nomes);
print_r($nomes[$indice_pesquisa]);

// foreach($nomes as $value){
//     if($seach == "$value"){
//         echo "$value encontra-se na array";
//         break;
//     }else{
//         echo "Nome não encontrado na array";
//         break;
//     };
// };
?>