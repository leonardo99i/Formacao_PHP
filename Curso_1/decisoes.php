<?php

$idade = 21;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if($idade >= 18){
    echo("Você tem $idade anos. PODE entrar");
}else{
    echo "Você tem menos de 18 anos, NÃO pode entrar";
}