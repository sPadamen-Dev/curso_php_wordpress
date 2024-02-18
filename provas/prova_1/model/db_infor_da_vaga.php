<?php

class InformacaoDaVaga{
    public $nome_da_empresa;
    public $tecnologias;
    public $descricao_da_vaga;
    public $endereco;
    public $salario;
    public $tipo_de_vaga;
    public $clt_pj;
    public $tamanho_da_empresa;
    public $nivel_de_experiencia;

    public function __construct($nome_da_empresa, $tecnologias,$descricao_da_vaga, $endereco, $salario, $tipo_de_vaga, $clt_pj, $tamanho_da_empresa, $nivel_de_experiencia){
        $this -> nome_da_empresa = $nome_da_empresa;
        $this -> tecnologias =[$tecnologias];
        $this -> descricao_da_vaga = $descricao_da_vaga;
        $this -> endereco = $endereco;
        $this -> salario = $salario;
        $this -> tipo_de_vaga = $tipo_de_vaga;
        $this -> clt_pj = $clt_pj;
        $this -> tamanho_da_empresa = $tamanho_da_empresa;
        $this -> nivel_de_experiencia = $nivel_de_experiencia;

    }

    // public function getExibirInformacoes(){
    //     $db_dados_da_vaga = [
    //         $this -> nome_da_empresa,
    //         $this -> tecnologias,
    //         $this -> descricao_da_vaga,
    //         $this -> endereco,
    //         $this -> salario,
    //         $this -> tipo_de_vaga,
    //         $this -> clt_pj,
    //         $this -> tamanho_da_empresa,
    //         $this -> nivel_de_experiencia,
    //     ];

    //     return $db_dados_da_vaga;
    // }
}



$empresa1 = new InformacaoDaVaga(
     "MK TECNOLOGIA",
     ["javascript", "c++","wordpress"],
     "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...",
     "faro da barra - BA",
     "4.500",
     "remota", 
     "clt",
     "grande porte",
     "senior"
);

$empresa2 = new InformacaoDaVaga(
    "MK TECNOLOGIA",
    ["php", "phyton","react"],
    "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...",
    "av 15 de novembro - sp",
    "2.500",
    "remota", 
    "pj",
    "pequeno porte",
    "junior"
);

$empresa3 = new InformacaoDaVaga(
    "MK TECNOLOGIA",
    ["php", "wordpress","javascript"],
    "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...",
    "av 15 de novembro - sp",
    "2.500",
    "presencial", 
    "pj",
    "pequeno porte",
    "junior"
);

$bd_infor_das_vagas =[
    "empresa1" => $empresa1, "empresa2" => $empresa2, "empresa3" => $empresa3
];


?>