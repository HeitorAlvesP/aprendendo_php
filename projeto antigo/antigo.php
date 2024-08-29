<?php

    echo "Bem vindo ao Screen Match \n";
    include __DIR__ . "/src/funcoes.php";

    $cd_genero = [0 => "Ação", 1 => "Comedia"   , 2 => "Corrida"  ,3 =>  "Romance"  ,4 => "Terror"];
    
    $filme = criafilme(
        "HULL",
        2021,
        1,
        [5, 5, 5]
    );
   
    var_dump($filme);


?>