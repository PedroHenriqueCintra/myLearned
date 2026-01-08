<?php
     abstract class Veiculo{
        protected string $marca;
        protected string $modelo;
        protected string $ano;

        public function __construct($marca,$modelo,$ano){
           $this->marca = $marca;
           $this->modelo = $modelo;
           $this->ano = $ano;
        }
        abstract public function acelerar();
        abstract public function frear();
    }