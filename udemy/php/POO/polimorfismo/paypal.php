<?php   
    class PaypPal implements Pagamento{
        public function pagar($valor){
            echo "Pagamento no valor de $valor gerado com via PayPal...<br>";
        }
    }