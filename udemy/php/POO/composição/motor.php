<?php
    class Motor{
        private int $potencia;

        public function __construct(int $ppotencia) {
            $this->potencia = $ppotencia;
        }

        public function GetPotencia(): int{
            return $this->potencia;
        }

        public function apresentarPotencia(){
            return "$this->potencia";
        }
    }