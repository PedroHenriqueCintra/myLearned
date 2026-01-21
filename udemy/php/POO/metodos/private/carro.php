<?php


    class Carro{
        private string $modelo;
        private int $ano;
        private float $preco;

        public function __construct($preco, $ano,$modelo) {
            $this->preco = $preco;
            $this->ano = $ano;
            $this->modelo = $modelo;
        }

        // metodos get e set's
        public function getModelo(){
            return $this->modelo;
        }

        public function getAno(){
            return $this->ano;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setModelo($pmodelo){
            $this->modelo = $pmodelo;
        }

        public function setAno($pAno){
            $this->ano = $pAno;
        }

        function Apresentou(){
            return "O carro $this->modelo do ano $this->ano que custa $this->preco é muito bom";
        }
    }