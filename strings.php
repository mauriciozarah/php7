<?php

$nome  = "mauricio";
$nome2 = 'wmastand';

//var_dump($nome, $nome2);

echo 'Nome: $nome';

echo "<br>";

echo strtoupper($nome) . "<br>";

echo strtolower($nome) . "<br>";

echo ucwords($nome) . "<br>";


////////////////////////////////////////////

$empresa = "Hcode";
//onde tiver o substitua pelo numero zero
$empresa = str_replace("o", "0", $empresa);

echo $empresa . "<br>";

///////////////////////////////////////////

$texto = "Onde foi que foi parar o abajour";

$query = strpos($texto, "que");

echo $query . "<br><br>";

//////////////////////////////////////////

$frase   = "A repetição é mãe da retenção";
$palavra = "mãe";

$posicaoPalavra = strpos($frase, $palavra);

$frase2 = substr($frase, $posicaoPalavra + strlen($palavra), strlen($frase));
echo $frase2;

echo "<br><br>";

$frase3 = substr($frase, 0, -1);
echo $frase3;

