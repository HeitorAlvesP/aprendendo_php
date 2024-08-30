<?php

    class Filme{

        public string $nomeFilme;
        public int $anoLancamento;
        public int $genero;
        public array $notasFilme;

    };

    function criafilme(string $nomeFilme, int $anoDeLancamento, int $genero, array $notasFilme): Filme {

        $Filme = new Filme();
        $Filme->nomeFilme = $nomeFilme;
        $Filme->anoLancamento = $anoDeLancamento;
        $Filme->genero = $genero;
        $Filme->notasFilme = $notasFilme;
        return $Filme;

    }


?>