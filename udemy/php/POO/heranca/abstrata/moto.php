<?php
    class Moto extends Veiculo{

        public function __construct($marca, $modelo, $ano){
            parent::__construct($marca,$modelo,$ano);
        }
        public function acelerar(){
            return "o carro da marca $this->marca do modelo $this->modelo esta acelerando a 160km/h<br>";
        }

        public function frear(){
            return "o carro da marca $this->marca do modelo $this->modelo esta freando<br>";
        }
    }