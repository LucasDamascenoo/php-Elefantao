
<?php


$idade = 18;

$acompanhado = true;

if ($idade >= 18){
    echo "você tem $idade anos e pode entrar na balada";
}elseif ($idade >= 16 && $acompanhado == true) {
    echo "você tem $idade anos mas pode entrar pois esta acompanhado";
}else {
    echo "você não pode entrar pois eres menor de idade";
}

