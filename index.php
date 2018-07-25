<?php

echo "Olá Mundo";

//TROCANDO VALORES
//Os valores são trocados com apenas duas variaveis

$a = 7;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "A = " . $a . ", B = " . $b;

$vet = [0,1,2,3];

echo $vet[0];
