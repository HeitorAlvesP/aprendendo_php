<? 
$opcoes = [0 , 1 , 2];

echo "
0_ Pedra
1_Papel
2_tesoura

";
echo 'Faça sua escolha: ';
$escolha1 = trim(fgets(STDIN));
$esc = (int)$escolha1;

$eclpc = 1;
$escolha = $opcoes[$esc];

if ($escolha !== 1 and $escolha !== 2 and $escolha !== 0 ){
    echo 'Escolha errada';
}else{
    if($escolha == $eclpc) {
        echo 'Empate';
    } elseif (($esc == 0 && $eclpc == 2) || ($esc == 1 && $eclpc == 0) || ($esc == 2 && $eclpc == 1)) {
        echo 'Você venceu';
    }else {
        echo 'Você Perdeu';
    }
}
?>

