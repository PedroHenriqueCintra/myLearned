<?php
    require_once "contaBancaria.php";    
    class ContaJuridica extends ContaBancaria{
        private string $cnpj;

        public function __construct(string $doc, $titular, $numConta, $agencia, $saldo){
            $this->cnpj = $doc;
            parent::__construct($titular, $numConta, $agencia, $saldo);
        }

        public function getDoc(){
            return $this->cnpj;
        }
        public function setDoc($doc){
            $this->cnpj = $doc;
        }
    }
?>