<?php

$a = null;
$b = null;
$c = 10;


//se $a for null vai para o $b, se $b também for null vai para $c;
//porem se $b != null para no $b;
echo $a ?? $b ?? $c;


//adiciona a "c" e passa para "a"
$a = ++$c;

echo "<br> a = " . $a . ", c = " . $c;

//atribui "$c" para "$b" depois soma a $c mais 1
$b = $c++;

echo "<br> b = " . $b . ", c = " . $c . "<br>";


