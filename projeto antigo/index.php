<?php

    require __DIR__ . '/src/funcoes.php';
    $cd_genero = [0 => "Ação", 1 => "Comedia"   , 2 => "Corrida"  ,3 =>  "Romance"  ,4 => "Terror"];
    echo "Bem vindo ao screen-match";

    $ExFilme = criafilme(
        "Thor",
        2022,
        4,
        [5, 5, 5]
    );

    $ExSerie = criaSerie(
        'dark', 
        2022, 
        1, 
        200, 
        [5, 6, 8, 7]
    );


    var_dump($ExFilme);

?>