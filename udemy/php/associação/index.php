<?php
require_once "cliente.php";
require_once "pedido.php";

$c = new cliente("Pedro", "pedrohccbranc@gmail.com");
$c2 = new cliente("eduardo", "eduardo@gmail.com");

$p = new pedido(12, 320.00, $c);
$p->apresentarPedido();