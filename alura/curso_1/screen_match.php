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

    //var_dump($filme);


?>