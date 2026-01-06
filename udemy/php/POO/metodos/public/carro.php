<?php


    class Carro{
        public string $modelo;
        public int $ano;
        public float $preco;

        public function __construct($preco, $ano,$modelo) {
            $this->preco = $preco;
            $this->ano = $ano;
            $this->modelo = $modelo;
        }

        function Apresentou(){
            return "O carro $this->modelo do ano $this->ano que custa $this->preco é muito bom";
        }
    }