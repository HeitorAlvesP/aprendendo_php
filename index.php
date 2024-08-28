<?php

    echo "Bem vindo ao Screen Match \n";
    include __DIR__ . "/src/funcoes.php";

    $cd_genero = [0 => "Ação", 1 => "Comedia"   , 2 => "Corrida"  ,3 =>  "Romance"  ,4 => "Terror"];

    $filme = criafilme(
        "HULL",
        2021,
        1,
        [5, 5, 5]
    );

    $filme2 = criafilme(
        "Thor: Rag",
        1994,
        0,
        [9,8,9]
    );

    // $filmeComoJson =  json_encode($filme);
    // file_put_contents(__DIR__ . ('/filme.json'), $filmeComoJson);
    
    // // $filmeComoAss = __DIR__ . ('/filme.json');
    // // $filmeArray = file_get_contents($filmeComoAss);

    // // echo $filmeArray;

    var_dump($filme);
    var_dump($filme2);

?>