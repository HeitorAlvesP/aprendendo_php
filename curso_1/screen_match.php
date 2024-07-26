<?php

    $nome_do_filme = "Top Gun";
    $ano_de_lançamento = $argv[1] ?? 2024;
    $inclui_no_plano = true;

    $soma_de_notas = 0;
    $nota_de_filme = $soma_de_notas / ($argc - 1);

    echo $nota_de_filme . ", é a nota do filme \n";

    if ($ano_de_lançamento >= 2024) {
        echo "Esse filme é um lançamento";
    }else {
         echo "Não é tão novo assim";
    };

    /*$genero = match ($nome_do_filme) {
        "" => "Ação" ,
        "" => "comedia",
        "" => "Ciencia" ,
        "" => "Romance",
        default => ' desconhecido'
    };*/

    echo "\n";

    echo "Esse é um filme de " . $genero ,"\n"; 

    echo $argc;


?>