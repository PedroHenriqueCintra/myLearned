<?php
    class pessoa{
        public string $nome;
        private $idade;

        public function __construct($pnome, $pidade) {
            $this->nome = $pnome;
            $this->idade = $pidade;
        }

        public function saudacao(){
            return "Meu nome é {$this->nome} e tenho {$this->idade} anos";
        }

        public function correr(){
            return $this->nome . " está correndo";
        }
    }
?>