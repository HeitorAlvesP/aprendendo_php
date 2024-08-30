<?php 

    require __DIR__ . '/modelo/Filme.php';  
    require __DIR__ . '/modelo/Serie.php'; 

    function define_genero($generos){
        $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];    
        return $genero[$generos];
    }

    function mensagem_ano($filme){
        if($filme["ano"] >= 2024){
            echo "O filme ", $filme["nome"], " é uma estreia \n";
        }elseif($filme["ano"] < 2024 && $filme["ano"] >= 2022){
            echo "O filme ", $filme["nome"], " é novo, mas não uma estreia \n";
        }else{
            echo "O filme ", $filme["nome"], " é um classico \n";
        };
    }

    function calcular_media_nota($Media){
        $mediaNotas1 = array_sum($Media) / count($Media);
        $mediaNotas = round($mediaNotas1, 1);
        return $mediaNotas;
    };


?>