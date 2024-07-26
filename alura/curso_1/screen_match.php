<?php

    $nome_do_filme = "Top Gun";
    //$ano_de_lançamento = $argv[1] ?? 2024;
    $inclui_no_plano = true;

    $contador = $argv[1];
    $soma_de_notas;

    for ($contador; $contador < $argc; $contador += 1) {
        $soma_de_notas += $argv[$contador];
    };


    $quantidade_de_notas = $argc -1;
    $nota_de_filme = $soma_de_notas / $quantidade_de_notas;

    echo $nota_de_filme . ", é a nota do filme \n";

    /*if ($ano_de_lançamento >= 2024) {
        echo "Esse filme é um lançamento";
    }else {
         echo "Não é tão novo assim";
    };*/

    /*$genero = match ($nome_do_filme) {
        "" => "Ação" ,
        "" => "comedia",
        "" => "Ciencia" ,
        "" => "Romance",
        default => ' desconhecido'
    };*/

    //echo "Esse é um filme de " . $genero ,"\n"; 
    //echo $argc;

?>