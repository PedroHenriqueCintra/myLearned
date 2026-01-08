<?php   

    class Boleto implements Pagamento{
        public function pagar(float $valor ){
            echo "Pagamento no valor de $valor gerado com via boleto...<br>";
        }
    }