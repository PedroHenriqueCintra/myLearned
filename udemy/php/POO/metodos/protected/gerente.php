<?php
    require_once "funcionario.php";
    
    class Gerente extends Funcionario{
        private string $cargo;
        
        public function __construct(string $nome, float $salario, string $cargo)
        {
            parent:: __construct($nome, $salario);
            $this->cargo = $cargo;
        }

        public function gerarBonus(){
            $bonus = $this->calcularBonus();
            return "$this->nome recebera um salario de: e um bonus de: $bonus";
        }
    }