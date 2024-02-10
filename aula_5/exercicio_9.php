<?php 

// Faça um script php para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 90,00 ou em galões de 3,6 litros, que custam R$ 28,00.
// Os preços serão informados ao usuário considerando 3 situações:
// Se ele comprar apenas latas de 18 litros;
// Se ele comprar apenas galões de 3,6 litros;
// Se ele misturar latas e galões: de forma que o preço seja o menor. 
// Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.
// Dica: Você pode utilizar funções para arredondar valores do php.
// ceil($valor) - Arredonda os valores para cima
// Ex.: ceil(5.75) = 6, ceil(5.9) = 6, ceil(5.1)=6
// floor(5.75)=5

$area_da_area_a_ser_pintada = readline("Qual tamanho da area a ser pintada? ") / 6;

// valor de lata de 18litros, e qauntidade
$valor_da_lata_18L = ($area_da_area_a_ser_pintada * 90) / 18;
$quantidade_de_lt_18L = $valor_da_lata_18L / 90;

// valor da lata de 3.6 Litros e quantidade
$valor_da_lata_3litros = ($area_da_area_a_ser_pintada * 28) / 3.6;
$quantidade_de_gl_3litros = $valor_da_lata_3litros / 28;

// comparacao entre latas e galoes e desconto



echo "Se compra apenas latas de 18 litros: \n",
"valor: R$ $valor_da_lata_18L\n",
"Quantidade de latas: $quantidade_de_lt_18L\n";

echo "Se compra apenas latas de 3,6 litros: \n",
"valor: R$ $valor_da_lata_3litros\n",
"Quantidade de latas: $quantidade_de_gl_3litros";

?>