<?php

class Pessoa{

       public $nome;
       public $cpf;
       public $endereco;
       public $telefone;
       public $altura;
       public $peso;
       
       
       public function __construct($nome){
        $this -> $nome =  $nome;

       }


       /**
        * Get the value of nome
        */ 
       public function getNome()
       {
              return $this->nome;
       }



       /**
        * Get the value of cpf
        */ 
       public function getCpf()
       {
              return $this->cpf;
       }

       /**
        * Set the value of cpf
        *
        * @return  self
        */ 
       public function setCpf($cpf)
       {
              $this->cpf = $cpf;

              return $this;
       }

       /**
        * Get the value of endereco
        */ 
       public function getEndereco()
       {
              return $this->endereco;
       }

       /**
        * Set the value of endereco
        *
        * @return  self
        */ 
       public function setEndereco($endereco)
       {
              $this->endereco = $endereco;

              return $this;
       }

       /**
        * Set the value of telefone
        *
        * @return  self
        */ 
       public function setTelefone($telefone)
       {
              $this->telefone = $telefone;

              return $this;
       }

       /**
        * Get the value of altura
        */ 
       public function getAltura()
       {
              return $this->altura;
       }

       /**
        * Set the value of altura
        *
        * @return  self
        */ 
       public function setAltura($altura)
       {
              $this->altura = $altura;

              return $this;
       }

       /**
        * Get the value of peso
        */ 
       public function getPeso()
       {
              return $this->peso;
       }

       /**
        * Set the value of peso
        *
        * @return  self
        */ 
       public function setPeso($peso)
       {
              $this->peso = $peso;

              return $this;
       }

    //    method

    public  function calcularIMC($altura, $peso){
        return floor($this->peso = $peso / $this -> $altura = $altura);
    }

}

$eu = new Pessoa("Gilvan");


var_dump($eu->calcularIMC(1.8, 89));

?>