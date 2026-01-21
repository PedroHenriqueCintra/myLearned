<?php
    class Tv extends Eletronicos {
        private string $modelo;
        private int $polegada;

        public function __construct($modelo, $polegada, $marca) {
            parent :: __construct($marca);
            $this->modelo = $modelo;
            $this->polegada = $polegada;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($p){
            $this->modelo = $p;
        }

        public function getPolegada(){
            return $this->polegada;
        }

        public function setPolegada($p){
            $this->polegada = $p;
        }

        public function apresentar(){
            return "A tv da marca $this->marca e do modelo $this->modelo e tem $this->polegada polegadas";
        }
    }