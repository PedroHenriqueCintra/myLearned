<?php

    $estados = ["AM" => "amazonas",
                "BH" => "Bahia",
                "SP"=> "Sao Paulo"
    ];

    $selecionado = $estados["AM"];
    // var_dump($selecionado);


    foreach($estados as $key => $value){
        var_dump($value);
        var_dump($key);
    }

     echo  count($estados);