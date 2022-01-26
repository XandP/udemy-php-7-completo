<?php

/*
$anoNascimento = 2002;
$nomeCompleto = 'Alexandre Pereira';
*/

$nome = 'Alexandre';
$sobrenome = 'Pereira';
$nomeCompleto = $nome . ' ' . $sobrenome;

echo $nomeCompleto;
echo '</br>';

exit;

unset($nome);

if(isset($nome)) {
    echo $nome;
}

