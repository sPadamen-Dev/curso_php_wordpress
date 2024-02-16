<?php

class Casa {
    // atributos
    public $cor;
    public $endereco;
    public $porta;
    public $janela;

    public function  __construct($cor, $endereco, $porta, $janela){
        $this -> $cor = $cor;
        $this -> $endereco = $endereco;
        $this -> $porta = $porta;
        $this -> $janela = $janela;
    }


    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Get the value of porta
     */ 
    public function getPorta()
    {
        return $this->porta;
    }

    /**
     * Get the value of janela
     */ 
    public function getJanela()
    {
        return $this->janela;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */ 
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

       //metodos
    
       public function pintar($cor){
        return self::setCor($cor);
        }

        public function abrirJanela(){
            return $this->$janela;
        }

        public function  fecharJanela(){
            return "Janela fechada";
        }

        
}

$minha_casa = new Casa("Branco", "Lusinia 58", "2 portas", true);
$minha_casa = new Casa("Branco", "Lusinia 58", "2 portas", true);
$minha_casa = new Casa("Branco", "Lusinia 58", "2 portas", true);
var_dump($minha_casa);