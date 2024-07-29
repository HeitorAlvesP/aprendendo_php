<?php

    session_start();
    define('CONTROL', true);

    $usuario_logado = $_SESSION['usuario'] ?? null;

    if (empty($usuario_logado)){

    }else{

    };
    
