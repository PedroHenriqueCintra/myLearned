<?php
    require_once "carro.php";

    $car = new Carro(130.00, 2021, "corola");
    echo $car->Apresentou()."<br>";
    echo $car->preco;
    echo $car->modelo;
    echo $car->ano;