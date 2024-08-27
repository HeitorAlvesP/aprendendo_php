<?php

    echo "Bem vindo ao Screen Match \n";

    $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];

    require __DIR__ . "/funcoes.php";

    $filme = [
        "nomeFilme" => "Ex Nome",
        "anoDeLancamento" => 2024,
        "genero" => $genero[2],
        "notasFilmes" => [6, 5, 7, 8]
    ];

    mensagem_ano();
    mensagem_genero();
    calcular_media_nota();

    $filmeComoJson =  json_encode($filme);
    file_put_contents(__DIR__ . ('/filme.json'), $filmeComoJson);
    
    $filmeComoAss = __DIR__ . ('/filme.json');
    $filmeArray = file_get_contents($filmeComoAss);

    echo $filmeArray;


?>