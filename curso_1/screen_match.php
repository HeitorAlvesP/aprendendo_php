<?php

    $nome_do_filme = "Top Gun";
    $ano_de_lançamento = $argv[1] ?? 2024;
    $inclui_no_plano = true;

    $lista_de_notas = [2, 6, 7, 8, 3];
    $soma_de_notas = array_sum($lista_de_notas);
    $num = count($lista_de_notas);

    $nota_de_filme = $soma_de_notas / $num;

    echo $nota_de_filme . ", é a nota do filme \n";

    if ($ano_de_lançamento >= 2024) {
        echo "Esse filme é um lançamento";
    }else {
         echo "Não é tão novo assim";
    };

    $genero = match ($nome_do_filme) {
        "" => "Ação" ,
        "" => "comedia",
        "" => "Ciencia" ,
        "" => "Romance",
        default => 'Nome desconhecido'
    };

    echo "\n";

    echo "Esse é um filme de " . $genero;


?>