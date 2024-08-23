<?php

    echo "Bem vindo ao Screen Match \n";

    $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];
    function mensagem_genero(){
        global $filme;       
        if($filme["genero"] == "" ){
            echo $filme["genero"] = "Genero do filme não informado \n" ;
        }else{
            echo "Genero: " ,$filme["genero"], "\n";
        };
    }

    function mensagem_ano(){
        global $filme;     
        if($filme["anoDeLancamento"] >= 2024){
            echo "O filme ", $filme["nomeFilme"], " é uma estreia \n";
        }elseif($filme["anoDeLancamento"] < 2024 && $filme["anoDeLancamento"] >= 2022){
            echo "O filme ", $filme["nomeFilme"], " é novo, mas não uma estreia \n";
        }else{
            echo "O filme ", $filme["nomeFilme"], " é um classico \n";
        };
    }

    function calcular_media_nota(){
        global $filme;
        $mediaNotas = array_sum($filme["notasFilmes"]) / count($filme["notasFilmes"]);
        echo "Avaliação: $mediaNotas\n";
    };



    $filme = [
        "nomeFilme" => "Ex Nome",
        "anoDeLancamento" => 2024,
        "genero" => $genero[2],
        "notasFilmes" => [6, 5, 7, 8]
    ];

    mensagem_ano();
    mensagem_genero();
    calcular_media_nota();


?>