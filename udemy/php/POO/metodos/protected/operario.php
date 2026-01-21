<?php
require_once "funcionario.php";
    class Operario extends Funcionario{
        private string  $cargo;

        public function __construct($cargo,$nome , $salario) {
            $this->cargo = $cargo;
            parent :: __construct($nome,$salario);
        }

        public function gerarBonus(){
            $bonus = $this->calcularBonus();
            return "$this->nome recebera um salario de: e um bonus de: $bonus";
        }
    }