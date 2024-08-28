<?php 

    include __DIR__ . '/modelo/Filme.php';    

    function define_genero($filme){
        $genero = ["Ação", "Comedia", "Corrida", "Romance", "Terror"];    
        return $genero[$filme];
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

    function calcular_media_nota($filme){
        $mediaNotas1 = array_sum($filme) / count($filme);
        $mediaNotas = round($mediaNotas1, 1);
        return $mediaNotas;
    };

    function criafilme(string $nomeFilme, int $anoDeLancamento, int $genero, array $notasFilme): Filme {

        $Filme = new Filme();



        // return[
        //     'nome' =>  $nomeFilme,
        //     'ano' => $anoDeLancamento,
        //     'genero' => define_genero($genero),
        //     'notasFilme' => calcular_media_nota($notasFilme)
        // ];
    }

?>