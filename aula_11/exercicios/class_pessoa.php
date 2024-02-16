<?php

class Pessoa{

       public $nome;
       public $cpf;
       public $endereco;
       public $telefone;
       public $altura;
       public $peso;

       public function __construct($nome, $cpf, $endereco, $telefone, $altura, $peso)
       {
              $this -> nome = $nome;
              $this -> cpf = $cpf;
              $this -> endereco = $endereco;
              $this -> telefone = $telefone;
              $this -> altura = $altura;
              $this -> peso = $peso; 
       }

       public function calcularIMC(){
              $resultado = $this->peso / $this-> altura;
              return $resultado * 2 ;
       }

       public function exibirInformacao(){
              
              $calculoImc = self::calcularIMC();
              return "Nome: ".$this-> nome ."\n"."CPF: ".$this->cpf. "\n". "Endereco: ".$this->endereco."\n". "Telefone: ".$this->telefone . "\n"
              . "Altura: " . $this -> altura . "\n" . "Peso: ". $this->peso . "\n". "Calculo IMC: ". $calculoImc; 
       }


}
       
$pessoa1 = new Pessoa("Gilvan", "561.2121.2121-1", "Rua lusiania", "119785929442", 183, 89);

print_r($pessoa1->exibirInformacao());


?>