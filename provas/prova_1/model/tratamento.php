<?php
include("db_infor_da_vaga.php");

class Tratamento{
    public $search;
    public $database;

    public function __construct($search, $database){
        $this -> search = $search;
        $this -> database = $database;

    }

    /**
     * Get the value of search
     */ 
    public function getSearch()
    {
        return $this->search;
    }

    // metodos

    public function procuraPorPalavra(){

        for($i = 0; $i <= count($this -> database); $i++){
            if($this->database[$i]["tecnologias"] == null){
                return "Palavra nao encontrada";
            }else{
                foreach ($this->database[$i]["tecnologias"] as $palavra) {
                    if($this -> search == $palavra){
                        return $this -> database[$i];
                    }
            
                };
            }
        }  
    }

    public function procuraPorEndereco(){

        for($i = 0; $i <= count($this -> database); $i++){
            if(array_search($this->search, $this -> database[$i])){
                return $this -> database[$i];
            };
        }
        return "Nenhuma vaga nessa localidade";
    }



}

$requisicao = new Tratamento("php", $bd_infor_das_vagas);
$resultado = $requisicao->procuraPorPalavra();
var_dump($resultado);

?>