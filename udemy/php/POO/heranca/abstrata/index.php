<?php  
    require_once "veiculo.php";
    require_once "moto.php";
    require_once "carro.php";

    $c = new Carro("Chevrolet","Tracker", "2020");
    $c->acelerar();
    $c->frear();