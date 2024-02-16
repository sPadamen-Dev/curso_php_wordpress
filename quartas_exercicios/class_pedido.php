<?php

class Pedido {
    public $nome;
    public $itens;

    public function __construct($nome, $produto){
        $this->nome = $nome;
        $this->itens = [$produto];
    }

    public function aplicarDesconto(){
        $total = array_sum($this->itens[0]);
        if($total > 50 & $total < 100){
            return $total * 1.05;
        }elseif($total > 100){
            return $total * 1.10;
        }else{
            return $total;
        }

    }

    public function calcularQuantidade(){
        $qtd = count($this->itens[0]);

        return $qtd;

    }

}


$pedido1 = new Pedido("gilvan", [32.2, 23.2]);

print_r($pedido1->calcularQuantidade());
?>