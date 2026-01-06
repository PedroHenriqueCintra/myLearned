<?php
    class ContaBancaria{
        protected string $titular;
        protected string $numConta;
        protected string $agencia;
        protected float $saldo;

        public function __construct($titular, $numConta, $agencia, $saldo){
          $this->titular = $titular;
          $this->numConta = $numConta;
          $this->agencia = $agencia;
          $this->saldo = $saldo;
        }

        public function consultarSaldo(){
            return "Saldo atual de: $this->saldo<br>";
        }

        public function sacar($valor){
        if($valor <= 0):
            throw new InvalidArgumentException("Valor insuficiente");
            //Uma classe de excessão que diz que o parametro passado nao condiz com oque esta sendo pedido
            endif;
            if($valor > $this->saldo):
                throw new InvalidArgumentException("Não foi possivel sacar o dinheiro..");
            endif;
            $this->saldo -= $valor;
            return "Saque de $valor realizado com sucesso <br> Novo saldo atualizado em $this->saldo <br>";
        }

        public function depositar($valor){
            if($valor <= 0):
                throw new InvalidArgumentException("Valor insuficiente..");
                endif;
                $this->saldo += $valor;
                return "Deposito de $valor reais realizado com sucesso <br> seu novo saldo é de $this->saldo <br>";
        }

        public function getTitular(){
            return $this->titular;
        }
        public function getNumConta(){
            return $this->numConta;
        }

        public function getAgencia(){
            return $this->agencia;
        }
        public function getSaldo(){
            return $this->saldo;
        }

        public function setTitular($titular){
            $this->titular = $titular;
        }

        public function setNumConta($p){
            $this->numConta = $p;
        }

        public function setAgencia($p){
            $this->agencia = $p;
        }

        public function setSaldo($p){
            $this->saldo = $p;
        }
    }