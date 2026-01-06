<?php
    require_once "motor.php";    

    class Carro{
        private string $nomeCarro;
        private Motor $motor;

        public function __construct($potenciaMotor, $nomeCarro) {
            $this->motor = new Motor($potenciaMotor);
            $this->nomeCarro = $nomeCarro;
        }

        public function apresentarCarro(){
            return "O carro $this->nomeCarro tem a potencia de : " . $this->motor->apresentarPotencia(). " CV <br>";
        }



        
    }