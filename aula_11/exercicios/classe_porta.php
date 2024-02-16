<?php

class Porta{
    public $aberta;
    public $cor;
    public $altura;
    public $largura;

    public function __contruct($aberta){
        $this->$aberta = true;
    }


    /**
     * Get the value of aberta
     */ 
    public function getAberta()
    {
        return $this->aberta;
    }

    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
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
     * Get the value of largura
     */ 
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set the value of largura
     *
     * @return  self
     */ 
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Set the value of aberta
     *
     * @return  self
     */ 
    public function setAberta($aberta)
    {
        $this->aberta = $aberta;

        return $this;
    }

    // Methods

    public function abre(){
        return "A Porta esta aberta \n";
    }

    public function fecha(){
        return "A Porta esta fechada \n";
    }

    public function pintar($cor){
        return self::setCor($cor) ;
    }

}

$minha_porta = new Porta("fechada");
$minha_porta -> setAberta("aberta");
$minha_porta -> setCor("vermelho");
$minha_porta -> setAltura(2.13);
$minha_porta -> setLargura(1.80);

$minha_porta -> pintar("verde");


print_r($minha_porta);