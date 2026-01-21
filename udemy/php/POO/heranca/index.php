<?php
    require_once "contaBancaria.php";
    require_once "contaFisica.php";
    require_once "contaJuridica.php";

    $cf = new contaFisica("000.000.000-01", "Pedro", "101", "bradesco", 50000.50);
    echo $cf->consultarSaldo();
    echo $cf->depositar(400);
    echo $cf->sacar(0.50);