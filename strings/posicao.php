<?php

$frase = 'A repetição é a mãe da retenção.';
$palavra = 'mãe';

$alvo = strpos($frase, $palavra);
$texto1 = substr($frase, 0, $alvo);
$texto2 = substr($frase, $alvo + strlen($palavra), strlen($frase));

var_dump($texto1);
echo '</br>';
var_dump($texto2);