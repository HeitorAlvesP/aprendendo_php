<?php

    require __DIR__ . '/src/funcoes.php';
    $cd_genero = [0 => "Ação", 1 => "Comedia"   , 2 => "Corrida"  ,3 =>  "Romance"  ,4 => "Terror"];
    echo "Bem vindo ao screen-match";

    $SLa = criafilme(
        "Thor",
        2022,
        1,
        [5, 5, 5]
    );

    var_dump($SLa);



?>