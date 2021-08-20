<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if($idade >= 18){
    echo("Você tem $idade anos. PODE entrar!!!");
}else if($idade >= 16 and $numeroDePessoas = 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
}else{
    echo "Você tem menos de $idade anos e não está acompanhado, NÃO pode entrar!!!!!";
}
