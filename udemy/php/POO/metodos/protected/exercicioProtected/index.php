<?php
    require_once "premium.php";
    $premium = new cursoPremium(true, "Curso em video", 21);
    echo $premium->detalhesPremium();
    echo "<br><hr>";
    $p1 = new cursoPremium(false, "js with ts", 19);
    echo $p1->detalhesPremium();