<?php   
    require_once "base.php";
    require_once "usuario.php";
    require_once "administrador.php";

    $adm = new Administrador(1, "Pedro", "pedrohccbranc@gmail.com", "valido","2025", "1234" );
    var_dump($adm);
    echo "<br>".$adm->autenticarUsuario("pedrohccbranc@gmail.com", "1234");
    $adm->updateDados("pedrohenriqueC@gmail.com", "joao", "2453");
    var_dump($adm);

  