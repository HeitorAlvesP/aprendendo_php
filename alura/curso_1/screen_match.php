<?php

    echo "Bem vindo ao Screen Match \n";

    $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];

    function mensagem_ano(){
        global $filme;     
        if($filme["anoDeLancamento"] >= 2024){
            echo "Filme é uma estreia \n";
        }elseif($filme["anoDeLancamento"] < 2024 && $filme["anoDeLancamento"] >= 2022){
            echo "Filme é novo \n";
        }else{
            echo "Filme ne novo não \n";
        };
    }



    $filme = [
        "nomeFilme" => "Filme",
        "anoDeLancamento" => 2024,
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

    mensagem_ano();


?>