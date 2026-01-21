<?php
    require_once "produto.php";    
    $produto = new Produto();
    $produto->setPreco(120.00);
    $produto->getPreco();
    $produto->setDescricao("Ventilador de chão");
    $produto->getPreco();
    $produto->apresentarProduto();