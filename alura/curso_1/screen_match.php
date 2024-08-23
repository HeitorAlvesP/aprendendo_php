<?php

    echo "Bem vindo ao Screen Match \n";

    $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];

    $filme = [
        "nomeFilme" => "Filme",
        "anoDeLancamento" => 2022,
        "genero" => $genero[1],
        "notasFilmes" => [6, 5, 7, 8]
    ];

    if($filme["genero"] == "" ){
        echo $filme["genero"] = "Genero do filme não informado \n" ;
    }else{
        echo $filme["genero"] ,"\n";
    };

     $mediaNotas = array_sum($filme["notasFilmes"]) / count($filme["notasFilmes"]);
     echo $mediaNotas, "\n";

    if($filme["anoDeLancamento"] <= 2022){
        echo "Filme novo \n";
    }else{
        echo "Ne novo não \n";
    };


?>