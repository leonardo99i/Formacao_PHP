<?php

$peso = 108;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu imc é $imc, ele está ";

if($imc < 18){
    echo "baixo";
}elseif($imc < 15){
    echo "dentro";
}else{
    echo "acima";
}

echo " do recomendado ";