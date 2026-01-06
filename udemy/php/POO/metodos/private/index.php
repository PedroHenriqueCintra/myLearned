<?php
    require_once "carro.php";    
    $car = new Carro(12000,2020,"Tracker");
    echo $car->getAno();
    echo $car->Apresentou();
    $car->setModelo("onix");
    echo $car->Apresentou();