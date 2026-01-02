<?php
    class pedido{
        public int $pedido;
        public float $valor;
        public cliente $cliente;

        public function __construct($ppedido, $pvalor,cliente $pcliente) {
            $this->pedido = $ppedido;
            $this->valor = $pvalor;
            $this->cliente = $pcliente;
        }

        public function apresentarPedido(){
            echo "Numero do pedido : $this->pedido <br>";
            echo "Valor do pedido : $this->valor <br>";
            echo "Cliente :". $this->cliente->nome ."<br>";
            echo "Clinte email : ". $this->cliente->email ." <br>";
        }
    }
?>