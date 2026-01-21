<?php   
    require_once "pagamento.php";
    require_once "cartaoCredito.php";
    require_once "boleto.php";
    require_once "paypal.php";

    $p = new PaypPal();
    $cc = new CartaoCredito(); 
    $b = new Boleto();
    
    processarPagamento($b, 525.00);
    processarPagamento($cc,859.00);
    processarPagamento($p,130.50);
    
    function processarPagamento(Pagamento $formaPagamento, $valor){
        $formaPagamento->pagar($valor);
    }


