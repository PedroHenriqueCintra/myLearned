<?php
    require_once "contaBancaria.php";
    class contaFisica extends ContaBancaria{
        private string $cpf;

        function __construct(string $cpf , $titular, $numConta, $agencia, $saldo){
            $this->cpf = $cpf;
            parent::__construct($titular, $numConta, $agencia, $saldo) ;
        }

        function getCpf(){
            return $this->cpf;
        }

        function setCpf($cpf){
            $this->cpf = $cpf;
        }
    }