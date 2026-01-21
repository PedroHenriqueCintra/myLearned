<?php
    require_once 'classes.php';

    $p = new pessoa("Pedro", 16);
    echo $p->nome . "<br><hr>";
    echo $p->saudacao(). "<br><hr>";
    echo $p->correr() . "<br><hr>";
    var_dump($p);
?>