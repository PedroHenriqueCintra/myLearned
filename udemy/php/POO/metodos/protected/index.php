<?php
    require_once "gerente.php";
    require_once "operario.php";
    require_once "funcionario.php";

    $gerente = new Gerente("Patricia", 5000, "gerente de projetos");
    echo $gerente->apresentarFuncionario();
    echo $gerente->gerarBonus();
    echo "<br><hr><br>";    
