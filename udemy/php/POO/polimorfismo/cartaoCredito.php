<?php   
    class CartaoCredito implements Pagamento{
        public function pagar(float $valor){
            echo "Pagamento no valor de $valor gerado com via cartao de credito...<br>";
        }
    }