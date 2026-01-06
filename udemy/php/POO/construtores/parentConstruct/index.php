<?php
    require_once "eletronicos.php";
    require_once "tv.php";

    $tv = new Tv("Ultra wide", 48, "lg");
    $tv->apresentar();