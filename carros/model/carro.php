<?php
    class Carro{
        public $id;
        public $nome;
        public $marca;
        public $ano;
        public $potencia;
        public $peso;
        public $inclusao;

        public function __construct($arrayCarros){
            if(array_keys($arrayCarros) != range(0, count($arrayCarros) - 1)){
                $this->id = $arrayCarros["ID"];
                $this->nome = $arrayCarros["NOME"];
                $this->marca = $arrayCarros["MARCA"];
                $this->ano = $arrayCarros["ANO"];
                $this->potencia = $arrayCarros["POTENCIA"];
                $this->peso = $arrayCarros["PESO"];
                $this->inclusao = $arrayCarros["INCLUSAO"];
            } else {
                $this->id = $arrayCarros[0];
                $this->nome = $arrayCarros[1];
                $this->marca = $arrayCarros[2];
                $this->ano = $arrayCarros[3];
                $this->potencia = $arrayCarros[4];
                $this->peso = $arrayCarros[5];
                $this->inclusao = $arrayCarros[6];
            }
        }
    }
?>